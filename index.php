<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="libs/gsap/gsap.min.js" defer></script>
    <script src="libs/gsap/ScrollTrigger.min.js" defer></script>
    <script src="libs/gsap/ScrollSmoother.min.js" defer></script>

    <link rel="stylesheet" href="css/main.css">
    <script src="js/app.js" defer></script>


</head>
<body>

<div class="wrapper">
    <div class="content">

        <header class="hero-section">
            <img data-speed=".6" src="img/hero.png" class="hero" alt="Alt">
            <div class="conteiner">
                <div data-speed=".75" class="main-header">
                    <h1 class="main-title">creative scroll</h1>
                </div>
            </div>
        </header>

        <div class="portfolio">
            <div class="conteiner">
                <main class="gallary">
                    <div data-speed=".9" class="galary__left">
                        <img class="gallary__item" src="img/work/1.jpg" alt="Alt">

                        <div class="text-block gallary__item">
                            <h2 class="text-block__h">Creative floating scroll with amazing parallax effect</h2>
                            <p class="text-block__p">Lorem ipsum sit amet, consectetur adipising elit, sed do ipsum sit amet amount scrolling </p>
                        </div>

                        <img class="gallary__item" src="img/work/2.jpg" alt="Alt">

                        <div class="text-block gallary__item">
                            <h2 class="text-block__h">Creative floating scroll with amazing parallax effect</h2>
                            <p class="text-block__p">Lorem ipsum sit amet, consectetur adipising elit, sed do ipsum sit amet amount scrolling </p>
                        </div>

                        <img class="gallary__item" src="img/work/6.jpg" alt="Alt">

                    </div>
                    <div data-speed="1.1" class="galary__right">
                        <div class="text-block gallary__item">
                            <h2 class="text-block__h">Creative floating scroll with amazing parallax effect</h2>
                            <p class="text-block__p">Lorem ipsum sit amet, consectetur adipising elit, sed do ipsum sit amet amount scrolling </p>
                        </div>

                        <img class="gallary__item" src="img/work/4.jpg" alt="Alt">

                        <div class="text-block gallary__item">
                            <h2 class="text-block__h">Creative floating scroll with amazing parallax effect</h2>
                            <p class="text-block__p">Lorem ipsum sit amet, consectetur adipising elit, sed do ipsum sit amet amount scrolling </p>
                        </div>

                        <img class="gallary__item" src="img/work/5.jpg" alt="Alt">

                        <div class="text-block gallary__item">
                            <h2 class="text-block__h">Creative floating scroll with amazing parallax effect</h2>
                            <p class="text-block__p">Lorem ipsum sit amet, consectetur adipising elit, sed do ipsum sit amet amount scrolling </p>
                        </div>


                    </div>
                </main>
            </div>
        </div>

    </div>
</div>

</body>
</html>
