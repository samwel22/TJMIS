<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Questions;
use App\Markings;
use Auth;
use DB;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $qns= Questions::all();
        $qns=DB::table('questions')->paginate(3);
        return view('test.index')->with('qns',$qns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('test.qns');
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
            'question_name' =>'required|string',
            'opt1'  =>'required|string',
            'opt2'  =>'required|string',
            'opt3'  =>'required|string',
            'opt4'  =>'required|string', 
            'point'  =>'required|integer', 
           
        ]);

        $check =Questions::where('question_name',$request['question_name'])->
                            where('opt1',$request['opt1'])->
                            where('opt2',$request['opt2'])->
                            where('opt3',$request['opt3'])->
                            where('opt4',$request['opt4'])->
                            where('point',$request['point'])->
                            count();
                            if($check==0){
       
        $qns= Questions::create([

            'question_name'=>$request['question_name'],
            'opt1'=>$request['opt1'],
            'opt2'=>$request['opt2'],
            'opt3'=>$request['opt3'],
            'opt4'=>$request['opt4'],
            'point'=>$request['point'],
        ]);

        $marking= Markings::create([
            'question_id'=>$qns->id,
            'correct_answer'=>$request['correct_answer'],
            
        ]);

          }
          else{
             Session::flash('warning','You have duplicated question');
        return redirect()->route('test.qns');
          }

        Session::flash('success','Question created successfully');
        return redirect()->route('test.qns');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $qns= Questions::all();

        return view('test.manage')->with('qns',$qns);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $qns=Questions::findOrFail($id);

        return view('test.edit')->with('qns',$qns);
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
