<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
// use Illuminate\Support\Facedes\Storage;

class PicturesController extends Controller
{
   public function index(Filesystem $filesystem){
	   $file1 = file_get_contents('http://www.pecenieskamkou.eu/fotky2764/fotos/2764_4990__vyr_4989simpson.jpg');
	   $pic = public_path('').'/obrazky/xx5.jpg';
	   file_put_contents($pic,$file1);
	   
	   //   \Storage::disk('upload')->put('roman.txt','xxxxxx');
	   //$file= $filesystem->put('erb\skuska\simson.jpg',$file1);
	   //$file= $filesystem->get('erb\skuska\simson.jpg');
       // phpinfo();
	   
	   // $file= $filesystem->put(storage_path('/public/obrazky').'/matej.txt','matej');
	   
	   
	  echo  "<img src='obrazky/xx5.jpg'>";
	  
   }
}
