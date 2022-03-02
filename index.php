<?php

$conn = mysqli_connect('localhost', 'root', '1234', 'contact_db') or die('connection failed');

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

    if ($insert) {
        $message[] = 'appointment made successfully!';
    } else {
        $message[] = 'appointment failed';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Dentist Website Design </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header fixed-top">

        <div class="container">

            <div class="row align-items-center justify-content-between">

                <a href="#home" class="logo">dental<span>Care.</span></a>

                <nav class="nav">
                    <a href="#home">home</a>
                    <a href="#about">sobre</a>
                    <a href="#services">serviços</a>
                    <a href="#reviews">opinões</a>
                    <a href="#contact">contato</a>
                </nav>

                <a href="#contact" class="link-btn"> marcar consulta</a>

                <div id="menu-btn" class="fas fa-bars"></div>

            </div>

        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="container">

            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3> Vamos Iluminar Seu Sorriso </h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium itaque, quasi aliquam alias tempora voluptatibus.</p>
                    <a href="#contact" class="link-btn">marcar consulta </a>
                </div>
            </div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <span>sobre nós</span>
                    <h3>Verdadeira saúde para sua família</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab provident. Aperiam, officiis!</p>
                    <a href="#contact" class="link-btn"> marcar consulta </a>
                </div>

            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading">Nossos serviços </h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/icon-1.svg" alt="">
                <h3>Especialista em alinhamento</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
            </div>

            <div class="box">
                <img src="images/icon-2.svg" alt="">
                <h3>Odontologia estética</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
            </div>

            <div class="box">
                <img src="images/icon-3.svg" alt="">
                <h3>Especialistas em higiene bucal</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
            </div>

            <div class="box">
                <img src="images/icon-4.svg" alt="">
                <h3>Especialista em canal</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
            </div>

            <div class="box">
                <img src="images/icon-5.svg" alt="">
                <h3>Consultoria odontológica ao vivo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
            </div>

            <div class="box">
                <img src="images/icon-6.svg" alt="">
                <h3>Inspeção da cavidade</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- process section starts  -->

    <section class="process">

        <h1 class="heading">processo de trabalho</h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3> Odontologia estética </h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
            </div>

            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>Dentista pediátrico</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
            </div>

            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3> Implantes dentários</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
            </div>

        </div>

    </section>

    <!-- process section ends -->

    <!-- reviews section starts  -->

    <section class="reviews" id="reviews">

        <h1 class="heading"> Clientes satisfeitos </h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>cliente satisfeito</span>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>cliente satisfeito</span>
            </div>

            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>john deo</h3>
                <span>cliente satisfeito</span>
            </div>

        </div>

    </section>

    <!-- reviews section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> marcar consulta</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<p class="message">' . $message . '</p>';
                }
            }
            ?>
            <span>your name :</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>your email :</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>your number :</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>appointment date :</span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="marcar consulta" name="submit" class="link-btn">
        </form>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>número de telefone</h3>
                <p>+123-456-7890</p>
                <p>+111-222-3333</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>nosso endereço</h3>
                <p>mumbai, india - 400104</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>horário de funcionamento</h3>
                <p>00:07am to 10:00pm</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>endereço de email </h3>
                <p>shaikhanas@gmail.com</p>
                <p>anasbhai@gmail.com</p>
            </div>

        </div>

        <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?>  <span> </span> </div>

    </section>

    <!-- footer section ends -->
    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>