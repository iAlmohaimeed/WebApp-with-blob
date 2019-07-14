# WebApp with blob storage
This application demonstrates the communication process between a Web App service and a Blob Storage on Azure.

# **Requirements:**
* **Update** the following variables inside the index.php file:

    > **Syntax** \<_variable name_> : \<_type_> \<_description_>  

    * DefaultEndpointsProtocol: **string** Choose between _http_ or _https_
    * AccountName: **string** The account name (see storage account --> access key).
    * AccountKey: **string** The account key (see storage account --> access key).
    * containerName: **string** The container name inside the blob account. 
# **How to run it:**

### **In you local machine:**
    
* Navigate to the source code directory.
* Install required packges:
    ```console
    php composer.phar install
    ```
* Execute the following command:
    ```console
    php -S localhost:<portnumber>
    ```
### **On Azure Web App:**
Follow the deployment steps [here](https://docs.microsoft.com/en-us/azure/app-service/deploy-local-git).

# **How to test it:**
* [Postman](https://www.getpostman.com/) is the only complete API development environment, and flexibly integrates with the software development cycle