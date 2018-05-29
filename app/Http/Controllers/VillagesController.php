<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Village;
use Illuminate\Contracts\Filesystem\Filesystem;

class VillagesController extends Controller
{
   public function index(Filesystem $filesystem, $id= null) {
	   
	  $villages = Village::where('id',$id)->get();
	  if($villages->count()==0) return 'Obec s id: '.$id.' neexistuje.';
	  
   return view('village_detail')->with('villages', $villages);
   }
}
