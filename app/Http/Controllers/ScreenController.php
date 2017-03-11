<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Screen;
use Auth;

class ScreenController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('screens.index',['screens'=> Screen::all(),'id'=> Auth::user()->getId()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$screen = Screen::find($id);
    	return view('screens.show', ['screen' => $screen]);
    }
}
