<?php

$data = getallheaders();

print_r($data);
print_r($_POST);
print_r (file_get_contents("php://input"));