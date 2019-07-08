<?php

function sendXmlOverPost($url, $xml) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);

	// For xml, change the content-type.
	curl_setopt ($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));

	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // ask for results to be returned

	// Send to remote and return data to caller.
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}
$xml2 = '<?xml version="1.0"?>
<BackgroundCheck userId="saap_xml" password="SxPw1725">
  <BackgroundSearchPackage action="status">
    <OrderId>329127</OrderId>
  </BackgroundSearchPackage>
</BackgroundCheck>';

$url = "https://lightning.instascreen.net/send/interchange";
$xml = "<?xml version='1.0'?>
<BackgroundCheck userId='saap_xml' password='SxPw1725'>
   <BackgroundSearchPackage action='submit' type='DEMO' />
      <ReferenceId>123ABC</ReferenceId>
      <PersonalData>
         <PersonName>
            <GivenName>Joe</GivenName>
            <MiddleName>Kurt</MiddleName>
            <FamilyName>Tank</FamilyName>
            <Affix>III</Affix>
         </PersonName>
         <DemographicDetail>
             <GovernmentId countryCode='US' issuingAuthority='SSN'>111-22-3333</GovernmentId>
             <Gender>M</Gender>
             <DateOfBirth>1974-01-20</DateOfBirth>
         </DemographicDetail>
         <PostalAddress>
             <CountryCode>US</CountryCode>
             <PostalCode>18505</PostalCode>
             <Region>PA</Region>
             <Municipality>Scranton</Municipality>
             <DeliveryAddress>
                 <AddressLine>1725 Slough Avenue</AddressLine>
             </DeliveryAddress>
         </PostalAddress>
         <EmailAddress>test@noemail.com</EmailAddress>
         <Telephone>717-555-0177</Telephone>
      </PersonalData>
      <Screenings>
         <Screening type='credit' />
         <Screening type='111-22-33333' />
      </Screenings>
   </BackgroundSearchPackage>
</BackgroundCheck>";

print(sendXmlOverPost($url, $xml2));


$url = "https://lightning.instascreen.net/send/interchange";

/*
Thank you! if you post to a https address, you put this another line:

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$post_string = "<?xml version='1.0'?>
<BackgroundCheck userId='saap_xml' password='SxPw1725'>
   <BackgroundSearchPackage action='submit' type='DEMO'>
      <ReferenceId>123ABC</ReferenceId>
      <PersonalData>
         <PersonName>
            <GivenName>Dwight</GivenName>
            <MiddleName>Kurt</MiddleName>
            <FamilyName>Schrute</FamilyName>
            <Affix>III</Affix>
         </PersonName>
         <DemographicDetail>
             <GovernmentId countryCode='US' issuingAuthority='SSN'>111-22-3333</GovernmentId>
             <Gender>M</Gender>
             <DateOfBirth>1974-01-20</DateOfBirth>
         </DemographicDetail>
         <PostalAddress>
             <CountryCode>US</CountryCode>
             <PostalCode>18505</PostalCode>
             <Region>PA</Region>
             <Municipality>Scranton</Municipality>
             <DeliveryAddress>
                 <AddressLine>1725 Slough Avenue</AddressLine>
             </DeliveryAddress>
         </PostalAddress>
         <EmailAddress>test@noemail.com</EmailAddress>
         <Telephone>717-555-0177</Telephone>
      </PersonalData>
      <Screenings>
         <Screening type='credit'>
            <Vendor score='no' fraud='no'>transunion</Vendor>
         </Screening>
      </Screenings>
   </BackgroundSearchPackage>
</BackgroundCheck>";


$header  = "POST HTTP/1.0 \r\n";
$header .= "Content-type: text/xml \r\n";
$header .= "Content-length: ".strlen($post_string)." \r\n";
$header .= "Content-transfer-encoding: text \r\n";
$header .= "Connection: close \r\n\r\n"; 
$header .= $post_string;

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 4);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $header);

$data = curl_exec($ch); 

if(curl_errno($ch))
    print curl_error($ch);
else {
    print($data);
    curl_close($ch);
}
*/
?>