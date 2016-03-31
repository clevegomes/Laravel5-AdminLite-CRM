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
    public function index()
    {
        return view("companies.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    $company = new company();


	    $countriesList =["UAE"=>'United Arab Emirates',"USA"=>'United States America'];




	    /**
	     * Quick prefill
	     */

	    $company = $this->setDummyData($company, $countriesList);


	    return view("companies.create",compact('countriesList','company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CompanyRequest $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
	private function setDummyData($company, $countriesList)
	{
		$randno = rand(1, 300);

		$company->company_name = "TestCompany" . $randno;
		$company->country = array_rand($countriesList);
		$company->city = "TestCity" . $randno;
		$company->sector = "TestSector" . $randno;
		$company->sector = "TestSector" . $randno;
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
