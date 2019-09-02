<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Pdetails;

class PdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $id=Auth::user()->id;
          $pdetails=Pdetails::where('user_id',$id)->first();

        return view('teacher.profile')->with('pdetails',$pdetails);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create'); 
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
            'fname' =>'required|string',
            'mname'  =>'required|string',
            'lname'  =>'required|string',
            'dob'  =>'required|date',
            'gender' =>'required|string',
            'country'  =>'required|string',
            'pnumber'  =>'required|string',
            'disability'  =>'required|string',
            'tsubject'  =>'required|string',
            'e_level'  =>'required|string',
            'c_year'  =>'required|date',
            'experience'  =>'required|string',
            'other'  =>'required|string',
            'address'  =>'required|string',
            'marital'  =>'required|string',
            'cresidence'  =>'required|string',
            'presidence'  =>'required|string',


           
        ]);
        // Education Certificates
            $ecertificate=$request->ecertificates;
            $ecertificate_new_name =time().$ecertificate->getClientOriginalName(); 
            $ecertificate->move('upload/certificates',$ecertificate_new_name);

            // Proffesional Certificates
            $pcertificate=$request->pcertificates;
            $pcertificate_new_name =time().$pcertificate->getClientOriginalName(); 
            $pcertificate->move('upload/certificates',$pcertificate_new_name);

            // Birth Certificates
            $bcertificate=$request->bcertificates;
            $bcertificate_new_name =time().$bcertificate->getClientOriginalName(); 
            $bcertificate->move('upload/certificates',$bcertificate_new_name);

            // Curriculum Vitae
            $cvitae=$request->cvitae;
            $cvitae_new_name =time().$cvitae->getClientOriginalName(); 
            $cvitae->move('upload/certificates',$cvitae_new_name);
            
            $tcode=Pdetails::all()->max('tcode');

            if (!empty($tcode))
            {
                $newtcode=$tcode+1;
            }
            else{
                $newtcode=100000;
            }
    


        $teachers= Pdetails::create([
            'user_id'=>Auth::user()->id,
            'fname'=>$request['fname'],
            'mname'=>$request['mname'],
            'lname'=>$request['lname'],
            'dob'=>$request['dob'],
            'tcode'=>$newtcode,
            'gender'=>$request['gender'],
            'country'=>$request['country'],
            'pnumber'=>$request['pnumber'],
            'disability'=>$request['disability'],  
            'tsubject'=>$request['tsubject'], 
            'e_level'=>$request['e_level'], 
            'c_year'=>$request['c_year'], 
            'experience'=>$request['experience'], 
            'other'=>$request['other'], 
            'address'=>$request['address'],
            'marital'=>$request['marital'],
            'cresidence'=>$request['cresidence'],
            'presidence'=>$request['presidence'],
            'ecertificates'=>$ecertificate_new_name,
            'pcertificates'=>$pcertificate_new_name,
            'bcertificates'=>$bcertificate_new_name,
            'cvitae'=>$cvitae_new_name,
            'slug'=>str_slug($request->fname),
        ]);

        Session::flash('success','Congratulation, your profile created successfully');
        return redirect()->route('pdetail.profile');
    }

          public function download($id)
    {

     $path=Pdetails::select('ecertificates')->where('id', $id)->first();
     return response()->download('upload/certificates/' . $path->ecertificates);
    }

         public function downloadP($id)
    {
     $path=Pdetails::select('pcertificates')->where('id', $id)->first();
     return response()->download('upload/certificates/' . $path->pcertificates);
    }

         public function downloadB($id)
    {
     $path=Pdetails::select('bcertificates')->where('id', $id)->first();
     return response()->download('upload/certificates/' . $path->bcertificates);
    }

    public function downloadV($id)
    {
     $path=Pdetails::select('cvitae')->where('id', $id)->first();
     return response()->download('upload/certificates/' . $path->cvitae);
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
        $pdetails=Pdetails::find($id);

        return view('teacher.edit')->with('pdetails',$pdetails);
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
        // dd($request->all());
        
        $pdetails = Pdetails::findOrFail($id);

        // Education Certificates
            $ecertificate=$request->ecertificates;
            $ecertificate_new_name =time().$ecertificate->getClientOriginalName(); 
            $ecertificate->move('upload/certificates',$ecertificate_new_name);

            // Proffesional Certificates
            $pcertificate=$request->pcertificates;
            $pcertificate_new_name =time().$pcertificate->getClientOriginalName(); 
            $pcertificate->move('upload/certificates',$pcertificate_new_name);

            // Birth Certificates
            $bcertificate=$request->bcertificates;
            $bcertificate_new_name =time().$bcertificate->getClientOriginalName(); 
            $bcertificate->move('upload/certificates',$bcertificate_new_name);

            // Curriculum Vitae
            $cvitae=$request->cvitae;
            $cvitae_new_name =time().$cvitae->getClientOriginalName(); 
            $cvitae->move('upload/certificates',$cvitae_new_name);

      
        $this->validate($request,[
            'fname' =>'required|string',
            'mname'  =>'required|string',
            'lname'  =>'required|string',
            'dob'  =>'required|date',
            'gender' =>'required|string',
            'country'  =>'required|string',
            'pnumber'  =>'required|string',
            'disability'  =>'required|string',
            'tsubject'  =>'required|string',
            'e_level'  =>'required|string',
            'c_year'  =>'required|date',
            'experience'  =>'required|string',
            'other'  =>'required|string',
            'address'  =>'required|string',
            'marital'  =>'required|string',
            'cresidence'  =>'required|string',
            'presidence'  =>'required|string',
          
            
        ]);

          $pdetails->update([

            'fname'=>$request['fname'],
            'mname'=>$request['mname'],
            'lname'=>$request['lname'],
            'dob'=>$request['dob'],
            'gender'=>$request['gender'],
            'country'=>$request['country'],
            'pnumber'=>$request['pnumber'],
            'disability'=>$request['disability'],  
            'tsubject'=>$request['tsubject'], 
            'e_level'=>$request['e_level'], 
            'c_year'=>$request['c_year'], 
            'experience'=>$request['experience'], 
            'other'=>$request['other'], 
            'address'=>$request['address'],
            'marital'=>$request['marital'],
            'cresidence'=>$request['cresidence'],
            'presidence'=>$request['presidence'],
            'ecertificates'=>$ecertificate_new_name,
            'pcertificates'=>$pcertificate_new_name,
            'bcertificates'=>$bcertificate_new_name,
            'cvitae'=>$cvitae_new_name,
          ]);

        Session::flash('success','Profile updated successfully');
        return redirect()->route('pdetail.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $pdetail = Pdetails::findOrFail($id);
        $pdetail->delete();
         Session::flash('success','Profile trashed successfully');

        return redirect()->route('manager.index');
    }
}
