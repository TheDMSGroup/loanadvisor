<?php

$url = "https://securegtl.quinstreet.com/plpost.jsp";

$post = [];

if(!empty($_GET["LoanPurpose"])){
    $post["LoanPurpose"] = $_GET["LoanPurpose"];
}

if(!empty($_GET["LoanPurpose"])){
    $post["LoanPurpose"] = $_GET["LoanPurpose"];
}
    
    
    "CashOut" => !empty($_GET["CashOut"]) ? $_GET["CashOut"] : "20000", //"20000",
    "Income" => !empty($_GET["Income"]) ? $_GET["Income"] : "100000", //"100000",
    "CreditRating" => !empty($_GET["CreditRating"]) ? $_GET["CreditRating"] : "Excellent", //"Excellent",
    "EmploymentStatus" => !empty($_GET["EmploymentStatus"]) ? $_GET["EmploymentStatus"] : "7", //"7",
    "Dob" => !empty($_GET["Dob"]) ? $_GET["Dob"] : "04/01/1975", //"04/01/1975",
    "Email" => !empty($_GET["Email"]) ? $_GET["Email"] : "testing345g@thedmsgrp.com" , //"testing@thedmsgrp.com",
    "Fname" => !empty($_GET["Fname"]) ? $_GET["Fname"] : "greg", //"greg",
    "Lname" => !empty($_GET["Lname"]) ? $_GET["Lname"] : "scott", //"scott",
    "HomePhone" => !empty($_GET["HomePhone"]) ? $_GET["HomePhone"] : "7272870440", //"7272870440",
    "PostalCode" => !empty($_GET["PostalCode"]) ? $_GET["PostalCode"] : "33762", //"33762",
    "Street" => !empty($_GET["Street"]) ? $_GET["Street"] : "28100 US Highway 19", //"28100 US Highway 19",
    "City" => !empty($_GET["City"]) ? $_GET["City"] : "CLEARWATER", //"CLEARWATER",
    "State" => !empty($_GET["State"]) ? $_GET["State"] : "FL", //"FL",
    "OwnHome" => !empty($_GET["OwnHome"]) ? $_GET["OwnHome"] : "Homeowner", //"Homeowner",
    "TimeAtResidence" => !empty($_GET["TimeAtResidence"]) ? $_GET["TimeAtResidence"] : "More 3 years", //"More 3 years",
    "PhoneConsentLang" => !empty($_GET["PhoneConsentLang"]) ? $_GET["PhoneConsentLang"] : "I agree to you lending policy", //"I agree to you lending policy",
    "SSN" => !empty($_GET["SSN"]) ? $_GET["SSN"] : "999999990", //"999999990",
    "AFN" => !empty($_GET["AFN"]) ? $_GET["AFN"] : "dreddy", //"dreddy",
    "AF" => !empty($_GET["AF"]) ? $_GET["AF"] : "20306610", //"20306610",
    "getTYLink" => !empty($_GET["getTYLink"]) ? $_GET["getTYLink"] : "yes", //"yes"
];

$headers = [
    'Content-Type: application/json',
    'True-Client-IP: 72.186.114.229',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0',
    'Authorization: Basic ZHJlZGR5:QnJzbm5yczY4Iw== Token MjAzMDY2MTA=',
];

function requestIt($url, $data=NULL, $headers = NULL) {
    
    $payload = json_encode( $data );
    
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

$response = requestIt($url, $post, $headers);
var_dump($response);
if ($response == "OK") { 
    
}else{ 
    
}