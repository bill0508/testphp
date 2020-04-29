<html>
<head>
<title>Test for php</title>
</head>
<body>
This is a test page for php!<br>
<?php echo 'If you see this page, it means it is working!<br>'; ?>
v1.2
<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
  $ip_address = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
  $ip_address = $_SERVER['REMOTE_ADDR'];
}
$now_date = date('Y-m-d H:i:s');
$rnd = rand(100,999);
error_log("[$now_date] ($rnd) This is an access from $ip_address\n", 3, "/opt/app-root/var/log/testphp.log");
?>
</body>
</html>
