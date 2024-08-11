<?php
$servername = "mysql-2221c92b-danielcalebe719-2b82.l.aivencloud.com"; 
$username = "avnadmin"; 
$password = "AVNS_MRgcH_4ZC0MTrUnxZpv";
$dbname = "flix"; 

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida!";
}

// Fechar a conexão quando terminar
$conn->close();
?>
