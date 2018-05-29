@extends('layouts.app')

@section('content')

<div class="flex-container" style="padding-top:0px;">
	<div>
	  <h3>Detail Obce</h3>
    </div>
</div>

<div class="flex-container3">
	<div>
	  <div class="flex-container1">
			<div>
			<p> Meno starostu:  </p>
			<p> Adresa obecného úradu:</p>
			<p> Telefón:</p>
			<p> Fax:</p>
			<p> Email:</p>
			<p> Web:</p>
		   </div>
		   <div>
		   <p style="font-weight:normal;">{{ $villages[0]->starosta }} </p>
		   <p style="font-weight:normal;">{{ $villages[0]->adresa }}</p> 
		   <p style="font-weight:normal;">{{ $villages[0]->telefon }} </p>
		   <p style="font-weight:normal;">{{ $villages[0]->fax }}</p>
		   <p style="font-weight:normal;">{{ $villages[0]->email }} </p>	   
		   <p style="font-weight:normal;">{{ $villages[0]->web }}</p>
		   </div>
	  </div>	
    </div>
	
	<div style="background-color:white;text-align: center;">
	  <img style="display: block;margin-left: auto;margin-right: auto;" src='/obrazky/{{ $villages[0]->obrazok }}' alt="obrazok_obce" height="100px" width="100px">
	  <h2 style="color:blue;margin-top:20px;"><b>{{ $villages[0]->nazov }}</b></h2>
    </div>
</div>

@endsection