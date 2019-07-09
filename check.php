<?php

$url = "https://lightning.instascreen.net/send/interchange";
$xml = "<?xml version='1.0'?>
<BackgroundCheck userId='saap_xml' password='SxPw1725'>
   <BackgroundSearchPackage action='submit' type='DEMO'>
      <ReferenceId>123ABC</ReferenceId>
      <PersonalData>
         <PersonName>
            <GivenName>Joe</GivenName>
            <MiddleName>Kurt</MiddleName>
            <FamilyName>Tank</FamilyName>
            <Affix>III</Affix>
         </PersonName>
         <DemographicDetail>
             <GovernmentId countryCode='US' issuingAuthority='SSN'>$ssn</GovernmentId>
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
      </Screenings>
   </BackgroundSearchPackage>
</BackgroundCheck>";

//if (isset($_POST['ssn']) && $_POST['ssn']) {

    $ssn = $_POST['ssn'];
    //$ssn = '111-22-3333';
    $r = sendXmlOverPost($url, $xml);

    //echo json_encode($r);

    if(strpos($r, 'pending')) {
        echo json_encode(array('success' => 2));
    } else if(strpos($r, 'true')) {
        echo json_encode(array('success' => 1));
    }
    else
        echo json_encode(array('success' => 0));

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

?>

