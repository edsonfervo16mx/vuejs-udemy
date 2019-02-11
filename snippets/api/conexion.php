<?php @session_start();
$con = new mysqli('localhost','root','','snippets');
if($con->connect_errno){
    die("La conexión no pudó establecerse");
}
?>