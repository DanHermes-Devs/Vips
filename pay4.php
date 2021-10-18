<?php
$idtoken = trim('kjrzwrpn0h6irxpafjad');
$nombre = trim('Armando Jiménez');
$total = trim('50.00');
$deviceid= trim('q47unwhgRAgTnQhwr2NopRRZpyUlnnMy');
$zip = trim('01010');
$email = trim('odnam93@gmail.com');
$tel = trim('5540031963');
$token ="eyJraWQiOiI2SHhoaHBWXC9tSEhKNTlPRGNNMmwrNXBKWktaOVwvUlhEZmJoalF4aEdCR0U9IiwiYWxnIjoiUlMyNTYifQ.eyJzdWIiOiI3djNpbmViNzk0amJlNDFvMGFlaXFzbzFubiIsInRva2VuX3VzZSI6ImFjY2VzcyIsInNjb3BlIjoiaHR0cHM6XC9cL2RlbGl2ZXJ5LmNvbVwvZXBheW1lbnQiLCJhdXRoX3RpbWUiOjE1NzY1OTA4MTAsImlzcyI6Imh0dHBzOlwvXC9jb2duaXRvLWlkcC51cy1lYXN0LTEuYW1hem9uYXdzLmNvbVwvdXMtZWFzdC0xXzNaRGRsdjJkRCIsImV4cCI6MTU3NjU5NDQxMCwiaWF0IjoxNTc2NTkwODEwLCJ2ZXJzaW9uIjoyLCJqdGkiOiIwNDUyODM3NC04ZWY4LTQyNTQtYmI3MS0xYzc5ZjQ3OTRhMjYiLCJjbGllbnRfaWQiOiI3djNpbmViNzk0amJlNDFvMGFlaXFzbzFubiJ9.h1ec_JSGgRn70Ef5O4NHvl_VDJ8PWQjaCz3YQYj4GgSDMniFOJJdIIqfnoBhv_Wdc3kHl1r1SEcaWSPLM_X5LWBoI_L9T7ew5uzcW5GRslm27zey-27lSFITX_jQKRr4N8k8d3y0A4TNnO1gTiVQzLKfsn-BG39gwp7nk4MgUU_g6rgaHyWXLV5IAvXb4vOMZQ3Fp8oD51XCO_ou4pupsLIASMvwtpFHpOp6jzyputSOtWQldKfe3jBaBj6pWjXGQaIx0ILTOUqjROWh1DB5muZzJDDJ_gn2n0_4YXgO-jLREe6Zmw68T7szppbsBHaiXgKtFmp-6sN7GXRBuqP5Zg";
$curl = curl_init();
$referencia  = 12345670 +1;
$finish_time = time();
$texto_finish= date("Y-m-d h:i:s", $finish_time);
//echo $referencia;
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://9lt5ztx0v8.execute-api.us-east-1.amazonaws.com/beta/payments?paymentMethodId=3",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n  \"amount\": ".$total.",\r\n  \"reference\": \"".$referencia."\",\r\n  \"authorizations\": 1,\r\n  \"currency\": \"MXN\",\r\n  \"tips\": 0,\r\n  \"token\": \"kykhvgtkbnnmlw3tthw6\",\r\n  \"promotionId\": 0,\r\n  \"email\": \"".$email."\",\r\n  \"branchId\": 60077,\r\n  \"brandId\": 8,\r\n  \"POS\": \"\",\r\n  \"description\": \"Pedido vips.com.mx\",\r\n  \"operationDate\": \"".$texto_finish."\",\r\n  \"card\": {\r\n    \"cardId\": 0,\r\n    \"deviceSessionId\": \"".$deviceid."\",\r\n    \"rememberCard\": false\r\n  },\r\n  \"client\": {\r\n    \"clientId\": 0,\r\n    \"externalClientId\": \"1237\",\r\n    \"firstLastName\": \"\",\r\n    \"secondLastName\": \"\",\r\n    \"name\": \"".$nombre."\",\r\n    \"secondName\": \"\",\r\n    \"telephone\": \"".$tel."\",\r\n    \"zipCode\": \"".$zip."\"\r\n  },\r\n  \"capture\": true\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "authorization: Bearer ".$token."",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 720",
    "Content-Type: application/json",
    "Host: 9lt5ztx0v8.execute-api.us-east-1.amazonaws.com",
    "Postman-Token: f6771f36-ba5f-45b8-8621-a69de65b60c6,dedab764-aec2-4d61-9c7c-8149d94b8cb9",
    "User-Agent: PostmanRuntime/7.20.1",
    "X-User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}