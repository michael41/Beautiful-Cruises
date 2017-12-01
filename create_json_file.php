<?php

//Session start
session_start();

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Excel to JSON Demo</title>
<script src="xlsx.full.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

<script>

var url = "ux_cruise_data.xlsx";

/* set up async GET request */
var req = new XMLHttpRequest();
req.open("GET", url, true);
req.responseType = "arraybuffer";

req.onload = function(e) {
   var data = new Uint8Array(req.response);
   var workbook = XLSX.read(data, {type:"array"});

   /* DO SOMETHING WITH workbook HERE */
  
   var first_sheet_name = workbook.SheetNames[0];

   /* Get worksheet */
   var worksheet = workbook.Sheets[first_sheet_name]; 
   
   console.log(XLSX.utils.sheet_to_json(worksheet)); 
   
   var something = JSON.stringify(XLSX.utils.sheet_to_json(worksheet));
   
   document.getElementById("json_pasted_initially_here").innerHTML = something;

   //Transferring the score via AJAX and PHP to other page : 
			    $.ajax({
					   url: "create_json_file.php",
					   data: {"something":something},
					   type: "post",
					   success:function(data){					    
					   }
					   
					});
					
<?php
$_SESSION["something"] = $_POST['something']; 	
?>
  
  
}

req.send();

</script>


			<div>
            <form action="index.php" method="post">
            <input type="submit" class="button"><br />          
            </form>
            </p>
            </div>
            
            <div style="margin-top:50px;" id="json_pasted_initially_here">
            
            
            </div>



</body>
</html>
