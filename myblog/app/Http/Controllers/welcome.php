<?php
namespace App\Http\Controllers;


class welcome extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest');
    }
    public function index()
    {
    	return 'shit!';
    }
    public function contact()
    {
    	return view('pages.contacts');
    }
}
