<?php

namespace App\Http\Controllers;

use App\company;
use Illuminate\Http\Request;

use App\Http\Requests;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $level = in_array($request->level,["reg","apr","pros"]) ?$request->level : "reg";
        $levels = ["reg"=>"Registered","apr"=>"Approached","pros"=>"Prospects"];

        $companies = Company::where('level','=',$level)->orderBy('created_at', 'desc')->get();

        return view("companies.index",compact("companies","level","levels"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    $company = new Company();


	    $countriesList =["UAE"=>'United Arab Emirates',"USA"=>'United States America'];




	    /**
	     * Quick prefill
	     */

        $levels = ["reg"=>"Registered","apr"=>"Approached","pros"=>"Prospects"];
	    $company = $this->setDummyData($company, $countriesList,$levels);


	    return view("companies.create",compact('countriesList','company','levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CompanyRequest $request)
    {
        $companyobj = new Company();
        $companyobj->company_name = $request->company_name;
        $companyobj->country = $request->country;
        $companyobj->city = $request->city;
        $companyobj->sector = $request->sector;
        $companyobj->phone = $request->phone;
        $companyobj->email = $request->email;
        $companyobj->website = $request->website;
        $companyobj->profile_url = $request->profile_url;
        $companyobj->logoimg = rand(1, 6).".png";
        $companyobj->contact_person = $request->contact_person;
        $companyobj->contact_phone = $request->contact_phone;
        $companyobj->contact_mobile = $request->contact_mobile;
        $companyobj->contact_email = $request->contact_email;
        $companyobj->comments = $request->comments;
        $companyobj->level = $request->level;
        $companyobj->save();

        return redirect("companies");
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
    public function edit(Company $company)
    {
        $countriesList =["UAE"=>'United Arab Emirates',"USA"=>'United States America'];
        $levels = ["reg"=>"Registered","apr"=>"Approached","pros"=>"Prospects"];


        return view("companies.edit",compact('countriesList','company','levels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CompanyRequest $request, Company $companyobj)
    {

        $companyobj->company_name = $request->company_name;
        $companyobj->country = $request->country;
        $companyobj->city = $request->city;
        $companyobj->sector = $request->sector;
        $companyobj->phone = $request->phone;
        $companyobj->email = $request->email;
        $companyobj->website = $request->website;
        $companyobj->profile_url = $request->profile_url;
        $companyobj->contact_person = $request->contact_person;
        $companyobj->contact_phone = $request->contact_phone;
        $companyobj->contact_mobile = $request->contact_mobile;
        $companyobj->contact_email = $request->contact_email;
        $companyobj->comments = $request->comments;
        $companyobj->level = $request->level;
        $companyobj->save();

        return redirect("companies");
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
	 * @param $company
	 * @param $countriesList
	 */
	private function setDummyData($company, $countriesList,$levels)
	{
		$randno = rand(1, 300);
        $sectors = ["Real Estate","Banking","Retail","Financial","Health Care"];
		$company->company_name = "TestCompany" . $randno;
		$company->country = array_rand($countriesList);
		$company->level = array_rand($levels);
		$company->city = "TestCity" . $randno;
		$company->sector = $sectors[rand(0,4)];
		$company->phone = "+971 043434" . $randno;
		$company->email = $randno . "@test.com";
		$company->website = $randno . "test.com";
		$company->profile_url = $randno . "URL";
		$company->contact_person = "John Doe";
		$company->contact_phone = "+971  050394" . $randno;
		$company->contact_mobile = "+971 043323" . $randno;
		$company->contact_email = $randno . "@test.com";
		$company->comments = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
		 ";

		return $company;
	}
}
