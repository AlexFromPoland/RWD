<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $avatar_url=$_POST['avatar'];

    // Sprawdzamy, czy użytkownik już istnieje
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Użytkownik o tej nazwie już istnieje.";
    } else {
        // Haszujemy hasło
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $target_dir = "./storage/";
        if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0) {
            // Określenie ścieżki folderu docelowego
           
            
            // Ścieżka pliku docelowego
            $target_file = $target_dir . basename($username . "_" . $_FILES['avatar']['name']);
            

            $avatar_url = $target_file;
            // Przenosimy plik do folderu
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file)) {
                // Jeśli udało się przenieść plik, wyświetlamy ścieżkę do niego
                
            } else {
                
            }
        } else {
            // Jeśli plik nie został wysłany, generujemy domyślny avatar z DiceBear API
            $template_avatar=file_get_contents("https://api.dicebear.com/9.x/identicon/svg?seed=" . urlencode($username));
            
            $target_file = $target_dir . basename($username . "_avatar.svg");
                echo $target_file;
            
            $target_folder = file_put_contents($target_file,$template_avatar); 
            $avatar_url=$target_file;
            if($target_folder)
            {

            }else
            {

            }
           

        }

        // Dodajemy nowego użytkownika do bazy z avatar
        $sql = "INSERT INTO users (username, password, avatar) VALUES ('$username', '$hashed_password', '$avatar_url')";
        
        if ($conn->query($sql) === TRUE) {
            // Po pomyślnym dodaniu, przekierowanie do logowania
             header("Location: login.php");
        } else {
            echo "Błąd: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header-register.php'; ?>

    <main class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
        <form method="POST" class="w-50" enctype="multipart/form-data">
            <h2>Rejestracja</h2>
            <div class="mb-3">
                <label for="username" class="form-label">Nazwa użytkownika *</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Hasło *</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="avatar" class="form-label">awatar</label>
                <input type="file" class="form-control" id="avatar"  name="avatar" accept="image/png, image/jpeg, image/bmp , image/raw , image/svg , image/gif , image/jpg"  />
            </div>

            
            
            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary">Zarejestruj</button>
                <p class="mb-0 ms-3">Masz już konto? <a href="login.php">Zaloguj się</a></p>
            </div>
        </form>
    </main>

    <?php include 'includes/footer-register.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
