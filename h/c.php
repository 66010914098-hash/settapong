<?php
    session_start();
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เศรษฐ์ตพงษ์ คำเสนาะ (เฟิร์ส)</title>
</head>
<body>
    <h1>c.php</h1>

<?php
  echo @$_SESSION['name']."<br>";
  echo @$_SESSION['nickname']."<br>";
?>

</body>
</html>