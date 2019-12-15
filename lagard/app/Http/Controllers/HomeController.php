<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeClients;
use App\HomeServices;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $clients= $this->getAllClients();
       $services=$this->getAllServices();
        return view('home',compact('clients','services'));
    }


    public function getAllClients(){
        $clients= HomeClients::all();
        return $clients;
    }
    public function getAllServices(){
        return $services= HomeServices::all();
    }
}
