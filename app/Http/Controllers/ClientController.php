<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ClientController extends Controller
{
 
    public function __construct( User $Title){
		    $this->middleware('auth');
		$this->Title = $Title->all();
	}
	public function di(){
		dd($this->Title);
	}
}
