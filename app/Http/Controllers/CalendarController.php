<?php

namespace App\Http\Controllers;

use App\Calendar;
use App\Company;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("calendar.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $startdate = ($request->ddt != "")?$request->ddt : Carbon::now()->format("Y-m-d");

        $calendar = new Calendar();
        $countriesList = ["UAE" => 'United Arab Emirates', "USA" => 'United States America'];
        $companyList = Company::lists("company_name", "id");

        $randno = rand(1, 300);

        $calendar = $this->setDummyData($companyList, $calendar, $countriesList, $randno, $startdate);


        return view("calendar.create", compact("companyList", "calendar", "countriesList"));



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CalendarRequest $request)
    {
        $calendar = new Calendar();
        $calendar->company_id = $request->company_id;
        $calendar->country = $request->country;
        $calendar->city = $request->city;
        $calendar->meeting_with = $request->meeting_with;
        $calendar->type = $request->type;
        $calendar->meeting_date =  Carbon::parse($request->meeting_date)->format("Y-m-d");
        $calendar->meeting_from_time = $request->meeting_from_time;
        $calendar->meeting_to_time = $request->meeting_to_time;
        $calendar->remind_minutes = $request->remind_minutes;
        $calendar->save();

        return redirect("calendar");

    }

    /**
     * Return all calendar events
     */
    public function events(){

        $events = Calendar::all();
        return $events;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Calendar $calendar)
    {

        $calendar->meeting_date = Carbon::parse($calendar->meeting_date)->format("m/d/Y");
        $countriesList = ["UAE" => 'United Arab Emirates', "USA" => 'United States America'];
        $companyList = company::lists("company_name", "id");

        return view("calendar.edit", compact("companyList", "calendar", "countriesList"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CalendarRequest $request, Calendar $calendar)
    {
        $calendar->company_id = $request->company_id;
        $calendar->country = $request->country;
        $calendar->city = $request->city;
        $calendar->meeting_with = $request->meeting_with;
        $calendar->type = $request->type;
        $calendar->meeting_date =  Carbon::parse($request->meeting_date)->format("Y-m-d");
        $calendar->meeting_from_time = $request->meeting_from_time;
        $calendar->meeting_to_time = $request->meeting_to_time;
        $calendar->remind_minutes = $request->remind_minutes;
        $calendar->save();

        return redirect("calendar");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param $companyList
     * @param $calendar
     * @param $countriesList
     * @param $randno
     * @param $startdate
     */
    public function setDummyData($companyList, $calendar, $countriesList, $randno, $startdate) {


        $names = ["Jane Doe","John Doe","Ben Gomes","Mearl Rodrigues","Freda Gomes","Melissa Alfonso","Bella Swan","Kristen Stewart"];
        $calendar->company_id = array_rand($companyList->toArray());
        $calendar->country = array_rand($countriesList);
        $calendar->city = "Test City " . $randno;
        $calendar->meeting_with = $names[rand(0,7)];
        $calendar->type = "Test type " . $randno;
        $calendar->meeting_date = Carbon::parse($startdate)->format("m/d/Y");
        $calendar->meeting_from_time = "10:00 am";
        $calendar->meeting_to_time = "11:00 am";
        $calendar->remind_minutes = "30 min";

        return $calendar;
    }
}
