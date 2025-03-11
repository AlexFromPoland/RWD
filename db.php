<?php
$servername = "localhost"; // lub inny host bazy danych
$username = "root"; // użytkownik bazy danych
$password = ""; // hasło bazy danych
$dbname = "my_website"; // nazwa bazy danych

// Połączenie z bazą danych
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Połączenie z bazą danych nie powiodło się: " . $conn->connect_error);
}
?>
