<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function impressum() 
	{
		$people = ['Timm','Lukas','Tom'];
		return view('facts.impressum', compact('people'));
	}

	public function kontakt() 
	{
		return view('facts.kontakt')->with([
			'first' => 'Timm',
			'last' => 'Stehle',
		]);
	}

	public function index() 
	{
		return view('index');
	}

}
