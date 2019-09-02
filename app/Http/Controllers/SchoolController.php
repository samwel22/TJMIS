<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Schools;
use App\Pdetails;
class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $id=Auth::user()->id;
        $schools=Schools::where('user_id',$id)->first();
        return view('school.profile',compact('schools'));
    }


    public function teacherslist()
    {
       
        $teacherslists=Pdetails::all();
        return view('school.teacherlist')->with('teacherslists',$teacherslists);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('school.create');
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
            'name' =>'required|string',
            'rnumber'  =>'required|string',
            'year'  =>'required|date',
            'address'  =>'required|string',
            'pnumber'  =>'required|string',
            'email'  =>'required|string', 
           
        ]);

        $code=Schools::all()->max('code');

            if (!empty($code))
            {
                $newcode=$code+1;
            }
            else{
                $newcode=20000;
            }
       
        $schools= Schools::create([
            'user_id'=>Auth::user()->id,
            'name'=>$request['name'],
            'code'=>$newcode,
            'rnumber'=>$request['rnumber'],
            'year'=>$request['year'],
            'address'=>$request['address'],
            'pnumber'=>$request['pnumber'],
            'email'=>$request['email'],
        ]);

        Session::flash('success','Congratulation, your profile created successfully');
        return redirect()->route('school.profile');
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
        $schools=Schools::find($id);

        return view('school.edit')->with('schools',$schools);
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
        $schools = Schools::findOrFail($id);

        $this->validate($request,[
           'name' =>'required|string',
            'rnumber'  =>'required|string',
            'year'  =>'required|date',
            'address'  =>'required|string',
            'pnumber'  =>'required|string',
            'email'  =>'required|string', 
           
          
            
        ]);

          $schools->update([

           'name'=>$request['name'],
            'rnumber'=>$request['rnumber'],
            'year'=>$request['year'],
            'address'=>$request['address'],
            'pnumber'=>$request['pnumber'],
            'email'=>$request['email'],
           
          ]);

        Session::flash('success','Profile updated successfully');
        return redirect()->route('school.profile');
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
