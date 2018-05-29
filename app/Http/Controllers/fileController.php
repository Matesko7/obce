<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sunra\PhpSimple\HtmlDomParser;
use App\Village;
use Illuminate\Contracts\Filesystem\Filesystem;

class fileController extends Controller
{
	public function parser(Filesystem $filesystem){
	
	$sum=0;
	function more_info($url){
			$data= file_get_contents($url);	
			$dom = HtmlDomParser::str_get_html( $data );
			$elems = $dom->find('table[border=0]');
			$table= $elems[9];
			$table1= $table->find('td'); 
			$table2= $table1[17];
			$table3= $table2->find('td'); 
			
			$village1= new Village;		
			$pom= $table3[4]->find('img');
			$village1->obrazok= $pom[0]->src;
			$village1->telefon=trim($table3[7]->plaintext);
			$village1->adresa=$table3[12]->plaintext. ", " . $table3[15]->plaintext;
			$village1->email=$table3[14]->plaintext;
			$village1->web=$table3[17]->plaintext;
			$village1->fax=$table3[11]->plaintext;
			$village1->starosta= $table3[34]->plaintext;
		
	return $village1;
	}
	
	for ($xx = 0; $xx <= 6; $xx++) {
		$url="https://www.e-obce.sk/zoznam_vsetkych_obci.html?strana=". ($xx*500);
		$data= file_get_contents($url);	
		$dom = HtmlDomParser::str_get_html( $data );
		$elems = $dom->find('table[border=0]');
		$table= $elems[8];
		$table1 = $table->find('table');  	
		$table2=$table1[7];
		$elems = $table2->find('td');			
			
		foreach($elems as $key => $value) {
		  $obec= $value->find('a');
		   foreach($obec as $key1 => $value1) {		
			$villages = Village::where([['linka','=',$value1->href],['nazov','=',$value1->plaintext]])->count();
			if($value1->plaintext=='Javorina') break; //diferent structure
			if($value1->plaintext=='Valaškovce') break;  //diferent structure
			if($villages > 0) break;		
			else { 
				$x=more_info($value1->href);
			
				$village= new Village;
				$village->nazov= $value1->plaintext;
				$village->linka= $value1->href;
				$village->starosta= $x->starosta;
				$village->adresa= $x->adresa;
				$village->telefon= $x->telefon;
				$village->fax= $x->fax;
				$village->email= $x->email;
				$village->web= $x->web;
				$village->obrazok='';
			 
				$saved = $village->save();
				
				if($saved){
					$insertedId = $village->id;	
					$content = file_get_contents($x->obrazok);
					$nazov = $insertedId.'.gif';					
					\Storage::disk('upload')->put($nazov,$content);
					Village::where('id', $insertedId)->update(['obrazok' => $nazov]);		
					$sum++;
				}
			}
		  }
		}
	}	// End FOR xx
		return '<h3>Úspešne bolo pridaných '. $sum . ' nových obcí do databázy.</h3>';
  }
	
		
	public function getData(Request $request){	
	$villages = Village::where('nazov','like', $request->letter.'%')->get();	
	return $villages;

	}	
}
