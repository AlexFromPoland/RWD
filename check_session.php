<?php


// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['user_id'])) {
    // Jeśli nie, przekierowanie na stronę logowania
    header("Location: login.php");
    exit;
}
?>
