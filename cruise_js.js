


$(document).ready(function(){

//Use the XMLHttpRequest to get data from the server using an AJAX request ---------------------------------------------------
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
	
								if (this.readyState == 4 && this.status == 200)
								{
									var myObj = JSON.parse(this.responseText);
									
												 										
													//HTML Content b4 data that is to be displayed 1, just after start of row, b4 logo
												   var html_content_d_1 = "<div class='row yk_contentrow'><div class='small-12 show-for-small-only yk_sdh_sams'><h2>Ship Details</h2></div><div class='medium-12 show-for-medium-only yk_sdh_sams'><h2>Ship Details</h2></div><div class='small-12 medium-12 large-2 columns yk_rows_1_to_5 yk_contentdetails yk_cln'><span class='yk_small_medium_headings'><h3 class='show-for-small-only'>Cruise Line</h3><h3 class='show-for-medium-only'>Cruise Line</h3></span><p><img class='yk_small_logo' src='Images/";
												   
												   //HTML Content b4 data that is to be displayed 2, b4 Cruise Line Name
												   var html_content_d_2 = "' /></p></div><div class='hide-for-small hide-for-medium medium-12 large-2 columns yk_rows_1_to_5 yk_contentdetails yk_cll'><p>";
												   
												   //HTML Content b4 data that is to be displayed 3, b4 Cruise Ship Name
												   var html_content_d_3 = "</p></div><div class='small-12 medium-12 large-2 columns yk_rows_1_to_5 yk_contentdetails yk_csn'><span class='yk_small_medium_headings'><h3 class='show-for-small-only'>Cruise Ship</h3><h3 class='show-for-medium-only'>Cruise Ship</h3></span><p>";
												   
												   //HTML Content b4 data that is to be displayed 4, b4 Offer Name
												   var html_content_d_4 = "</p></div><div class='small-12 medium-12 large-2 columns yk_rows_1_to_5 yk_contentdetails yk_offn'><span class='yk_small_medium_headings'><h3 class='show-for-small-only'>Offer</h3><h3 class='show-for-medium-only'>Offer</h3></span><p>";
												   
												   //HTML Content b4 data that is to be displayed 5, b4 Itinerary	
												   var html_content_d_5 = "</p></div><div class='small-12 medium-12 large-2 columns yk_rows_1_to_5 yk_contentdetails yk_itn'><span class='yk_small_medium_headings'><h3 class='show-for-small-only'>Itinerary</h3><h3 class='show-for-medium-only'>Itinerary</h3></span><p>";
												   
												   //HTML Content b4 data that is to be displayed 6, b4 Departure Date
												   var html_content_d_6 = "</p></div><div class='small-12 medium-12 large-2 columns yk_rows_1_to_5 yk_contentdetails' yk_dd><span class='yk_small_medium_headings'><h3 class='show-for-small-only'>Departure Date</h3><h3 class='show-for-medium-only'>Departure Date</h3></span><p>";
												   
												   //HTML Content b4 data that is to be displayed 7, final part of row
												   var html_content_d_7 = "</p></div></div>"; 
												   	
												
												   //Function adding the html to the json data : 
											       function adding_html_to_json_data (){
													
													return html_content_d_1 												   
												   + myObj.details[i].CruiseLineLogo +												   
												   html_content_d_2												   
												   + myObj.details[i].CruiseLineName + 
												   html_content_d_3
												   + myObj.details[i].CruiseShipName +
												   html_content_d_4
												   + myObj.details[i].OfferName +
												   html_content_d_5
												   + myObj.details[i].Itinerary +
												   html_content_d_6
												   + myObj.details[i].DepartureDate +
												   html_content_d_7;
													   
												   }
													
												   
												   //Display all 680 rows initially : 										   
									  			   var content = '';
												   for (var i = 0; i < 680; i++){
												   content += adding_html_to_json_data(); 
													}									
													$('.yk_data_rows_wrapper').append(content);													
													//Hide rows 21 to 600 : 
													$(".yk_contentrow").slice(21,680).hide(function(){
														
													//Now the data has loaded, fade out and fade in when ready : 
															$('.yk_waiting_message').fadeOut(function(){
															$('.yk_whole_page_wrapper').fadeIn();	
															 																
																});
															 
													});
													 
													
													
									
									
									//Showing different sets of rows depending on what was selected from dropdown menu : 
									$(".yk_chunk_choice_rows").change(function(){

									  //Collect the id of the element selected : 
									  var id = $(this).find("option:selected").attr("id");
									  
									  //Depending on what option was selected, do the following : 
									  switch (id){	
									  
									  
									  		case "yk_1_to_20":
																				 
											
											//Hide and show rows you need:
											$(".yk_contentrow").slice(0,20).show();
											$(".yk_contentrow").slice(21,680).hide();													
												
												
											break;			 
				 							
											case "yk_20_to_100":
																				 
											
											//Hide and show rows you need:
											$(".yk_contentrow").slice(20,100).show();
											$(".yk_contentrow").slice(0,19).hide();
											$(".yk_contentrow").slice(101,680).hide();								
													
												
											break;
										
											case "yk_100_to_200":
										
											//Hide and show rows you need:
											$(".yk_contentrow").slice(100,200).show();
											$(".yk_contentrow").slice(0,99).hide(); 
											$(".yk_contentrow").slice(201,680).hide();    
													
												
											break;
										
											case "yk_200_to_300":
										
											//Hide and show rows you need:
											$(".yk_contentrow").slice(200,300).show();
											$(".yk_contentrow").slice(0,199).hide(); 
											$(".yk_contentrow").slice(301,680).hide();
												 																								
												
											break;
											
											case "yk_300_to_400":
										
											//Hide and show rows you need:
											$(".yk_contentrow").slice(300,400).show();
											$(".yk_contentrow").slice(0,299).hide(); 
											$(".yk_contentrow").slice(401,680).hide();
												 																								
												
											break;
											
											case "yk_400_to_500":
										
											//Hide and show rows you need:
											$(".yk_contentrow").slice(400,500).show();
											$(".yk_contentrow").slice(0,399).hide(); 
											$(".yk_contentrow").slice(501,680).hide();
												 																								
												
											break;
											
											case "yk_500_to_600":
										
											//Hide and show rows you need:
											$(".yk_contentrow").slice(500,600).show();
											$(".yk_contentrow").slice(0,499).hide(); 
											$(".yk_contentrow").slice(601,680).hide();
												 																								
												
											break;
											
											case "yk_600_to_680":
										
											//Hide and show rows you need:
											$(".yk_contentrow").slice(600,680).show();
											$(".yk_contentrow").slice(0,599).hide(); 
											 																								
												
											break;
											
									  			}
			  
									});
			
								}
						};
						
xmlhttp.open("GET", "datanew.txt", true);
xmlhttp.send();


//-----------------------------BANNER---------------------------------------------------------

$(".yk_banner_images img:nth-child(1)").show();


var rotation = 1; 


setInterval(function(){
	
	
	        $(".yk_banner_images img:nth-child(" + rotation + ")").fadeOut(); 
			
			rotation++; 
			
			$(".yk_banner_images img:nth-child(" + rotation + ")").fadeIn();
	 
			if (rotation >= 4)
			{
			rotation = 1;
			$(".yk_banner_images img:nth-child(" + rotation + ")").fadeIn();
			}
	
	
	}, 6000);





//-----------------------------TIMER BEFORE PAGE BEGINS TO LOAD---------------------------------------------------------

var count = 0;    
var counter;

//Timer Function
function timer(){

						 //Count upwards
						 count++;
						 document.getElementById("yk_time").innerHTML = count;
				
						 //If the timer reaches 30 seconds, prompt to reload page	 
						 if (count >= 30)
						{
							clearInterval(counter);
							$('.yk_error').show(); 
							return;
						}
		 
			    }
				
//Start the timer function : 
counter = setInterval(timer, 1000); //timer runs every second

	
$(".yk_search_btn").change(function(){
	
	//Collect the id of the element selected : 
	var id = $(this).find("option:selected").attr("id");
	
	switch (id){
		
	case "yk_offers_and_info_view":
	
	$('.yk_heading_and_data_wrapper').show();
	$('.yk_cruise_companies').hide();
	$('.yk_search').hide(); 
																				 
	break;
	
	case "yk_cruise_companies_view":
	
	$('.yk_heading_and_data_wrapper').hide();
	$('.yk_cruise_companies').show();
	$('.yk_search').show();

																				 
	break;
	
	case "yk_cdcduk_homepage":
	
	window.open("http://www.cruise.co.uk/");

																				 
	break;
	
	
	
	}
	
	});
	
		
}); 

//---------Angular code for filter without ng-repeat : ------------------------------------------------------------
 
var app = angular.module('plunker', []);

app.controller('MainCtrl', function($scope) {
  $scope.name = 'World';
});

app.directive('filterList', function($timeout) {
	
    return {

        link: function(scope, element, attrs) {
            
            var li = Array.prototype.slice.call(element[0].children);
            
            function filterBy(value) {
                li.forEach(function(el) {
                    el.className = el.textContent.toLowerCase().indexOf(value.toLowerCase()) !== -1 ? '' : 'ng-hide';
                });
            }
            
            scope.$watch(attrs.filterList, function(newVal, oldVal) {
                if (newVal !== oldVal) {
                    filterBy(newVal);
                }
            });
        }
		
		
    };
	
});


