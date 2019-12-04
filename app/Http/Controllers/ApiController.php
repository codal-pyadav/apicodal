<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Response;
use Validator;

class ApiController extends Controller
{
// Insert Data in Employee Table
    public function create(Request $request)
    {
        $rules = [
            'empname' => 'required',
            'empaddress' => 'required',
            'empcontact' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Response::json($validator->errors(), 400);
        }

        $employees = employee::create($request->all());
        return Response::json($employees, 200);

        // $dataValide = $this->validate($request, [
        //     'empname' => 'required',
        //     'empaddress' => 'required',
        //     'empcontact' => 'required',
        // ]);

        // if ($dataValide) {
        //     $employees->empname = $request->input('empname');
        //     $employees->empaddress = $request->input('empaddress');
        //     $employees->empcontact = $request->input('empcontact');
        //     $employees->save();

        //     return Response::json($employees, 200);
        // } else {

        //     return Response::json("Validation Error (Insert Field Data)", 422);

        // }

    }

//Fetch All Employee Records
    public function allDetails()
    {
        $employees = employee::all();

        if (is_null($employees)) {

            return Response::json(["message" => "Recoreds Not Found!"], 404);
        }

        return Response::json($employees, 200);
    }

//Update Employee Details
    public function updateDetails(Request $request, $empid)
    {
        if (empty($empid)) {

            return Response::json(["message" => "Bad request something wrong with URL or parameters"], 404);
        }

        $employees = employee::find($empid);

        if (is_null($employees)) {
            return Response::json(["message" => "Recoreds Not Found!"], 404);
        }

        $employees->empname = $request->input('empname');
        $employees->empaddress = $request->input('empaddress');
        $employees->empcontact = $request->input('empcontact');
        $employees->save();

        return Response::json($employees, 200);
    }

// Search Employee Be His ID
    public function searchDataById(Request $request, $empid)
    {
        $employees = employee::find($empid);

        if (is_null($employees)) {
            return Response::json(["message" => "Recoreds Not Found!"], 404);
        }

        return Response::json($employees, 200);
    }
// Delete Employee Details By ID
    public function deleteByEmpId(Request $request, $empid)
    {
        $employees = employee::find($empid);
        if (is_null($employees)) {
            return Response::json(["message" => "Recoreds Not Found!"], 404);
        }
        $employees->delete();

        return Response::json($employees, 200);
    }
}
