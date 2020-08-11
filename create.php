<?php 

$admin = $_POST['admin'];
$appname = $_POST['appname'];
$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$db = $_POST['db'];

$fl = fopen('My-Frame/web/controllers/config.php', 'a');

fwrite($fl, "<?php ");
fwrite($fl, "\n");
fwrite($fl, "\n");
fwrite($fl, '$autor = "'.$admin.'";');
fwrite($fl, "\n");
fwrite($fl, "\n");
fwrite($fl, '$appName = "'.$appname.'";');
fwrite($fl, "\n");
fwrite($fl, "\n");
fwrite($fl, '$email = "'.$email.'";');
fwrite($fl, "\n");
fwrite($fl, "\n");
fwrite($fl, '$date = date("Y-m-d");');
fwrite($fl, "\n");
fwrite($fl, "\n");
fwrite($fl, '$icoName = "favicon";');
fwrite($fl, "\n");
fwrite($fl, "\n");
fwrite($fl, '$host = "localhost";');
fwrite($fl, "\n");
fwrite($fl, "\n");
fwrite($fl, '$user = "'.$user.'";');
fwrite($fl, "\n");
fwrite($fl, "\n");
fwrite($fl, '$pass = "'.$pass.'";');
fwrite($fl, "\n");
fwrite($fl, "\n");
fwrite($fl, '$db = "'.$db.'";');
fwrite($fl, "\n");
fwrite($fl, "\n");
fwrite($fl, '$con = new mysqli($host, $user, $pass, $db) or die("Fallo en la conexion a la base de datos");');
fwrite($fl, "\n");
fwrite($fl, "\n");
fwrite($fl, "?>");

header("location: My-Frame");


?>
