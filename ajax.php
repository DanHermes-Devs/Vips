
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
<script>

  var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://172.17.106.97:8101/WSTarjetaLealtad/Servicio?wsdl=",
  "method": "POST",
  "headers": {
    "content-type": "text/xml",
    "cache-control": "no-cache",
    "postman-token": "b9a3e3fd-e094-69fd-f588-499166509b9e"
  },
  "data": "<soapenv:Envelope xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:tld=\"http://fe.org/tld\">\r\n   <soapenv:Header/>\r\n   <soapenv:Body>\r\n      <tld:datos><![CDATA[\r\n               <CONSULTA  FCIDMARCA=\"OVI\" FIIDTARJETA=\"1\" FINUMEROTARJETA=\"6004840000006157\" FIIDCENTROCOSTO=\"81229\" />\r\n         ]]>\r\n</tld:datos>\r\n      <tld:uid>UID00000IN20120416142530</tld:uid>\r\n   </soapenv:Body>\r\n</soapenv:Envelope>"
}

$.ajax(settings).done(function (response) {
  console.log(response);
});

</script>