<?php
require_once 'config.php';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    error_log("Erro de conexão: " . $conn->connect_error);
    die("Erro ao conectar com o banco de dados.");
}

$sql = "SELECT id, nome FROM pessoas";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . htmlspecialchars($row["id"]) . " - Nome: " . htmlspecialchars($row["nome"]) . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

$conn->close();
?>