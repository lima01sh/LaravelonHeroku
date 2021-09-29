<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentloads=\App\Models\Studentload::all();
        return view('view_Home',compact('studentloads'));
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
    public function store(Request $request)
    {
        $this->validate(request(), [
            'stdid' => 'required|unique:studentloads,stdid|numeric|digits:11',
            'stdname' => 'required',
            'faculty' => 'required|not_in:none',
            'type' => 'required|not_in:none',
            'year' => 'required|digits:4|numeric',
            'term' => 'required|not_in:none',
            'termfees' => 'required',
            'livecost' => 'required',
        ]);

        $obj = new \App\Models\Studentload();
        // นำข้อมูลใน input หน้า create ไปไว้ที่ ตาราง migrat database 
        $obj->stdid = $request->input('stdid');
        $obj->stdname = $request->input('stdname');
        $obj->faculty = $request->input('faculty');
        $obj->type = $request->input('type');
        $obj->year = $request->input('year');
        $obj->term = $request->input('term');
        $obj->termfees = $request->input('termfees');
        $obj->livecost = $request->input('livecost');
        // save ข้อมูลใหม่ลงตาราง
        $obj->save();  //->delete()
        return redirect('/index')->with('success','New Student was created!!');
    
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
        $tmpstudent = \App\Models\Studentload::find($id);
        return view('edit',compact('tmpstudent','id'));
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
        $tmpstd = \App\Models\Studentload::find($id);
        $tmpstd->stdid = $request->get('stdid');
        $tmpstd->stdname = $request->get('stdname');
        $tmpstd->faculty = $request->get('faculty');
        $tmpstd->type = $request->get('type');
        $tmpstd->year = $request->get('year');
        $tmpstd->term = $request->get('term');
        $tmpstd->termfees = $request->get('termfees');
        $tmpstd->livecost = $request->get('livecost');

        $tmpstd->save();  
        return redirect('/index')->with('success', 'Student has been updated!!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tmpstd = \App\Models\Studentload::find($id);
        $tmpstd->delete();

        return redirect('/index')->with('success','Student has been deleted!!');
    }
}
