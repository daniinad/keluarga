<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ortu;
use App\Anak;

class MyController extends Controller
{
    public function index()
    {
    	$a = "M Ramdhani";
    	return "Nama Saya Adalah <b>".$a."</b>";
    }

    public function tampilan()
    {
    	return view('about');
    }

    public function model()
    {
    	$ortu = Ortu::all();
    	return view('about', compact('ortu','anak'));
    }
}
