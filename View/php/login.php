<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    header("location:module.php");
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $fichier = fopen("./csv/dbuser.csv", "r");
    while ($usr = fgetcsv($fichier, 0, ";")) {
        if ($usr[4] == $_POST['mail'] and $usr[6] == $_POST['password']) {
            $_SESSION['mail'] = $usr[4];
            $_SESSION['password'] = $usr[6];
            fclose($fichier);
            header('location:recu.php');
        }
    }
    echo "Votre login et / ou mot de passe est incorrect !";
    fclose($fichier);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="../css/Contactstyle.css"> -->
    <link rel="stylesheet" href="../css/logincss.css">
    <title>ContactUs</title>
</head>

<body>
    <main>
        <section class="navbar">
            <ul>
                <li><a href="../../home.php">Home</a></li>

                <li><a href="about.php">About</a></li>
                <li><img src="../image/logo.png" alt="logo" class="logo"></li>
                <li><a href="Courses.php">Courses</a></li>
                <li> <a href="ContactUs.php">Contact Us</a></li>
                <li><img src="../image/Search_icon.png" alt="logo"></li>
            </ul>
        </section>
        <section id="feature" class="feature">
            <form action="../../index.php" method="POST" class="form-container">
                <input type="email" name="email" placeholder="email"><br>
                <input type="password" name="password" placeholder="password"><br>
                <input type="submit" name="login" value="login" class="submit">
            </form>
        </section>
        <section>
            <?php include_once "footer.php"; ?>
        </section>

    </main>

    <body>

</html>