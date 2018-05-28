@extends('layouts.app')

@section('content')

<div style="height:400px;background: linear-gradient(#0978F0,#13AEF7);" class="flex-container">
 <div>
	  <h2 style='color:white;'>Vyhľadávať v databáze obcí</h2>
 </div>

<div style="height:100px;z-index:99">
	 <input type="text" id="myInput" placeholder="Zadajte názov">
	 <div style="height:150px;overflow:auto;">
		<ul id="myUL" style="height:100px;display:none;">
		</ul>
	 </div>
</div>

</div> 




<script>
 var countries= [];  
 var myTime;
 

$("#myInput").on("keyup", function(event){
	var letter=$(this).val();
	clearTimeout(myTime);
	console.log(letter);
	myTime= setTimeout(Ajax(letter),1000);
});	

$("#myInput").focus(function(){	
	if($(this).val().length > 0)
    $("#myUL").css("display","block");
});


$("#myInput").focusout(function(){
	setTimeout(alertFunc,400);
});


function alertFunc() {
	$("#myUL").css("display","none");
}



function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}

function Ajax(letter) {
  if(letter =='') $("#myUL").empty();
  if(letter !='')
	$.ajax({                                      
	  url: "/getdata",
	  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	  type: 'GET',
	  data: {
		  letter: letter 
	  },	  
	  success: function(data){
			$("#myUL").empty()
			for (var i in data){
			  var rows = data[i];
			  $("#myUL").append("<li><a href='obecdetail/"+rows['id'] + "'>"+ rows['nazov']+"</a></li>");
			};
		$("#myUL").css("display","block");
		myFunction();
	  }  
	});		
}


</script>

@endsection

