<?php


require 'busfirms.php';

$_POST['first_name']    = 'first name'; // *Required field
$_POST['last_name']     = 'last name';  // *Required field
$_POST['organization']  = 'organization or group name';
$_POST['email']         = 'email@example.com'; // *Required field
$_POST['phone']         = '000-000-000';       // *Required field
$_POST['s_date']        = '01/01/2013';// *Required field
$_POST['s_time']        = '12:00 AM';// *Required field
$_POST['d_date']        = '01/01/2013';// *Required field
$_POST['d_time']        = '12:00 AM';// *Required field
$_POST['a_date']        = '02/15/2013';// *Required field
$_POST['a_time']        = '12:00 PM';// *Required field
$_POST['d_address']     = 'pick-up address';// *Required field
$_POST['d_zipcode']     = 'pick-up zip code';// *Required field
$_POST['a_address']     = 'drop-off address';// *Required field
$_POST['a_zipcode']     = 'drop-off address';// *Required field
$_POST['trip_is']       = 'One way or Round trip';
$_POST['budget']        = 'budget';
$_POST['bus_type']      = 'Bus Type';
$_POST['comments']      = 'Comments';
$_POST['contact_by']    = 'phone';
$_POST['event_name']    = 'Birhday party';
$_POST['passengers']    = 13;
$_POST['api_key']       = 'e4a54ec90dd7726fb9688be8180d16c5';// *Required field

$data = new BusFirms;
$result = $data->send($_POST);
if ($result->success==1) {
    echo 'OK';
} else {
    // $result->message->error
    echo 'FAIL';
}
