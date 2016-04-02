<?php

namespace App\Http\Controllers;

use App\Job;
use App\Target;
use Carbon\Carbon;
use Faker\Provider\es_AR\Company;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {


        $report["total_comp"] = \App\Company::all()->count();
        $report["apr_comp"] = \App\Company::where("level", "=", "apr")->count();
        $report["pros_comp"] = \App\Company::where("level", "=", "pros")->count();
        $report["hitrate"] = $report["pros_comp"] * 100 / $report["total_comp"];


        $report["total_jobs"] = Job::all()->count();
        $report["open_jobs"] = Job::where("closing_date", ">", Carbon::now()->format("Y-m-d"))->count();
        $report["open_closed"] = $report["total_jobs"] - $report["open_jobs"];

        $targer = Target::all();


        $start_month = new Carbon('first day of this month');
        $end_month = new Carbon('last day of this month');

        $quarter = new Carbon();

        $report["jobs_this_month"] = Job::where("created_at", ">=", $start_month->format("Y-m-d"))->where("created_at",
            "<=", $end_month)->count();

        $report["jobs_this_quarterly"] = Job::where("created_at", ">=",
            $quarter->firstOfQuarter()->format("Y-m-d"))->where("created_at", "<=",
            $quarter->lastOfQuarter()->format("Y-m-d"))->count();

        $report["pending_jobs_month"] = $targer[0]->monthly_target_jobs - $report["jobs_this_month"];
        $report["pending_jobs_quarter"] = $targer[0]->quarterly_target_jobs - $report["jobs_this_quarterly"];


        $report["companies_this_month"] = \App\Company::where("created_at", ">=",
            $start_month->format("Y-m-d"))->where("created_at", "<=", $end_month)->count();


        $report["companies_this_quarterly"] = \App\Company::where("created_at", ">=",
            $quarter->firstOfQuarter()->format("Y-m-d"))->where("created_at", "<=",
            $quarter->lastOfQuarter()->format("Y-m-d"))->count();


        $report["pending_companies_month"] = $targer[0]->monthly_target_companies - $report["companies_this_month"];
        $report["pending_companies_quarter"] = $targer[0]->quarterly_target_companies - $report["companies_this_quarterly"];


        $report["companies_by_country"] = \App\Company::groupBy("country")->select("country",
            DB::raw('count(*) as total'))->get()->toArray();
        $report["companies_by_sector"] = \App\Company::groupBy("sector")->select("sector",
            DB::raw('count(*) as total'))->get()->toArray();



          $allCompanies = \App\Company::where("created_at", ">=",
              $quarter->firstOfYear()->format("Y-m-d"))->where("created_at", "<=",
              $quarter->lastOfYear()->format("Y-m-d"))->get();

          $companyMonths_target = [$targer[0]->monthly_target_companies,
              $targer[0]->monthly_target_companies,
              $targer[0]->monthly_target_companies,
              $targer[0]->monthly_target_companies,
              $targer[0]->monthly_target_companies,
              $targer[0]->monthly_target_companies,
              $targer[0]->monthly_target_companies,
              $targer[0]->monthly_target_companies,
              $targer[0]->monthly_target_companies,
              $targer[0]->monthly_target_companies,
              $targer[0]->monthly_target_companies,
              $targer[0]->monthly_target_companies];


          $companyMonths_achieved = [0,0,0,0,0,0,0,0,0,0,0,0];
          foreach($allCompanies as $selCompanies)
          {
              $companyMonths_achieved[$selCompanies->created_at->month -1]++;
          }

        $report["companyMonths_achieved"] =$companyMonths_achieved;
        $report["companyMonths_target"] =$companyMonths_target;




        $allJobs = Job::where("created_at", ">=",
            $quarter->firstOfYear()->format("Y-m-d"))->where("created_at", "<=",
            $quarter->lastOfYear()->format("Y-m-d"))->get();

        $jobsMonths_target = [$targer[0]->monthly_target_jobs,
            $targer[0]->monthly_target_jobs,
            $targer[0]->monthly_target_jobs,
            $targer[0]->monthly_target_jobs,
            $targer[0]->monthly_target_jobs,
            $targer[0]->monthly_target_jobs,
            $targer[0]->monthly_target_jobs,
            $targer[0]->monthly_target_jobs,
            $targer[0]->monthly_target_jobs,
            $targer[0]->monthly_target_jobs,
            $targer[0]->monthly_target_jobs,
            $targer[0]->monthly_target_jobs];

        $jobsMonths_achieved = [0,0,0,0,0,0,0,0,0,0,0,0];
        foreach($allJobs as $selJob)
        {
            $jobsMonths_achieved[$selJob->created_at->month -1]++;
        }

        $report["jobMonths_achieved"] = $jobsMonths_achieved;
        $report["jobMonths_target"] =$jobsMonths_target;




//        dd($report);

//        $report["total_companies"]
        return view("dashboard.index", compact("report"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
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
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
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
}
