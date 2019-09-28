<?php


require 'busfirms.php';

$form['first_name']    = 'first name'; // *Required field
$form['last_name']     = 'last name';  // *Required field
$form['organization']  = 'organization or group name';
$form['email']         = 'email@example.com'; // *Required field
$form['phone']         = '000-000-000';       // *Required field
$form['s_date']        = '01/01/2013';// *Required field
$form['s_time']        = '12:00 AM';// *Required field
$form['d_date']        = '01/01/2013';// *Required field
$form['d_time']        = '12:00 AM';// *Required field
$form['a_date']        = '02/15/2013';// *Required field
$form['a_time']        = '12:00 PM';// *Required field
$form['d_address']     = 'pick-up address';// *Required field
$form['d_zipcode']     = 'pick-up zip code';// *Required field
$form['a_address']     = 'drop-off address';// *Required field
$form['a_zipcode']     = 'drop-off address';// *Required field
$form['trip_is']       = 'One way or Round trip';
$form['budget']        = 'budget';
$form['bus_type']      = 'Bus Type';
$form['comments']      = 'Comments';
$form['contact_by']    = 'phone';
$form['event_name']    = 'Birhday party';
$form['passengers']    = 13;
$form['api_key']       = 'e4a54ec90dd7726fb9688be8180d16c5';// *Required field

$data = new BusFirms;
$result = $data->send($form);
if ($result->success==1) {
    echo 'OK';
} else {
    // $result->message->error
    echo 'FAIL';
}
