# beautiful cruises

Beautiful Cruises was a freelance task for a potential client which displayed data on upcoming sea cruises and allowed for a  search and filter functionality.
I created a JSON formatted .txt file from the Excel sheet using the code in a 'create_json_file.php' (using SheetJS library) 
 When the index.php page is opened, it pulls the data from the file - called 'datanew.txt' 
There is a waiting message when you first go to the web page, which waits until the data is pulled in from the 'datanew.txt' file before showing page's content
All 680 results are pulled, but using jQuery only the first 100 are shown on the page. 
You can then show the other rows depending on the choice selected from the dropdown. 
There is also a 'Cruise Companies' section which just provides a set of links to different cruise companies, with a filter parameter using Angular.
The page is styled using Foundation CSS, and some media queries, which means it looks relatively tidy on small and medium devices too. 
There is a very simple banner functionality with rotating slides at the top of the page.
