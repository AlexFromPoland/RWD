<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Zapytanie do bazy danych
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Sprawdzamy hasło
        if (password_verify($password, $user['password'])) {
            // Hasło poprawne, zapisujemy dane w sesji
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['avatar'] = $user['avatar'];
            
            header("Location: main-site.php");
        } else {
            echo "Nieprawidłowe hasło.";
        }
    } else {
        echo "Nieprawidłowa nazwa użytkownika.";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header-login.php'; ?>

    <main class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
        <form method="POST" class="w-50">
            <h2>Logowanie</h2>
            <div class="mb-3">
                <label for="username" class="form-label">Nazwa użytkownika</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Hasło</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            
            <!-- Przycisk logowania oraz link do rejestracji obok siebie -->
            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary">Zaloguj</button>
                <p class="mb-0 ms-3">Nie masz konta? <a href="register.php">Zarejestruj się</a></p>
            </div>
        </form>
    </main>

    <?php include 'includes/footer-login.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
