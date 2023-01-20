<?php

namespace SatSandboxClientPhp\Client\Api;
          
use \SatSandboxClientPhp\Client\Configuration;
use \SatSandboxClientPhp\Client\ApiException;
use \SatSandboxClientPhp\Client\ObjectSerializer;
use \SatSandboxClientPhp\Client\Model\CredentialCiecInput;
use GuzzleHttp\Client as HttpClient;

class CredentialsApiTest extends \PHPUnit\Framework\TestCase
{
    
    public  function setUp():  void {

        $this->apiKey =  "WMroAp3ByBDWFGtk5AD24wagIiR4RFvI";
        $apiUrl       =  "https://circulodecredito-dev.apigee.net/sandbox/v1/sat";
    
        $this->config =  new Configuration();
        $this->config->setHost($apiUrl);
        
        $this->httpClient =  new HttpClient();
    }

    public  function testPostCredentials()  {

        $requestPayload = new  CredentialCiecInput();
        $requestPayload->setType("ciec");
        $requestPayload->setRfc("GAPF7607104Y8");
        $requestPayload->setPassword("secret123");
    
        $response = null;
    
        try  {
            $client = new CredentialsApi($this->httpClient, $this->config);
            $response = $client->createCredential($this->apiKey, $requestPayload);
            print("\n".$response);
            
        }  catch  (ApiException $exception)  {
            print("\nThe HTTP request failed, an error occurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }
    
        $this->assertNotNull($response);
    }
}
