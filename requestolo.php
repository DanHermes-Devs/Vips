<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://adminvips2.teamolo.info/mxPower/alohaRemoteRequest.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n    \"oloClientData\": {\r\n        \"idClient\": \"127300\",\r\n        \"phoneNum\": \"5523160517\",\r\n        \"phoneExt\": \"\",\r\n        \"phoneDesc\": \"\",\r\n        \"firstName\": \"Adrian\",\r\n        \"lastName\": \"Ramirez Castro\",\r\n        \"mothersName\": \"Ramirez Castro\",\r\n        \"email\": \"adrian.ramirez@alsea.com.mx\",\r\n        \"orderNotes\": \"PRUEBA OLO\",\r\n        \"addrAlias\": \"\",\r\n        \"streetName\": \"Av. Revolucion\",\r\n        \"streetNum\": \"1267\",\r\n        \"unitNumber\": \"Piso 3\",\r\n        \"customerNotes\": \"81278 -  - Vips Portal San Angel\",\r\n        \"zipCode\": \"01040\",\r\n        \"colony\": \"Los Alpes\",\r\n        \"city\": \"Ciudad de M\\u00e9xico\",\r\n        \"municipality\": \"\\u00c1lvaro Obreg\\u00f3n\",\r\n        \"idGeoState\": \"9\",\r\n        \"idGeoCountry\": 150,\r\n        \"latitude\": \"19.3611320\",\r\n        \"longitude\": \"-99.1902390\"\r\n    },\r\n    \"remoteAddress\": \"189.204.157.122\",\r\n    \"HTTPUserAgent\": \"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:64.0) Gecko\\/20100101 Firefox\\/64.0\",\r\n    \"storeNumber\": \"99998\",\r\n    \"IPv4\": \"10.5.250.100\",\r\n    \"orderSource\": \"CallCenter\",\r\n    \"latitude\": \"19.3611320\",\r\n    \"longitude\": \"-99.1902390\",\r\n    \"idValidUser\": \"595\",\r\n    \"userLogin\": \"adrian\",\r\n    \"order\": {\r\n        \"items\": [{\r\n            \"item\": {\r\n                \"iditem\": \"38504\",\r\n                \"name\": \"PAVO EN JUGO CON RELLENO\",\r\n                \"longName\": \"PAVO EN JUGO CON RELLENO\",\r\n                \"hasModifier\": \"1\",\r\n                \"menuItemId\": \"38504\",\r\n                \"quantity\": 1,\r\n                \"subItems\": [{\r\n                    \"item\": {\r\n                        \"menuItemId\": \"38604\",\r\n                        \"modGroupId\": \"11019\",\r\n                        \"longName\": \"ENSALADA DE MANZANA\",\r\n                        \"hasModifier\": \"0\",\r\n                        \"quantity\": 1,\r\n                        \"idItemTreeSRC\": [\"38604\"],\r\n                        \"subItems\": []\r\n                    }\r\n                }]\r\n            }\r\n        }],\r\n        \"customer\": {\r\n            \"firstName\": \"Adrian\",\r\n            \"lastName\": \"Ramirez Castro\",\r\n            \"addressLine1\": \"1267 # Av. Revolucion\",\r\n            \"city\": \"Ciudad de M\\u00e9xico\",\r\n            \"state\": \"Distrito Federal\",\r\n            \"zipCode\": \"01040\",\r\n            \"phoneNumber\": \"5523160517\",\r\n            \"extension\": \"\",\r\n            \"email\": \"adrian.ramirez@alsea.com.mx\",\r\n            \"emailOptIn\": 1,\r\n            \"notes\": \"81278 -  - Vips Portal San Angel \\/ Cliente requiere cambio de $ 100.00\"\r\n        },\r\n        \"couponDescription\": \"\",\r\n        \"couponAmount\": 0,\r\n        \"couponPercentage\": 0,\r\n        \"orderNotes\": \"Tel: 5523160517  Ext:  \\/ Calle: Av. Revolucion # 1267 \\/ Interior: Piso 3  \\/ Colonia: Los Alpes \\/ C.P.: 01040  \\/ Delegaci\\u00c3\\u00b3n: \\u00c1lvaro Obreg\\u00f3n  \\/ Ciudad: Ciudad de M\\u00e9xico \\/ Estado: Distrito Federal \\/ Cliente requiere cambio de $ 100.00 \\/ Entre Calles: 81278 -  - Vips Portal San Angel \\/ (EFECTIVO)\",\r\n        \"dinerNumber\": \"1\",\r\n        \"futureOrder\": \"2019-01-18T13:00:00-06:00\"\r\n    }\r\n}",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/json",
    "m2f: storeSpecialEvent",
    "postman-token: a99dac88-a87b-6dd4-f3f4-f01bedf26d19"
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