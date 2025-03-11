<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="main-site.php">Zajęcia projektowe </a>

            <!-- Dropdown Menu, które pojawi się po kliknięciu -->
            <div class="dropdown ms-3">
                <button class="btn btn-link text-white dropdown-toggle" type="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Opcje
                </button>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Tekst 1</a></li>
                    <li><a class="dropdown-item" href="#">Tekst 2</a></li>
                    <li><a class="dropdown-item" href="#">Tekst 3</a></li>
                </ul>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- User Info (Podkreślony i pogrubiony tekst użytkownika) -->
                    <li class="nav-item d-flex align-items-center">
                        
                        <span class="ms-2 text-white fw-bold ">Zalogowany :</span>
                        <span class="ms-2 text-white fw-bold text-decoration-underline"><?php echo $username; ?></span>
                        <img  class="ms-2 rounded mx-auto d-block" src="<?php echo $avatar; ?>" alt="Avatar" style="width: 40px; height: 40px;">
                    </li>

                    <!-- Wyloguj Button (Większa przestrzeń między użytkownikiem a przyciskiem) -->
                    <li class="nav-item ms-5"> <!-- ms-4 doda przestrzeń między nazwą użytkownika a przyciskiem -->
                        <a class="nav-link btn btn-danger text-white" href="logout.php" style="transition: background-color 0.3s ease;">
                            Wyloguj
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
