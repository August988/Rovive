<?php
header("content-type: text/plain");
ob_start(); ?>

<?php
$data = "\r\n" . ob_get_clean();
$key = file_get_contents("PrivateKey.pem");
openssl_sign($data, $sig, $key, OPENSSL_ALGO_SHA1);
echo "%" . base64_encode($sig) . "%" . $data;
?>