<?php 
require_once __DIR__.'/vendor/autoload.php';
use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Common\Exceptions\ServiceException;
use MicrosoftAzure\Storage\Blob\Models\ListBlobsOptions;
use MicrosoftAzure\Storage\Blob\Models\CreateContainerOptions;
use MicrosoftAzure\Storage\Blob\Models\PublicAccessType;
use WindowsAzure\Common\ServicesBuilder;

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
   // fetchBlob();
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
    
    echo "Done.\n";
}
/* This function is responsible for connecting to the blob storage account
   @param:
        AccountName: <String> Can be found on the access option on you Azure->Storage-accounts->access-keys.
        AccountKey: <String> Can be found on the Access keys option on your Azure->Storage-accounts->access-keys.
   @return:
        blobClient: A Client connection instance. 
*/

function uploadToBlob(){
    echo "uploading ... ";
}
?>