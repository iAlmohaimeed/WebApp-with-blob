<?php 
// Hold HTTP request type
$request_method = $_SERVER['REQUEST_METHOD'];
switch($request_method){
    case "GET":
        // If HTTP request is GET.
        doGet();
        break;
    case "POST":
        /// If HTTP request is POST.
        doPost();
        break;
}
function doGet(){
    fetchBlob();
    echo "Get method";
}
function doPost(){
    echo "Post method";
}
/* This function is responsible for fetching the data from the blob storage.
   @param:
   @return 
*/
function fetchBlob(){
    
}
?>