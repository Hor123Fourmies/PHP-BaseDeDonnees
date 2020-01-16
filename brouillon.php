<?php

//$nom = $_POST['nom'];
//$prenom = $_POST['prenom'];
//$age = $_POST['age'];

$servername = "localhost";
$username = "id11175534_hor";
$password = "azerty";
$dbname = "id11175534_newbase";


function ajout ($nom,$prenom,$age)
{

    $servername = "localhost";
    $username = "id11175534_hor";
    $password = "azerty";
    $dbname = "id11175534_newbase";


    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        echo $conn->connect_error;
    } else {
        $conn->select_db($dbname);
        $sql = "INSERT INTO eleves VALUES (NULL, '$nom', '$prenom', '$age')";
        $conn->query($sql);
        echo $conn->error;

        $conn->close ();
    }
}
ajout('Lulu', 'Prosper', '27');
ajout('Toto', 'Sam', '34');


// Modifier
function modifier ($id,$nom,$prenom,$age)
{

    $servername = "localhost";
    $username = "id11175534_hor";
    $password = "azerty";
    $dbname = "id11175534_newbase";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        echo $conn->connect_error;
    } else {
        $conn->select_db($dbname);
        $modif = "UPDATE eleves set nom = '$nom', prenom = '$prenom', age = '$age' WHERE id = '$id'";
        $conn->query($modif);
        echo $conn->error;
    }
}
modifier(1, "Vatout", "Georges", 27);



/*
$liste = "SELECT * FROM `eleves` WHERE 1";
$result = $conn->query($liste);

while($row = $result->fetch_assoc())
{
    echo $row['nom'].' '.$row['prenom'].' '.$row['age'].' '."<br>";
}
$conn->close ();
*/

function afficher (){
    $servername = "localhost";
    $username = "id11175534_hor";
    $password = "azerty";
    $dbname = "id11175534_newbase";

    $conn = new mysqli($servername, $username, $password);
    $conn->select_db($dbname);
    $liste = "SELECT * FROM `eleves` WHERE 1";
    $result = $conn->query($liste);

    while($row = $result->fetch_assoc())
    {
        echo $row['nom'].' '.$row['prenom'].' '.$row['age'].' '."<br>";
    }
}
afficher();


// Supprimer

// DELETE from eleves WHERE nom="";
/*
$servername = "localhost";
$username = "id11175534_hor";
$password = "azerty";
$dbname = "id11175534_newbase";
// global $conn
$conn = new mysqli($servername, $username, $password);
$conn->select_db($dbname);

$delete = "DELETE FROM eleves WHERE id = 3";
$conn->query($delete);
echo $conn->error;
*/

function supprimer ($id){

    $servername = "localhost";
    $username = "id11175534_hor";
    $password = "azerty";
    $dbname = "id11175534_newbase";
// global $conn
    $conn = new mysqli($servername, $username, $password);
    $conn->select_db($dbname);

    $delete = "DELETE FROM `eleves` WHERE 'eleves'.id = '$id'";
    $conn->query($delete);
    echo $conn->error;

}
supprimer('94');

