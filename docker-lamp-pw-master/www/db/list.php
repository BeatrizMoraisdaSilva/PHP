<?php
$servername = 'db';
$username = 'root';
$passaword = "1q2w3e4r5t";
$dbname = 'pw_exemple';

$conn = new mysqli($servername, $username, $passaword, $dbname);
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
    
}

$sql = "SELECT * FROM clients";
$result = $conn -> query($sql);

$arrayClients = array();
while($line = $result -> fetch_assoc()){
    array_push($arrayClients, $line);

}

foreach ($arrayClients as $client){
    echo $client['idClient']. ' - ';
    echo $client['name'].' - ';
    echo $client['phone'].' - ';
    echo $client['address'].' - ';
    echo $client['email'].' - ';
    echo '<br>';
}
$coon-> close();


?>