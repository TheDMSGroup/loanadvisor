<?php

$url = "http://guidetolenders.quinstage.com/plpost.jsp";


//!empty($_POST["payload"])
if(true){
    $payload = '{"Email":"test2ing3959r@thedmsgrp.com","LoanPurpose":"Emergency","CashOut":"20000","Income":"100000","CreditRating":"Excellent","EmploymentStatus":"7","MonthlyPayment":"100","EducationLevel":"None","Dob":"04/01/1975","Fname":"greg","Lname":"scott","HomePhone":"7272870440","PostalCode":"33762","Street":"28100 US Highway 19","City":"CLEARWATER","State":"FL","OwnHome":"Homeowner","TimeAtResidence":"More 3 years","PhoneConsentLang":"I agree to you lending policy","SSN":"999999990","AFN":"dreddy","AF":"20306610","getTYLink":"yes", "postStep":"confirmation", "DataCaptureKey": "4602516615"}';
    $payload2 = $_POST["payload"];
    
    
    var_dump($payload2);
    
    var_dump($payload);
    
    $headers = [
        'Content-Type: application/json',
        'True-Client-IP: 72.186.114.229',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0',
        'Authorization: Basic ZHJlZGR5:QnJzbm5yczY4Iw== Token MjAzMDY2MTA=',
    ];
    function requestIt($url, $payload=NULL, $headers = NULL) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        curl_close($ch);
        return $server_output;
    }
    $response = requestIt($url, $payload2, $headers);
    var_dump($response);
    if ($response == "OK") {

    }else{

    }
}