<?php

require 'classes/user.php';

$requests = ['request1', 'request2'];
$user = new user();
$user -> getRequest($requests);
$user -> parseRequest();

echo user::MAX_INSTANCES;





