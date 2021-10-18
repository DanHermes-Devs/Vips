<?php 


$json_vips_cena = '{
    "oloClientData": {
        "idClient": "127300",
        "phoneNum": "5523160517",
        "phoneExt": "",
        "phoneDesc": "",
        "firstName": "Armando",
        "lastName": "Jiménez",
        "mothersName": "Morales",
        "email": "jcastillo.gu@gesfor.com.mx",
        "orderNotes": "PRUEBA OLO",
        "addrAlias": "",
        "streetName": "Av. Revolucion",
        "streetNum": "1267",
        "unitNumber": "Piso 3",
        "customerNotes": "81278 -  - Vips Portal San Angel",
        "zipCode": "01040",
        "colony": "Los Alpes",
        "city": "Ciudad de M\u00e9xico",
        "municipality": "\u00c1lvaro Obreg\u00f3n",
        "idGeoState": "9",
        "idGeoCountry": 150,
        "latitude": "19.3611320",
        "longitude": "-99.1902390"
    },
    "remoteAddress": "189.204.157.122",
    "HTTPUserAgent": "Mozilla\/5.0 (Windows NT 10.0; Win64; x64; rv:64.0) Gecko\/20100101 Firefox\/64.0",
    "storeNumber": "81084",
    "IPv4": "172.17.36.100",
    "orderSource": "CallCenter",
    "latitude": "19.3611320",
    "longitude": "-99.1902390",
    "idValidUser": "595",
    "userLogin": "adrian",
    "order": {
        "items": [{
            "item": {
                "iditem": "38504",
                "name": "PAVO EN JUGO CON RELLENO",
                "longName": "PAVO EN JUGO CON RELLENO",
                "hasModifier": "1",
                "menuItemId": "38504",
                "quantity": 1,
                "subItems": [{
                    "item": {
                        "menuItemId": "38604",
                        "modGroupId": "11019",
                        "longName": "ENSALADA DE MANZANA",
                        "hasModifier": "0",
                        "quantity": 1,
                        "idItemTreeSRC": ["38604"],
                        "subItems": []
                    }
                }]
            }
        }],
        "customer": {
            "firstName": "Adrian",
            "lastName": "Ramirez Castro",
            "addressLine1": "1267 # Av. Revolucion",
            "city": "Ciudad de M\u00e9xico",
            "state": "Distrito Federal",
            "zipCode": "01040",
            "phoneNumber": "5523160517",
            "extension": "",
            "email": "adrian.ramirez@alsea.com.mx",
            "emailOptIn": 1,
            "notes": "81278 -  - Vips Portal San Angel \/ Cliente requiere cambio de $ 100.00"
        },
        "couponDescription": "",
        "couponAmount": 0,
        "couponPercentage": 0,
        "orderNotes": "Tel: 5523160517  Ext:  \/ Calle: Av. Revolucion # 1267 \/ Interior: Piso 3  \/ Colonia: Los Alpes \/ C.P.: 01040  \/ Delegaci\u00c3\u00b3n: \u00c1lvaro Obreg\u00f3n  \/ Ciudad: Ciudad de M\u00e9xico \/ Estado: Distrito Federal \/ Cliente requiere cambio de $ 100.00 \/ Entre Calles: 81278 -  - Vips Portal San Angel \/ (EFECTIVO)",
        "dinerNumber": "1",
        "futureOrder": "2019-04-25T13:00:00-06:00"
    }
}';

$json_vips_simple  = '{"oloClientData":{"idClient":"282851","phoneNum":"5512131415","phoneExt":"","phoneDesc":"","firstName":"Armando","lastName":"Jiménez","mothersName":"Morales","email":"","orderNotes":"Este es el campo de ORDERNOTES, este campo sera utilizado para coclocar informacion especifica de  esta transaccion , la cual puede ser como ejemplo , Agregar condimentos de catsup y mostaza , la  carne debe deser bien cocida, este campo tambien recibe ahora mas informacion hasta 300 caracteres  y es parte de la nueva funcionalidad de Aloha Takeout 15.1.Aqui termina el comentario de prueba  gracias 12345678901234567890123456789012345678901234567890","addrAlias":"","streetName":"ARQUIMIDES","streetNum":"130","unitNumber":"","customerNotes":"Este campo es el de adress notes , este campo imprime en la cuenta del cliente informacion  adicional para que el driver pueda ubicar la direccion del cliente de una manera mas sencilla, la  capacidad de impresion fue aumentada debe te ner hasta 300 caracteres , esta es una nueva  funcionalidad de Aloha TakeOut v 15.1","zipCode":"11550","colony":"POLANCO REFORMA","city":"MIGUEL HIDALGO","municipality":"MIGUEL HIDALGO","idGeoState":"9","idGeoCountry":150,"latitude":"19.4338930","longitude":"-99.1912470"},"remoteAddress":"201.151.123.18","HTTPUserAgent":"Mozilla\/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko\/20100101 Firefox\/50.0","storeNumber":"81064","IPv4":"172.17.36.100","orderSource":"CallCenter","latitude":"19.4338930","longitude":"-99.1912470","idValidUser":"484","userLogin":"vguzman","order":{"items":[{"item":{"iditem":"44071","name":"AGUA EMBOTELLADA","longName":"AGUA EMBOTELLADA","hasModifier":"0","menuItemId":"44071","quantity":1}}],"customer":{"firstName":"Juan","lastName":"Perez","addressLine1":"130 # ARQUIMIDES","city":"MIGUEL HIDALGO","state":"Distrito Federal","zipCode":"11550","phoneNumber":"5512131415","extension":"","email":"","emailOptIn":"1","notes":"Este campo es el de adress notes , este campo imprime en la cuenta del cliente informacion  adicional para que el driver pueda ubicar la direccion del cliente de una manera mas sencilla, la  capacidad de impresion fue aumentada debe te ner hasta 300 caracteres , esta es una nueva  funcionalidad de Aloha TakeOut v 15.1 \/ Cliente requiere cambio de $ 100.00"},"couponDescription":"","couponAmount":0,"couponPercentage":0,"orderNotes":"Tel: 5512131415  Ext:  \/ Calle: ARQUIMIDES # 130 \/ Interior:   \/ Colonia: POLANCO REFORMA \/ C.P.: 11550  \/ Delegaci\u00f3n: MIGUEL HIDALGO  \/ Ciudad: MIGUEL HIDALGO \/ Estado: Distrito Federal \/ Cliente requiere cambio de $ 100.00 \/ Entre Calles: Este campo es el de adress notes , este campo imprime en la cuenta del cliente informacion  adicional para que el driver pueda ubicar la direccion del cliente de una manera mas sencilla, la  capacidad de impresion fue aumentada debe te ner hasta 300 caracteres , esta es una nueva  funcionalidad de Aloha TakeOut v 15.1","dinerNumber":"1","futureOrder":"2019-04-19T08:00:00-05:00"}}';

$cena1 = '{"oloClientData":{"idClient":"200654","phoneNum":"5523160517","phoneExt":"","phoneDesc":"","firstName":"Armando","lastName":"Jiménez","mothersName":"No preparar","email":"armando@wearetrafika.com","orderNotes":"prueba, favor de cancelar","addrAlias":"","streetName":"ARQUIMIDES","streetNum":"130","unitNumber":"","customerNotes":"81064 -  - Lab Vips  Arquimedes","zipCode":"11550","colony":"POLANCO REFORMA","city":"MIGUEL HIDALGO","municipality":"MIGUEL HIDALGO","idGeoState":"9","idGeoCountry":150,"latitude":"19.4338930","longitude":"-99.1912470"},"remoteAddress":"189.204.157.122","HTTPUserAgent":"Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/73.0.3683.103 Safari\/537.36","storeNumber":"81064","IPv4":"172.17.36.100","orderSource":"CallCenter","latitude":"19.4338930","longitude":"-99.1912470","idValidUser":"595","userLogin":"adrian","order":{"items":[{"item":{"iditem":"44071","name":"AGUA EMBOTELLADA","longName":"AGUA EMBOTELLADA","hasModifier":"0","menuItemId":"44071","quantity":1}},{"item":{"iditem":"44072","name":"REFRESCO COLA LIGHT LATA","longName":"REFRESCO COLA LIGHT LATA","hasModifier":"0","menuItemId":"44072","quantity":1}},{"item":{"iditem":"44073","name":"REFRESCO LIMON LIGHT LATA","longName":"REFRESCO LIMON LIGHT LATA","hasModifier":"0","menuItemId":"44073","quantity":1}}],"customer":{"firstName":"Prueba Call Center","lastName":"No preparar","addressLine1":"130 # ARQUIMIDES","city":"MIGUEL HIDALGO","state":"Distrito Federal","zipCode":"11550","phoneNumber":"5523160517","extension":"","email":"pruebacallcenter@no.preparar","emailOptIn":1,"notes":"81064 -  - Lab Vips  Arquimedes \/ Cliente requiere cambio de $ 100.00"},"couponDescription":"","couponAmount":0,"couponPercentage":0,"orderNotes":"Tel: 5523160517  Ext:  \/ Calle: ARQUIMIDES # 130 \/ Interior:   \/ Colonia: POLANCO REFORMA \/ C.P.: 11550  \/ Delegaci\u00c3\u00b3n: MIGUEL HIDALGO  \/ Ciudad: MIGUEL HIDALGO \/ Estado: Distrito Federal \/ Cliente requiere cambio de $ 100.00 \/ Entre Calles: 81064 -  - Lab Vips  Arquimedes \/ (EFECTIVO)","dinerNumber":"1","futureOrder":"2019-05-10T12:00:00-05:00"}}';

$data['m2f']             = 'storeSpecialEvent';//priceEvent
$data['serverIP']        = '172.17.36.100';
$data['storeNumber']     = '81064';
$data['orderData']       = $cena1;
$data                    = http_build_query($data);

$ch = curl_init('https://adminvips2.teamolo.info/mxPower/alohaRemoteRequest.php');//endpoint vips

curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$response = curl_exec($ch);
curl_close($ch);
echo "<pre>";
print_r($response);

$array = json_decode($response, true);
echo $array['SpecialEventRetoStatusText'];
echo '<br>';
echo $array['electronicCard'];

?>