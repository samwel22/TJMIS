<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Trequests;
use App\Schools;
class TrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $id=Auth::user()->id;
         $treqs1=Schools::where('user_id',$id)->first();

         $id1=$treqs1->id;

        $treqs=Trequests::where('school_id',$id1)->get();
        return view('trequest.index',compact('treqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trequest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'tcode' =>'required|string',
            'tsubject'  =>'required|string',
            'cduration'  =>'required|string',
            'salary'  =>'required|string',
        ]);
            //this code will get an id or name of a school
       $schoolid=Schools::where('user_id',Auth::user()->id)->first();
       $id=$schoolid->id;
        $trequests= Trequests::create([
            
            'school_id'=>$id,
            'tcode'=>$request['tcode'],
            'tsubject'=>$request['tsubject'],
            'cduration'=>$request['cduration'],
            'salary'=>$request['salary'],   
        ]);

        Session::flash('success','Request created successfully');
        return redirect()->route('trequest.index');
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
}
