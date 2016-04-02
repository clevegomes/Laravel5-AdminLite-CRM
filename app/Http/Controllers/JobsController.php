<?php

namespace App\Http\Controllers;

use App\company;
use App\job;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class JobsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {

        $stat = in_array($request->stat, ["live", "expired"]) ? $request->stat : "live";
        if ($stat == "live") {
            $jobs = Job::where("closing_date", ">=", Carbon::now()->format("Y-m-d"))->orderBy('created_at',
                'desc')->get();
        } else {
            $jobs = Job::where("closing_date", "<", Carbon::now()->format("Y-m-d"))->orderBy('created_at',
                'desc')->get();
        }


        return view("jobs.index", compact("jobs", "stat"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $job = new Job();

        $countriesList = ["UAE" => 'United Arab Emirates', "USA" => 'United States America'];
        $companyList = Company::lists("company_name", "id");


        $job = $this->setDummyData($job, $companyList, $countriesList);


        return view("jobs.create", compact("companyList", "job", "countriesList"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\JobRequest $request) {
        $opening_closing_date = explode("-", $request->opening_closing_date);

        $job = new Job();
        $job->job_title = $request->job_title;
        $job->company_id = $request->company_id;
        $job->country = $request->country;
        $job->city = $request->city;
        $job->sector = $request->sector;
        $job->url_on_bloovo = $request->url_on_bloovo;
        $job->opening_date = Carbon::parse($opening_closing_date[0])->format("Y-m-d");
        $job->closing_date = Carbon::parse($opening_closing_date[1])->format("Y-m-d");

        $job->save();

        return redirect("jobs");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job) {

        $countriesList = ["UAE" => 'United Arab Emirates', "USA" => 'United States America'];
        $companyList = company::lists("company_name", "id");

        $job->opening_date = Carbon::parse($job->opening_date)->format("m/d/Y");
        $job->closing_date = Carbon::parse($job->closing_date)->format("m/d/Y");

        return view("jobs.edit", compact("companyList", "job", "countriesList"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\JobRequest $request, Job $job) {
        $opening_closing_date = explode("-", $request->opening_closing_date);
        $job->job_title = $request->job_title;
        $job->company_id = $request->company_id;
        $job->country = $request->country;
        $job->city = $request->city;
        $job->sector = $request->sector;
        $job->url_on_bloovo = $request->url_on_bloovo;
        $job->opening_date = Carbon::parse($opening_closing_date[0])->format("Y-m-d");
        $job->closing_date = Carbon::parse($opening_closing_date[1])->format("Y-m-d");

        $job->save();

        return redirect("jobs");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    /**
     * @param $job
     * @param $companyList
     * @param $countriesList
     */
    public function setDummyData($job, $companyList, $countriesList) {
        $randno = rand(1, 300);
        $job->job_title = "Test Job No#" . $randno;
        $job->company_id = array_rand($companyList->toArray());
        $job->country = array_rand($countriesList);
        $job->city = "TestCity" . $randno;
        $job->sector = "TestSector" . $randno;
        $job->url_on_bloovo = "bloovo.com/" . $randno;
        $job->opening_date = Carbon::now()->format("m/d/Y");
        $job->closing_date = Carbon::parse('next sunday')->format("m/d/Y");

        return $job;
    }
}
