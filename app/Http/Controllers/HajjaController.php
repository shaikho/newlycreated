<?php

namespace App\Http\Controllers;

use App\Hajja;
use App\Recruit;
use App\Representitive;
use App\Move;
use Illuminate\Http\Request;

class HajjaController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hajja = \DB::table('hajjas')->paginate(4);
        return view('hajja.index', ['hajjas' => $hajja]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $recruits = Recruit::all();
       $represents = Representitive::all();
       $moves = Move::all();
        return view('hajja.create',[
            'recruits' => $recruits ,
            'represents' => $represents ,
            'moves' =>  $moves
        ]); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'recruitlocal' => 'required',
        //     'recruitspecialization' => 'required',
        //     'recruitname' => 'required',
        //     'recruitarid' => 'required',
        //     'recruitphone' => 'required',
        //     'recruitnationalnumber' => 'required',
        //     'representitivename' => 'required'    
        // ]); 
        
        Hajja::create([
            'recruit_id' => $request->recruit_id,
            'represent_id' => $request->represent_id,
            'move_id' => $request->move_id,
            'date' => $request->date,
            'state' => $request->state
        ]);
        // return redirect('/recruit')->with('status' , 'تم حفظ البيانات');

        return "Hajja is saved";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hajja  $hajja
     * @return \Illuminate\Http\Response
     */
    public function show(Hajja $hajja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hajja  $hajja
     * @return \Illuminate\Http\Response
     */
    public function edit(Hajja $hajja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hajja  $hajja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hajja $hajja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hajja  $hajja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hajja $hajja)
    {
        //
    }
}


