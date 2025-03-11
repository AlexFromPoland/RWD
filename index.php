<?php
session_start();

// Sprawdzenie, czy użytkownik jest zalogowany
if (isset($_SESSION['user_id'])) {
    // Użytkownik jest zalogowany, więc przekierowujemy go na stronę główną
    header("Location: main-site.php");
    exit;
} else {
    // Użytkownik nie jest zalogowany, przekierowujemy go na stronę logowania
    header("Location: login.php");
    exit;
}
?>
