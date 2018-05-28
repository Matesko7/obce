<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Village;
use Illuminate\Contracts\Filesystem\Filesystem;

class VillagesController extends Controller
{
   public function index(Filesystem $filesystem, $id= null) {
	   
	  $villages = Village::where('id',$id)->get();
	  //$file= $filesystem->put('erb\skuska\matej.txt','cau');
	  //$file= $filesystem->get('erb\skuska\matej.txt');
	  //echo $file;
	  //echo "<img src='erb\1.gif' alt='Smiley face' height='42' width='42'>"; 
	  
	  
	  return view('village_detail')->with('villages', $villages);
   }
}
