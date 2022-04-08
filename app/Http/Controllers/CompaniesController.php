<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use phpDocumentor\Reflection\Types\Integer;

class CompaniesController extends Controller
{


    public function addCompany(Request $request)
    {
        $company = new Companies;
        $company->name = $request->companyName ?? 'dummy name';
        $company->location = $request->companyLocation ?? 'dummy location';
        $company->type= $request->companyType ?? 'dummy type';
        try {
            $company->email = $request->companyEmail ?? 'dummy email' . random_int(0, 999);
        } catch (\Exception $e) {
        }

        try {
            $company->link = $request->companyLink ?? 'dummy link' . random_int(0, 999);
        } catch (\Exception $e) {
        }

//        $company->link = $request->companyLink ?? 'dummy link';
        $company->phone = intval($request->companyPhone) ?? 1234;
        $company->description = $request->companyDescription ?? 'dummy description';
        $company->save();
        return redirect('addCompany');

    }
    public static function show($view)
    {
        return view($view);
    }
}
