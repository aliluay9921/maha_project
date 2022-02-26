<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;

use DataTables;

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
        $programs = Program::get();
        // dd($programs);
        return view("home", compact("programs"));
    }

    public function users()
    {

        return view("users");
    }
    public function getUsers()
    {
        $data = User::latest()->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->make(true);
    }
}