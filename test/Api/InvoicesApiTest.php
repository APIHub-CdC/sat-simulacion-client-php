<?php

namespace SatSandboxClientPhp\Client\Api;
          
use \SatSandboxClientPhp\Client\Configuration;
use \SatSandboxClientPhp\Client\ApiException;
use \SatSandboxClientPhp\Client\ObjectSerializer;
use GuzzleHttp\Client as HttpClient;

class InviocesApiTest extends \PHPUnit\Framework\TestCase
{
    
    public  function setUp():  void {

        $this->apiKey =  "WMroAp3ByBDWFGtk5AD24wagIiR4RFvI";
        $this->x_request_id = "97965258-b20b-4bae-bfbd-2c672de5ac14";
        $this->id = "GAPF7607104Y8";
        $apiUrl       =  "https://circulodecredito-dev.apigee.net/sandbox/v1/sat";
    
        $this->config =  new Configuration();
        $this->config->setHost($apiUrl);
        
        $this->httpClient =  new HttpClient();
    }

    public  function testPostCredentials()  {

        $response = null;
    
        try  {
            $client = new InvoicesApi($this->httpClient, $this->config);
            $response = $client->listTaxpayerInvoice($this->apiKey, $this->x_request_id, $this->id);
            print("\n".$response);
            
        }  catch  (ApiException $exception)  {
            print("\nThe HTTP request failed, an error occurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }
    
        $this->assertNotNull($response);
    }
}
