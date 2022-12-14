<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/Contactstyle.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <title>ContactUs</title>
</head>

<body>
    <main>
        <section class="navbar">
            <ul>
                <li><a href="../../index.php">Home</a></li>

                <li><a href="about.php">About</a></li>
                <li><img src="../../assets/image/logo.png" alt="logo" class="logo"></li>
                <li><a href="Courses.php">Courses</a></li>
                <li> <a href="ContactUs.php">Contact Us</a></li>
                <li><a href="View/php/login.php"><span class="lnr lnr-user" style="color: white;"></a></span></li>
            </ul>
        </section>
        <section>

            <div class="Events_title">
                <h2> Contact us</h2>
            </div>
            <form id="Contactform" action="#" method="post" name="form1" onsubmit="required()">
                <label for="text">Full name</label>
                <input type="text" name="name">
                <label for="email">Email</label>
                <input type="email" name="email">
                <label for="text">Message</label>
                <textarea name="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" name="submit" value="Send" class="submit"  >
            </form>

        </section>
        <section class="FindUS">
            <div class="Events_title">
                <h2> find us also</h2>
            </div>
            <div class="cart">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3371.376014448!2d-9.270015685322008!3d32.32861371402113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac2179d3de065f%3A0x43a80729afc8aed0!2sFacult%C3%A9%20Polydisciplinaire%20de%20Safi!5e0!3m2!1sfr!2sma!4v1671320155613!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="infos">
                <h3>Address</h3>
                <p>Facult?? Polydisciplinaire de Safi, BP 100, Safi 24000, Maroc</p>
                <h3>Phone</h3>
                <p>+212 5 28 28 28 28</p>
                <h3>Email</h3>
                <p>
            </div>
        </section>

        <section class="footer">
        <?php include 'footer.php'; ?>
        </section>
    </main>
</body>
<script src="../js/main.js" type="module"></script>

</html>