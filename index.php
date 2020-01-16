<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne

$servername = "localhost";
$username = "id11175534_hor";
$password = "azerty";
$dbname = "id11175534_newbase";

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];


$conn = new mysqli($servername,$username,$password);
if ($conn->connect_error){
    echo $conn->connect_error;
}
else {
    $conn->select_db($dbname);

    $sql = "INSERT INTO eleves VALUES (NULL, '$nom', '$prenom', '$age')";
    $conn->query($sql);
    echo $conn->error;
}