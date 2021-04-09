<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\Models\FacultyModel;

class faController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $faculties=FacultyModel::all();

        return view('view',compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
     {
         $getName=request("Name");

         $faculties=FacultyModel::query()
         ->where("Name","LIKE","%{$getName}%")
         ->get();

         return view('view',compact('faculties'));
     }
    public function store(Request $request)
    {
        $getName=request('fname');
        $getDes=request('fdesig');
        $getCollege=request('fcollege');
        $getContact=request('fcontactnumber');


        echo $getName;
        echo $getDes;
        echo $getCollege;
        echo $getContact;

        $faculty=new FacultyModel();

        $faculty->Name=$getName;
        $faculty->designation=$getDes;
        $faculty->College=$getCollege;
        $faculty->ContactNo=$getContact;

        $faculty->save();

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
        $faculties=FacultyModel::find($id);

        return view('facultyeditview',compact('faculties'));
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

       $faculty=FacultyModel::find($id);

        $getName=request('fname');
        $getDes=request('fdesig');
        $getCollege=request('fcollege');
        $getContact=request('fcontactnumber');



        $faculty->Name=$getName;
        $faculty->designation=$getDes;
        $faculty->College=$getCollege;
        $faculty->ContactNo=$getContact;

        $faculty->save();

        return redirect('/view');
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
}
