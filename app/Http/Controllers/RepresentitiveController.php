<?php

namespace App\Http\Controllers;

use App\Representitive;
use Illuminate\Http\Request;
use App\User;

class RepresentitiveController extends Controller
{
    public function _construct()
  {
      $this->middleware('is.representitive');
  }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $representitives = Representitive::All();
        return view('representitive/index',['representitives' => $representitives]);
    }

    public function addrepresentitve(){
        return view('/representitive/add');
    }

    public function performaddrepresentitve(Request $request){

        //request validation
        $this->validate($request,[
            'name'=>'required',
            'managementunit'=>'required',
            'phonenumber'=>'required',
            'organaizationunit'=>'required',
            'nationalnumber'=>'required',
            'password'=>'required',
            'repassword'=>'required'
        ]);

        if($request->input('password') != $request->input('repassword')){
            return redirect('/addrepresentitive')->with('error','Password and verify password do not match.');
        }

        //usertable insertion
        $user = new User();
        $user->name = $request->input('name');
        $user->phone = $request->input('phonenumber');
        $user->password = $request->input('password');;
        $user->role = '2';
        $user->save();

        //representitive table inserion
        $representitive = new Representitive();
        $representitive->user_id = $user->id;
        $representitive->organize_name = $request->input('organaizationunit');
        $representitive->save();

        //inserting organization

        //returning all representitives
        $representitives = Representitive::All();
        return view('representitive/index',['representitives' => $representitives])->with('success','Representitive added.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *addrepresentitve
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Representitive  $representitive
     * @return \Illuminate\Http\Response
     */
    public function show(Representitive $representitive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Representitive  $representitive
     * @return \Illuminate\Http\Response
     */
    public function edit(Representitive $representitive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Representitive  $representitive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Representitive $representitive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Representitive  $representitive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Representitive $representitive)
    {
        //
    }
}
