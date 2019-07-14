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
    echo "Connecting ...\n";    
    // Get a connection instance. 
    # Setup a specific instance of an Azure::Storage::Client
    $connectionString = "DefaultEndpointsProtocol=https;AccountName=ibrahim20;AccountKey=wMCFPXsA/klI6OGSrmdc1jgFIAJa3bRyD9mhtH31fS9OLCnlhGL8Er/TSc9uKrMMt1GYinFBkIuC5lP2krt/IA==";
    // Create blob client.
    $blobClient = BlobRestProxy::createBlobService($connectionString);
    
    // Create a new ListBlobOption instance.
    $listBlobsOptions = new ListBlobsOptions();
    // Specify the name of the container.
    $containerName = "test";
    echo "Fetching ... \n";
    echo "These are the blobs present in the container: \n";
    do{
        // Get the list of all the blobs on the specified container.
        $result = $blobClient->listBlobs($containerName, $listBlobsOptions);
        // iterates through the list of blobs.
        foreach ($result->getBlobs() as $blob)
        {
            echo $blob->getName().": ".$blob->getUrl()."\n";
        }
        
        $listBlobsOptions->setContinuationToken($result->getContinuationToken());
    } while($result->getContinuationToken());
    echo "Done.\n";
}
/* This function is responsible for connecting to the blob storage account
   @param:
        AccountName: <String> Can be found on the access option on you Azure->Storage-accounts->access-keys.
        AccountKey: <String> Can be found on the Access keys option on your Azure->Storage-accounts->access-keys.
   @return:
        blobClient: A Client connection instance. 
*/
function connect(){
    # Setup a specific instance of an Azure::Storage::Client
    $connectionString = "DefaultEndpointsProtocol=https;AccountName=ibrahim20;AccountKey=wMCFPXsA/klI6OGSrmdc1jgFIAJa3bRyD9mhtH31fS9OLCnlhGL8Er/TSc9uKrMMt1GYinFBkIuC5lP2krt/IA==";
    // Create blob client.
    $blobClient = BlobRestProxy::createBlobService($connectionString);
    
    return $blobClient;
}
function uploadToBlob(){
    echo "uploading ... ";
}
?>