<?php

require 'CURL.php';

$callback = new CURL('google.com');

$callback->setOptions(array(
    CURLOPT_FOLLOWLOCATION  => true,
));

echo $callback->getResponse();