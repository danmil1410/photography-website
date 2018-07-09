<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bartek Ulatowski - fotografia ślubna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css" />

</head>

<body>
    <header class="header">
        <nav class="navbar" id="navbar">
            <a class="navbar__logo" href="index.php">
                <img src="./images/logo.png" alt="logo strony">
            </a>
            <i class="fas fa-bars fa-2x" id="menu"></i>
            <ul class="list">
                <li class="list__item">
                    <a class="list__link" href="#main">Projekty</a>
                </li>
                <li class="list__item">
                    <a class="list__link" href="#footer">Kontakt</a>
                </li>
            </ul>
            <section class="social">
                <a class="social__item social__item--first" href="#"></a>
                <a class="social__item social__item--second" href="#"></a>
            </section>
        </nav>
        <section class="hero">
            <h1 class="hero__title">To jest ten moment
                <br>twojego życia,</h1>
            <h2 class="hero__text">Który musi zostać uwieczniony w odpowiedni sposób
                <br>przez odpowiednią osobę.</h2>
            <div class="hero__buttons">
                <a class="hero__button hero__button--light" href="#main">Zobacz zdjęcia</a>
                <a class="hero__button" id="formButton" href="#navbar">Skontaktuj się</a>
            </div>
        </section>
    </header>
    <main class="main" id="main">
        <form action="./form.php" class="form" id="formBody" method="post">
            <div class="form__title">
                <label>Formularz kontaktowy</label>
                <i class="fas fa-times" id="close"></i>
            </div>
            <div class="form__content">
                <input name="name" type="text" placeholder="Imię i nazwisko" required>
            </div>
            <div class="form__content">
                <input name="email" type="text" placeholder="Adres e-mail" required>
            </div>
            <div class="form__content">
                <textarea form="formBody" name="message" type="text" name="name" placeholder="Wiadomość" required></textarea>
            </div>
            <div class="checkbox">
                <input id="checkbox" class="checkbox__input" name="checkbox-1" type="checkbox" required>
                <label for="checkbox" class="checkbox__label">Przetwarzanie danych osobowych</label>
            </div>
            <div class="form__submit">
                <input type="submit" value="Wyślij wiadomość">
            </div>
        </form>
        <div class="confirm">
            <i class="fas fa-check-circle fa-3x"></i>
            <span>Formularz został wysłany!</span>
        </div>
        <div class="options">
            <span class="options__link options__link--active" href="index.php">Wszystkie</span>
            <span class="options__link" href="#">fotografia</span>
            <span class="options__link" href="#">rydułtowy</span>
            <span class="options__link" href="#">dzieci</span>
            <span class="options__link" href="#">sesja rodzinna</span>
        </div>
        <div class="gallery">
            <?php 
                include("./gallery.php");
            ?>
        </div>
        
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

            <div class="pswp__bg"></div>

            <div class="pswp__scroll-wrap">

                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">

                    <div class="pswp__top-bar">

                        <div class="pswp__counter"></div>

                        <button class="pswp__button pswp__button--close" title="Zamknij (Esc)"></button>

                        <button class="pswp__button pswp__button--share" title="Udostępnij"></button>

                        <button class="pswp__button pswp__button--fs" title="Pełny Ekran"></button>

                        <button class="pswp__button pswp__button--zoom" title="Przybliż/Oddal"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div> 
                    </div>

                    <button class="pswp__button pswp__button--arrow--left" title="Poprzedni (lewa strzałka)">
                    </button>

                    <button class="pswp__button pswp__button--arrow--right" title="Następny (prawa strzałka)">
                    </button>

                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>

                </div>

            </div>

        </div>
    </main>
    <footer class="footer" id="footer">
        <section class="content">
            <div class="icon">
                <a class="icon__item" href="https://www.facebook.com/">
                    <i class="fab fa-facebook-square fa-lg" data-fa-transform="shrink-10 up-.5" data-fa-mask="fas fa-circle" ></i>
                </a>
                <a class="icon__item" href="https://www.instagram.com/">
                    <i class="fab fa-instagram fa-lg" data-fa-transform="shrink-10 up-.5" data-fa-mask="fas fa-circle" ></i>
                </a>
            </div>
            <div class="contact">
                <a class="contact__text" href="#">Rydułtowy, Polska</a>
                <a class="contact__text" href="#">564 337 349</a>
                <a class="contact__text" href="#">testowy.mail@outlook.com</a>
            </div>
            <div class="owner">
                <p class="owner__text">Testowy Test</p>
            </div>
        </section>
        <div class="copyright">
            <p class="copyright__text">Strona stworzona przez Daniela Milkiewicza &copy</p>
        </div>
    </footer>
    <script src="./js/jquery.js"></script>
    <script src="./js/main.js"></script>
    <?php
        if (isset($_GET['code'])) {
            print "<script>$('.confirm').fadeIn(600).delay(2500).fadeOut(600);</script>";
        }
    ?>
</body>

</html>
