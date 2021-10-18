<?php
				$request = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"
				xmlns:als="http://services.alsea.com/Loyalty/Schema/ALSEAMemberServiceMsg"
				xmlns:als1="http://services.alsea.com/Loyalty/Schema/ALSEAPerson" xmlns:als2="http://services.alsea.com/Loyalty/Schema/ALSEAMember"
				xmlns:als3="http://services.alsea.com/Loyalty/Schema/ALSEAContact" xmlns:als4="http://services.alsea.com/Loyalty/Schema/ALSEAAddress"
				xmlns:als5="http://services.alsea.com/Loyalty/Schema/ALSEAContactAlternative"
				xmlns:als6="http://services.alsea.com/Loyalty/Schema/ALSEAPhone" xmlns:als7="http://services.alsea.com/Loyalty/Schema/ALSEACard"
				xmlns:als8="http://services.alsea.com/Loyalty/Schema/ALSEATransaction" xmlns:als9="http://servces.alsea.com/Loyalty/Schema/ALSEAProgram"
				xmlns:als10="http://services.alsea.com/Loyalty/Schema/ALSEAPoints" xmlns:als11="http://services.alsea.com/Loyalty/Schema/ALSEAVoucher"
				xmlns:als12="http://services.alsea.com/Loyalty/Schema/ALSEAPromotion" xmlns:als13="http://services.alsea.com/Loyalty/Schema/ALSEABrand">
				<soapenv:Header>

				<wsse:Security soap:mustUnderstand="1" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext1.0.xsd"
				xmlns:soap="soap">
				<wsse:UsernameToken wsu:Id="UsernameToken-XAqqET7bPF88fgxQD4ytyw22" xmlns:wsu="http://docs.oasisopen.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">

				<wsse:Username>soaloyalty</wsse:Username>
				<wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile1.0#PasswordText">L0y417y.</wsse:Password>
				</wsse:UsernameToken>
				</wsse:Security>
				</soapenv:Header>
				<soapenv:Body>


				<als:CreateMemberMDMRequest>
				<als:cleanFlag >Y</als:cleanFlag >
				<als:matchFlag >N</als:matchFlag >
				<als:saveMDMFlag >Y</als:saveMDMFlag >
				<als:alseaMember >
				<als1:gender >M</als1:gender >
				<als1:name>'.$nombre.'</als1:name>
				<als1:lastName >'.$apellido.'</als1:lastName >
				<als1:middleName >TDLVIPSWEBR</als1:middleName >
				<als1:birthday >01/01/1964</als1:birthday >

				<als2:memberNumber />
				<als2:enrollmentChannel >Web</als2:enrollmentChannel >
				<als2:memberClass >Customer</als2:memberClass >
				<als2:memberName >'.$nombrecompleto.'</als2:memberName >
				<als2:tierName >WOW Tier</als2:tierName >
				<als2:employeePositionName >BKCASUAL Agente de CallCenter</als2:employeePositionName >
				<als2:employeeDivision >BKCASUAL</als2:employeeDivision >
				<als2:employeeOrganization >BKCASUAL</als2:employeeOrganization >
				<als2:statementMethod >Email</als2:statementMethod >
				<als2:partnerSourceName >Alsea Mexico</als2:partnerSourceName >
				<als2:contact>

				<als3:email >'.$correo.'</als3:email >
				<als3:addressesList >
				<als3:address>

				<als4:streetAddress />
				<als4:streetAddress2 >Huehuetoca</als4:streetAddress2 >
				<als4:state >MEX</als4:state >
				<als4:country >Mexico</als4:country >
				<als4:zipCode >54680</als4:zipCode >
				<als4:county >Huehuetoca</als4:county >
				<als4:addressType >Ship To</als4:addressType >
				<als4:activeFlag >Y</als4:activeFlag >
				<als4:primaryFlag >Y</als4:primaryFlag >

				</als3:address>
				</als3:addressesList>
				<als3:phonesList>
				<als3:contactPhone>

				<als5:phone>
				<als6:phoneNumber >5555555555</als6:phoneNumber >
				<als6:type >Personal</als6:type >
				</als5:phone>
				</als3:contactPhone>
				</als3:phonesList>

				<als3:preferredCommunication >Email</als3:preferredCommunication >
				<als3:suppressCallFlag >Y</als3:suppressCallFlag >
				<als3:suppressEmailFlag >Y</als3:suppressEmailFlag >
				<als3:suppressFaxFlag >Y</als3:suppressFaxFlag >
				<als3:suppressMailingFlag >Y</als3:suppressMailingFlag >
				<als3:suppressSMSFlag >Y</als3:suppressSMSFlag >

				</als2:contact>
				<als2:cardsList>
				<als7:card>
				<als7:pin/>
				<als7:cardNumber/>
				<als7:cardStatusCode/>
				<als7:cardType/>
				<als7:nameOnCard/>
				<als7:isPrimaryCard/>
				</als7:card>
				</als2:cardsList>
				<als2:programsList>
				<als9:program>
				<als9:programName>WOW Rewards</als9:programName>
				</als9:program>
				</als2:programsList>
				<als2:brandsList>
				<als13:brand>
				<als13:advertisement>Y</als13:advertisement>
				<als13:brand>Chilis</als13:brand>
				<als13:emailFrecuency>Semanal</als13:emailFrecuency>
				<als13:socialNetwork>Facebook</als13:socialNetwork>
				</als13:brand>
				<als13:brand>
				<als13:advertisement>Y</als13:advertisement>
				<als13:brand>P.F. Changs</als13:brand>
				<als13:emailFrecuency>Semanal</als13:emailFrecuency>
				<als13:socialNetwork>Facebook</als13:socialNetwork>
				</als13:brand>
				<als13:brand>
				<als13:advertisement>Y</als13:advertisement>
				<als13:brand>Italiannis</als13:brand>
				<als13:emailFrecuency>Semanal</als13:emailFrecuency>
				<als13:socialNetwork>Facebook</als13:socialNetwork>
				</als13:brand>
				<als13:brand>
				<als13:advertisement>Y</als13:advertisement>
				<als13:brand>California Pizza Kitchen</als13:brand>
				<als13:emailFrecuency>Semanal</als13:emailFrecuency>
				<als13:socialNetwork>Facebook</als13:socialNetwork>
				</als13:brand>

				<als13:brand>
				<als13:advertisement>Y</als13:advertisement>
				<als13:brand>Burger King</als13:brand>
				<als13:emailFrecuency>Semanal</als13:emailFrecuency>
				<als13:socialNetwork>Facebook</als13:socialNetwork>
				</als13:brand>
				<als13:brand>
				<als13:advertisement>Y</als13:advertisement>

				<als13:brand>Starbucks</als13:brand>
				<als13:emailFrecuency>Semanal</als13:emailFrecuency>
				<als13:socialNetwork>Facebook</als13:socialNetwork>
				</als13:brand>
				<als13:brand>
				<als13:advertisement>Y</als13:advertisement>
				<als13:brand>VIPs</als13:brand>
				<als13:emailFrecuency>Semanal</als13:emailFrecuency>
				<als13:socialNetwork>Facebook</als13:socialNetwork>
				</als13:brand>

				<als13:brand>
				<als13:advertisement>Y</als13:advertisement>
				<als13:brand>Porton</als13:brand>
				<als13:emailFrecuency>Semanal</als13:emailFrecuency>
				<als13:socialNetwork>Facebook</als13:socialNetwork>
				</als13:brand>

				<als13:brand>
				<als13:advertisement>Y</als13:advertisement>
				<als13:brand>CheeseCake Factory</als13:brand>
				<als13:emailFrecuency>Semanal</als13:emailFrecuency>
				<als13:socialNetwork>Facebook</als13:socialNetwork>
				</als13:brand>

				</als2:brandsList>
				</als:alseaMember>
				</als:CreateMemberMDMRequest>
				</soapenv:Body>
				</soapenv:Envelope>';

				$soapUrl ="https://soaprod.grupoalsea.com.mx/Services/Loyalty/ALSEAMemberService?wsdl";// asmx URL of WSDL
				//$soapUrl ="https://soatest.grupoalsea.com.mx/Services/Loyalty/ALSEAMemberService?wsdl";
				$soapUser ="username";//  username
				$soapPassword ="password";// password// xml post structure
				$xml_post_string =$request;   // data from the form, e.g. some ID number

				$headers = array(
					"Content-type: text/xml;charset=\"utf-8\"",
					"Accept: text/xml",
					"Cache-Control: no-cache",
					"Pragma: no-cache",
					"Content-length: ".strlen($xml_post_string),

				);

				$url = $soapUrl;
				// PHP cURL  for https connection with auth

				//DESCOMENTAR ESTA LLAMADA PARA ACTIVAR SERVICIO WOW
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

				curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
				curl_setopt($ch, CURLOPT_TIMEOUT, 10);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

				// converting
				$response = curl_exec($ch);
				curl_close($ch);

				// converting

				$response1 = str_replace("<soap:Body>","",$response);
				$response2 = str_replace("</soap:Body>","",$response1);

				// convertingc to XML

				// user $parser to get your data out of XML response and to display it.
				$stringresponse = $response;

				//$stringresponse = "Se ha almacenado el nuevo miembro en Siebel";

				$errorcrear   = 'error';
				$creado   = 'Se ha almacenado el nuevo miembro en Siebel';
				$existente   = 'The email must be unique in the organization';
				$pos = strpos($stringresponse, $creado);
				$pos2 = strpos($stringresponse, $existente);
				$pos3 = strpos($stringresponse, $errorcrear);
				$wow = 404;


				if ($pos !== false) {
					$wow = 0;
				}

				if ($pos2 !== false) {
					$wow = 1;
				}
?>
