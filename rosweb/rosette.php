<?php
//
// A very simple PHP proxy that sends a HTTP POST to a http service
// with the "test" variable preserved to be served https
//

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://localhost:5000");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "text=".$_POST['text']);

// in real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS,
//          http_build_query(array('postvar1' => 'value1')));

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

curl_close ($ch);

echo $server_output;

?>
