<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Response;

class StudentController extends Controller
{
/**
 * @OA\Get(
 *     tags={"Student API"},
 *     path="/studentlist/{sname}",
 *     description="List Of Students Same Name",
 *     summary="Student Data",
 *     operationId="ListStudent",
 *     @OA\Response(
 *         response=200,
 *         description="success response",
 *         @OA\JsonContent(ref="#/components/schemas/SuccessResponse")
 *     ),
 *     @OA\Parameter(
 *         description="Find Student Same Name",
 *         in="path",
 *         name="sname",
 *         required=true,
 *         @OA\Schema(
 *             type="string"
 *         )
 *     ),
 *     security={
 *         {"API-Key": {}}
 *     }
 * )
 * Its an Open API for Student
 */

    public function listStudents($sname)
    {

        $student = DB::table('students')->where('sname', $sname)->get();

        return Response::json($student, 200);

    }
/**
 * @OA\Get(
 *     tags={"Student API"},
 *     path="/allstudentlist",
 *     description="List of All Student ",
 *     summary="Student Data",
 *     operationId="ListStudent",
 *     @OA\Response(
 *         response=200,
 *         description="success response",
 *         @OA\JsonContent(ref="#/components/schemas/SuccessResponse")
 *     ),
 *
 *     security={
 *         {"API-Key": {}}
 *     }
 * )
 * Its an Open API for Student
 */

    public function allStudentData()
    {
        $student = DB::table('students')->get();

        return Response::json($student, 200);
    }

/**
 * @OA\Get(
 *     tags={"Student API"},
 *     path="/verifydata",
 *     description="Registed Students",
 *     summary="Student Data",
 *     operationId="ListStudent",
 *     @OA\Response(
 *         response=200,
 *         description="success response",
 *         @OA\JsonContent(ref="#/components/schemas/SuccessResponse")
 *     ),
 *     @OA\Parameter(
 *         description="Student Name",
 *         in="query",
 *         name="sname",
 *         required=true,
 *         @OA\Schema(
 *             type="string"
 *         )
 *     ),
 *     @OA\Parameter(
 *         description="Student Email ID",
 *         in="query",
 *         name="semail",
 *         required=true,
 *         @OA\Schema(
 *             type="string"
 *         )
 *     ),
 *     @OA\Parameter(
 *         description="Student Password",
 *         in="query",
 *         name="spassword",
 *         required=true,
 *         @OA\Schema(
 *             type="string"
 *         )
 *     ),
 *     @OA\Parameter(
 *         description="Student Contact",
 *         in="query",
 *         name="scontact",
 *         required=true,
 *         @OA\Schema(
 *             type="string"
 *         )
 *     ),
 *     security={
 *         {"API-Key": {}}
 *     }
 * )
 * Its an Open API for Student
 */

    public function verifyRegisterData(request $request)
    {
        print_r($_REQUEST);

        $status = $this->validate(request(), [
            'uname' => 'required',
            'uemail' => 'required',
            'upassword' => 'required',
            'ucontact' => 'required',
        ]);

        if ($status) {

            echo $uname = $request->input('uname');
            echo $uemail = $request->input('uemail');
            echo $upassword = $request->input('upassword');
            echo $ucontact = $request->input('ucontact');

            DB::table('usertables')->insert([
                'uname' => $uname,
                'uemail' => $uemail,
                'upassword' => $upassword,
                'ucontact' => $ucontact,
            ]
            );

            echo "Data Insert Success Full";

            Response::json("Success", 200);

        }
        redirect("register");
    }

    public function checkData()
    {

        echo "Hello Pankaj Yadav";
    }

}
