<?php

$get = json_encode($_GET);
$post = json_encode($_POST);

$data = file_get_contents('php://input');

file_put_contents('get.txt', $get);
file_put_contents('post.txt', $post);
file_put_contents('data.txt', $data);

echo "connected";