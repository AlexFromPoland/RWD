<?php
// Rozpoczynamy sesję, aby uzyskać dostęp do danych użytkownika
session_start();
include 'check_session.php'; // Sprawdzamy sesję użytkownika, czy jest zalogowany

// Jeśli sesja jest aktywna, przypisujemy dane użytkownika
$username = $_SESSION['username'];
$avatar = $_SESSION['avatar'];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Główna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <!-- Header -->
    <?php include 'includes/header-main.php'; ?>

    <!-- Main Content -->

    <?php include 'includes/main-content.php'; ?>
    <!-- <main class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12">
                <h1>Witaj, <?php echo $username; ?>!</h1>
                <p>To jest strona główna, na której możesz zobaczyć dane związane z twoim kontem.</p>
            </div>
        </div>
    </main> -->



    <!-- Footer -->
    <?php include 'includes/footer-main.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
