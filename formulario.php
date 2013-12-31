<?

#Base de datos config
$zion = new mysqli("localhost", "pontunom_mata", "KlE9eTX?bu]w", "pontunom_codelabs");

#Capturando y escapando variables
$nombre = $zion->real_escape_string($_POST['nombre']);
$apellido = $zion->real_escape_string($_POST['apellido']);
$email = $zion->real_escape_string($_POST['email']);
$curso = $zion->real_escape_string($_POST['curso']);
$ip = $_SERVER["REMOTE_ADDR"];

#Querys a MySQL
$zion->query("INSERT INTO registro(nombre, apellido, email, ip, curso) VALUES ('$nombre', '$apellido', '$email', '$ip', '$curso')");

#Cierra conección
$zion->close();

#Redireccionando
header("Location:https://www.facebook.com/codelabscomunidad");

?>