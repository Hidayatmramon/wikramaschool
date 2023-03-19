<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
		return view('home');
	}
 
	public function sejarah(){
		return view('sejarah');
	}
 
	public function kantin(){
		return view('kantin');
	}
	public function eskul(){
		return view('eskul');
	}
	public function perpustakaan(){
		return view('perpustakaan');
	}
	public function martikulasi(){
		return view('martikulasi');
	}
}

