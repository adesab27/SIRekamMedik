<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDatapasienController extends Controller
{
    public function index()
    {
        $data = DB::table('registrasi')->paginate(10); // Ganti get() dengan paginate(10) untuk pagination
        return view('datapasien', compact('data')); // Pass $data to the view
    }
}
