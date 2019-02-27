<?php
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../vendor/autoload.php';
require_once __DIR__. DIRECTORY_SEPARATOR .'../../../Resources/ExternalConfiguration.php';

class GetPurchaseAndRefundDetails
{
    function testGetPurchaseAndRefundDetails($dynamicDataArr, $apiName)
    {
        $commonElement = new CyberSource\ExternalConfiguration();
        $config = $commonElement->ConnectionHost();
        $apiclient = new CyberSource\ApiClient($config);
        $api_instance = new CyberSource\Api\PurchaseAndRefundDetailsApi($apiclient);
        foreach($dynamicDataArr as $value)
        {
            $testId = $value[0];
            $startTime = $value[1];
            $endTime = $value[2];
            $organizationId = $value[3];
            $message = $value[4];
            $api_response = list($response,$statusCode,$httpHeader)=null;
           
            try {
                $api_response = $api_instance->getPurchaseAndRefundDetails($startTime, $endTime, $organizationId = null, $paymentSubtype = 'ALL', $viewBy = 'requestDate', $groupName = null, $offset = null, $limit = '2000');
                if($api_response[1] != 200 ){
                    $responseMessage = 'Assertion Failed : ' .$api_response[1];
                        
                    }else {
                    $responseMessage = "Pass :".$api_response[1];
                    }
        
                } catch (Cybersource\ApiException $e) {
                    $reasonArr=  $e->getResponseObject();
                    $respArr = explode(" ", $e->getMessage());
                    if(isset($reasonArr["reason"]))
                    $responseMessage = $respArr[0].  $reasonArr["reason"];
                    else 
                    $responseMessage = $respArr[0];
        
                }
                $commonElement->CallTestLogging($testId, $apiName, $responseMessage, $message);
        }
    }
}
?>	