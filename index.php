<?php 

use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Common\Exceptions\ServiceException;
use MicrosoftAzure\Storage\Blob\Models\ListBlobsOptions;
use MicrosoftAzure\Storage\Blob\Models\CreateContainerOptions;
use MicrosoftAzure\Storage\Blob\Models\PublicAccessType;

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
    uploadToBlob();
    echo "Post method";
}
/* This function is responsible for fetching the data from the blob storage.
   @param:
   @return 
*/
function fetchBlob(){
    echo "Fetching ... ";
}
/* This function is responsible for fetching the data from the blob storage.
   @param:
   @return 
*/
function uploadToBlob(){
    # Setup a specific instance of an Azure::Storage::Client
    $connectionString = "DefaultEndpointsProtocol=https;AccountName=ibrahim20;AccountKey=wMCFPXsA/klI6OGSrmdc1jgFIAJa3bRyD9mhtH31fS9OLCnlhGL8Er/TSc9uKrMMt1GYinFBkIuC5lP2krt/IA==";
    
    // Create blob client.
    $blobClient = BlobRestProxy::createBlobService($connectionString);
    
    $myfile = fopen("HelloWorld.txt", "w") or die("Unable to open file!");
    fclose($myfile);

    # Upload file as a block blob
    echo "Uploading BlockBlob: ".PHP_EOL;
    echo $fileToUpload;
    echo "<br />";
    
    $content = fopen($fileToUpload, "r");

    //Upload blob
    $blobClient->createBlockBlob($containerName, $fileToUpload, $content);
    echo "uploading ... ";
}
?>