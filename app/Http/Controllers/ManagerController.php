<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Pdetails;
use App\Trequests;
use App\Treplays;
use App\Schools;
class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $pdetails=Pdetails::all();
         return view('manager.index')->with('pdetails',$pdetails);
    }


     public function eback()
    {
        $pdetails=Pdetails::all();
        return view('manager.ebackground')->with('pdetails',$pdetails);
    }

    public function dattach()
    {
        $pdetails=Pdetails::all();
        return view('manager.dattachment')->with('pdetails',$pdetails);
    }

    public function trequest()
    {
         $trequests=Trequests::all();
        return view('manager.trequest')->with('trequests',$trequests);
    }

      public function home()
    {
         $id= Auth::user()->id;
        $detail=Pdetails::where('user_id',$id)->first();
        $detail1=Schools::where('user_id',$id)->first();
       if (!empty($detail->tcode))
            {
                $code=$detail->tcode;
                $treplays=Treplays::where('tcode',$code)->get();} 
        else if (!empty($detail1->code))
            {
                $code=$detail1->code;
                $treplays=Treplays::where('code',$code)->get();} 
       
         else {
            $treplays=Treplays::all();
         }
         //codes of user dashboard
         $pdetails= Pdetails::all()->count();
        $schools=Schools::all()->count();
        $trequests=Trequests::all()->count();
        $treplays1=Treplays::all()->count();
        
        return view('home')->with('treplays',$treplays)->with('pdetails',$pdetails)->with('schools',$schools)->with('trequests',$trequests)->with('treplays1',$treplays1);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manager.treplay');
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
            'code' =>'required|string',
            'sreq'  =>'required|string',
            'cduration'  =>'required|string',
            'sdate'  =>'required|date',
            'salary'  =>'required|string',
            'contact'  =>'required|string', 
           
        ]);
       
        $treplay= Treplays::create([
            'tcode'=>$request['tcode'],
            'code'=>$request['code'],
            'sreq'=>$request['sreq'],
            'cduration'=>$request['cduration'],
            'sdate'=>$request['sdate'],
            'salary'=>$request['salary'],
            'contact'=>$request['contact'],
        ]);

        Session::flash('success','Appicant request sent successfully');
        return redirect()->route('trequest.trequest');
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
