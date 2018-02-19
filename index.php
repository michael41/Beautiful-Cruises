<?php

//Session start
//session_start();

//Creating the 'datanew.txt' file initially with JSON code in it : 
/*
$stufftransferedhere = $_SESSION["something"];
$myfile = fopen("datanew.txt", "w") or die("Unable to open file!");
$txt = '{"details":';
$txt2 = '}';
fwrite($myfile, $txt);
fwrite($myfile, $stufftransferedhere);
fwrite($myfile, $txt2);
fclose($myfile);
*/

?>

<!doctype html>
<html>
<head>
<!-- SheetJS : -->
<script src="xlsx.full.min.js"></script>
<!-- jQuery : -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Foundation : -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.css">
<meta charset="utf-8">
<!-- Angular -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<!-- Created JS -->
<script src="cruise_js.js"></script>
<!-- Created CSS -->
<link rel="stylesheet" type="text/css" href="cruise_css.css">
<title>Beautiful Cruises</title>

<style>
body
{
background: #00F260;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0575E6, #00F260);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0575E6, #00F260); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

/* --------------------- Fonts -------------------------*/

/*Pacifico*/
  @font-face {
    font-family: 'pac';
    src: url('Fonts/Pacifico/pacifico-webfont.eot');
    src: url('Fonts/Pacifico/pacifico-webfont.eot?#iefix') format('embedded-opentype'),
         url('Fonts/Pacifico/pacifico-webfont.woff2') format('woff2'),
         url('Fonts/Pacifico/pacifico-webfont.woff') format('woff'),
         url('Fonts/Pacifico/pacifico-webfont.ttf') format('truetype'),
         url('Fonts/Pacifico/pacifico-webfont.svg#sc') format('svg');
    font-weight: normal;
    font-style: normal;
}

.yk_scheading
{
text-align:center; color:white; font-family: pac; font-size:55px; margin-top:15px;
}

/*Hide whole page wrapper until the data loads properly : */
.yk_whole_page_wrapper
{
display:none;
margin-left:15%; margin-right:15%; background-color:white;
}

</style>

</head>



<body>


<h2 class="yk_scheading">Beautiful Cruises</h2>
<div class="yk_waiting_message">
Please wait for the data to load to the page.<br />
This may take from 10 to 30 seconds.<br />
Thank you. 
<p id="yk_time">0</p>
<p class="yk_error">Please reload the page and try again.</p>
</div>

<a name="to_top"></a>
<div class="yk_whole_page_wrapper" ng-app="plunker" ng-controller="MainCtrl">

        <div class="row yk_logo_div">
        
                <div class='small-12 columns'>
                        <a href="http://www.cruise.co.uk" target="_blank">
                        <img class="yk_top_logo_large show-for-large-only" src="Images/cruise_logo.png" />
                        <img class="yk_top_logo_medium show-for-medium-only" src="Images/cruise_logo.png" />
                        <img class="yk_top_logo_small show-for-small-only" src="Images/cruise_logo.png" />
                        </a>
                </div>
        
        </div>
        
        <div class="row yk_banner hide-for-medium-only hide-for-small-only">
        
                <div class='large-12 columns yk_banner_images'>
                        <img src="Images/banner-cruise-ships-1.jpg" class="yk_ship_images_in_banner"/>
                        <img src="Images/banner-cruise-ships-2.jpg" class="yk_ship_images_in_banner"/>
                        <img src="Images/banner-cruise-ships-3.jpg" class="yk_ship_images_in_banner"/>
                </div>
        
        </div>
        
        <div class="row yk_to_top show-for-large-only" style="position: fixed; left: 2%; top:500px;">
        
        <a href="#to_top"><img src="Images/upw_arrow.png" /></a>
        
        
        </div>
        
        <div class="row yk_initial_dropdown">
        
        		<div class='small-12 columns'>
                	
                      <select class="yk_search_btn">                      	
                        <option id="yk_offers_and_info_view">Offers and Information</option>
                        <option id="yk_cruise_companies_view">Cruise Companies</option>
                      </select>
                 </div>
        
        </div>
        
        <div class="row yk_search">
        
                     <div class="small-12 columns yk_search_names">
       				 <input type='search' ng-model='search' placeholder='Filter results' /> 
                     </div>
             
        </div>
 
        <div class="row yk_cruise_companies">
        
        		<div class='small-12 columns' filter-list='search'>
                	 <h4>Cruise Companies</h4>
                	 <p><a href="https://www.carnival.com/" target="_blank">Carnival Cruises</a></p>
                     <p><a href="http://celebrity.cruiselines.com" target="_blank">Celebrity Cruises</a></p>
                     <p><a href="https://www.cruiseandmaritime.com/" target="_blank">Cruise and Maritime Voyages</a></p>
                	 <p><a href="https://www.hollandamerica.com/" target="_blank">Holland and America Line</a></p>
                     <p><a href="http://www.cruiseholidays.ie/cruiseline/msc-cruises" target="_blank">MSC Cruises</a></p>                 
                     <p><a href="http://www.pocruises.com/" target="_blank">P &amp; O Cruises</a></p>
                     <p><a href="http://www.seascanner.com/princess-cruises" target="_blank">Princess Cruises</a></p>
                     <p><a href="https://www.royalcaribbean.com/" target="_blank">Royal Carribean International</a></p>
                     <p><a href="https://www.tui.co.uk/cruise/" target="_blank">Thomson Cruises</a></p>                
                </div>
                 
        </div>
        
        <!--
        Button option = 
        <div class="small-2 columns">
                    <form action="index.php" method="post">
                    <input type="submit" class="button yk_refreshbtn" value="Refresh Results">          
                    </form>
            </div>
        -->
        
    <div class="yk_heading_and_data_wrapper">
    
    	<div class="row yk_viewmore">
        
                <div class="small-12 columns">
                    <select class="yk_chunk_choice_rows">
                          <option id="yk_1_to_20">Rows 1 to 20</option>
                          <option id="yk_20_to_100">Rows 20 to 100</option>
                          <option id="yk_100_to_200">Rows 100 to 200</option>
                          <option id="yk_200_to_300">Rows 200 to 300</option>
                          <option id="yk_300_to_400">Rows 300 to 400</option>
                          <option id="yk_400_to_500">Rows 400 to 500</option>
                          <option id="yk_500_to_600">Rows 500 to 600</option>
                          <option id="yk_600_to_680">Rows 600 to 680</option>
                    </select>
                </div>
                
                
        
        </div>
        
        <div class="row yk_headingsrow hide-for-medium-only hide-for-small-only">
        
                        <div class="large-4 columns">
                            <h3>Cruise Line</h3>
                        </div>
                
                        <div class="large-2 columns">
                            <h3>Ship Name</h3>
                        </div>
                        
                        <div class="large-2 columns">
                            <h3>Offer</h3>
                        </div>
                        
                        <div class="large-2 columns">
                            <h3>Itinerary</h3>
                        </div>
                        
                        <div class="large-2 columns">
                            <h3>Departure Date</h3>
                        </div>
        
                
        </div>
        
        
        <div class="yk_data_rows_wrapper">
        
        		
                                            
                                            
        
        </div>
        
    </div>

        
        		                                
        
        


</div>

</body>
</html>