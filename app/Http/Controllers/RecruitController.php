<?php

namespace App\Http\Controllers;

use App\Recruit;
use Illuminate\Http\Request;


class RecruitController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruits = Recruit::All();
        return view('recruit/index',['recruits'=>$recruits]);
    }

    public function addrecruits(Request $request){
        return view('recruit/add');
    }

    public function performaddrecruit(Request $request){
        $this->validate($request,[
            'name' => 'required'
        ]);
        $recruit = new Recruit();
        $recruit->user_id = '1';
        $recruit->local = $request->input('name');
        $recruit->area = $request->input('unit');
        $recruit->qualification = $request->input('phonenumber');
        $recruit->specialization = $request->input('orgname');
        $recruit->qrcode=$request->input('nationalnumber');
        $recruit->save();
        return redirect('recruits');
    }


    public function deleterecruit($id){
        $recruit = Recruit::find($id);
        $recruit->delete();
        $recruits = Recruit::All();
        return redirect('recruits');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $recruitdata = Recruit::all();
        return view('recruit.create',compact('recruitdata'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'recruitname' => 'required',
            'recruitphone' => 'required',
            'recruitlocal' => 'required',
            'recruitarea' => 'required',
            'recruitnationalnumber' => 'required',
            'recruitqualification' => 'required',
            'recruitspecialization' => 'required',
            'recruitarea' => 'required',
            'recruitemail' => 'required',
            'recruitpassword' => 'required',

        ]);
         {
        return redirect('/recruit')->with('status' , 'تم حفظ البيانات');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recruit  $recruit
     * @return \Illuminate\Http\Response
     */
    public function show(Recruit $recruit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recruit  $recruit
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruit $recruit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recruit  $recruit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recruit $recruit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recruit  $recruit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruit $recruit)
    {
        //
    }
}
