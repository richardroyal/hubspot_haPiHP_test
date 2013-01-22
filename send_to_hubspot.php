<?php

require_once('lib/haPiHP/class.leads.php');
require_once('lib/haPiHP/class.contacts.php');

$HAPIKey = '';




/* Lead Form Example */

$api_endpoint = "";
$leads = new HubSpot_Leads($HAPIKey);

$val = array( 'email' => 'testemail+'.uniqid().'@emailtest.com', 
              'last_order_datetime' => "Mon Jan 21 15:48:31 EST 2013",
              'last_order_date' => "2013.01.21",
              'last_order_time' => "15:48",
              'last_order_number' => "123",
              'last_order_amount' => "15.99" );
  
echo $leads->add_lead($api_endpoint, $val) . "\n";










/* Contact API Example */

$contacts = new HubSpot_Contacts($HAPIKey);
$unique_email = 'testemail+'.uniqid().'@emailtest.com';
$params =  array('email' => $unique_email, 'firstname' => 'Webster' );
$createdContact = $contacts->create_contact($params);
print_r($createdContact);

?>
