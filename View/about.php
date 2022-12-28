<?php include('../Controller/navbar.php');?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About Us</title>

    </head>
	<script>
	function get(id){
		return document.getElementById(id);
	}
	function loadDoc(){
		var xhr = new XMLHttpRequest();
		xhr.open("GET","my_profile.php",true);
		xhr.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				get("demo").innerHTML = this.responseText;
			}
		};
		xhr.send();
 	}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("p").click(function(){
    $(this).hide();
  });
});
</script>
<script>
$(document).ready(function(){
  $("#p1").mousedown(function(){
    alert("Mouse down over Mission!");
  });
});
</script>
	
 <body class="antialiased">
		<button onclick="loadDoc()"> About us </button>
		<div id="demo"></div>
	<h1> </h1>
	
	<p>Welcome To Evercare Hospital.</p>
    <p id="p1">Mission: To build a legacy of accessible, high quality, 
	  safe private healthcare for low and middle-income patients in emerging markets.</p>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                
            @endif

            
        </div>
    </body>
</html>