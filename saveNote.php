<?php
session_start();
if ( isset($_POST["note"]) || isset($_POST["title"])){
    $note  = array ( $_POST["title"],date('l jS \of F Y h:i:s A'),$_POST["note"] ) ; 
    $_SESSION["notes"] []=$note;

}
header("location:index.html");

?>