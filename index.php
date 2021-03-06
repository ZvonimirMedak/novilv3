<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Čvarci.net</title>
</head>

<body>
    <header class="mainContainer">
        <section class="infoContainer spaceBetweenXAxis">
            <div>
                <h1 id="mainTitle">Najbolji čvarci na kućnom pragu</h1>
                <div class="optionsContainer">
                    <button class="customButton positionCenter" type="button">
                        <div>
                            <h2 class="family largeText">DOSTAVA</p>
                                <p class="family mediumText">Naruči</p>
                        </div>
                    </button>
                    <button class="customButton positionCenter" type="button">
                        <div>
                            <h2 class="family largeText">PREUZMI</p>
                                <p class="family mediumText">Na čvarkomatu</p>
                        </div>
                    </button>
                </div>
            </div>
            <img src="src/assets/cvarci.jpg" alt="cvarci" loading="lazy" class="cvarciImage" aria-label="slika čvaraka">
        </section>
        <section class="headerContainer spaceBetweenXAxis">
            <img src="src/assets/menuButton.svg" alt="menu" class="menuStyle" aria-label="menu button" />
            <img src="src/assets/logo.svg" alt="logo" class="titleImage" aria-label="čvarci.net logo" />
            <div class="spaceBetweenXAxis">
                <button class="loginButton spaceBetweenXAxis buttonWithoutOutline" type="button">
                    <img src="src/assets/person.svg" alt="login" class="loginIcon" />
                    <p class="headerRightText family">PRIJAVI SE</p>
                </button>
                <img src="src/assets/cart.svg" alt="cart" class="cartIcon" />
            </div>
        </section>
    </header>
    <ul class="deliveryList" aria-label="lista o dostavi i porijeklu">
        <li class="deliveryItem firstItemMargin spaceBetweenXAxis">
            <img src="src/assets/timeEat.svg" alt="delivery time" class="deliveryImage"
                aria-label="slika vremena dostave" />
            <p class="mediumText family">dostavljamo čvarke za manje od 30 minuta</p>
        </li>
        <li class="deliveryItem spaceBetweenXAxis">
            <img src="src/assets/delivery.svg" alt="type of delivery" class="deliveryImage"
                aria-label="slika načina dostavee" />
            <p class="mediumText family">naši šoferi voze tomose</p>
        </li>
        <li class="deliveryItem spaceBetweenXAxis">
            <img src="src/assets/paris.svg" alt="origin of cracklings" class="deliveryImage"
                aria-label="slika porijekla prasaca" />
            <p class="mediumText family">nabavljamo najbolje prasce iz francuske</p>
        </li>
    </ul>




    <section class="centerColumn">
        <div>
        <div class="newCvacriMarginBottom positionCenter">
                <h2 class="h2TitleStyle cvarciTitle newCvacriMarginBottom">
                    Novo u ponudi ! naručite čvarke online
                </h2>
                </div>
            <ul class="restaurantListContainer">
                <li class="instagramItemPadding">
                    <img src="src/assets/domaci_cvarci.png" loading="lazy" alt="Čvarci domaći"
                        class="listImageSize"/>
                    <h3 class="cvarciMarginBottom cvarciNameBoldStyle">
                        Čvarci domaći
                    </h3>
                    <h4 class="cvarciMarginBottom">
                        50,00kn / kg
                    </h4>
                    <div class="positionLeft cvarciMarginBottom">
                        <p class="mediumText family">Količina:</p>
                    <input type="text" class="amountContainer" size=1 value="1" />
                    </div>
                    <button class="addToCartButton positionCenter" type="submit">
                    <p class="largeText family buttonTextColor">Stavi u košaricu</p>
                </button>
                </li>
                <li class="instagramItemPadding">
                    <img src="src/assets/slavonski_cvarci.png" loading="lazy" alt="Čvarci slavonski"
                        class="listImageSize" />
                        <h3 class="cvarciMarginBottom">
                        Čvarci slavonski
                    </h3>
                    <h4 class="cvarciMarginBottom">
                        80,00kn / kg
                    </h4>
                    <div class="positionLeft cvarciMarginBottom">
                        <p class="mediumText family">Količina:</p>
                    <input type="text" class="amountContainer" size=1 value="1" />
                    </div>
                    <button class="addToCartButton positionCenter" type="submit">
                    <p class="largeText family buttonTextColor">Stavi u košaricu</p>
                    </button>
                </li>
                <li class="instagramItemPadding">
                    <img src="src/assets/pileci_cvarci.png" loading="lazy" alt="Čvarci pileći"
                        class="listImageSize cvarciMarginBottom" />
                        <h3 class="cvarciMarginBottom">
                        Čvarci pileći
                    </h3>
                    <h4 class="cvarciMarginBottom">
                        60,00kn / kg
                    </h4>
                    <div class="positionLeft cvarciMarginBottom">
                        <p class="mediumText family">Količina:</p>
                    <input type="text" class="amountContainer" size=1 value="1" />
                    </div>
                    <button class="addToCartButton positionCenter" type="submit">
                    <p class="largeText family buttonTextColor">Stavi u košaricu</p>
                    </button>
                </li>
                <li class="instagramItemPadding">
                    <img src="src/assets/cvarci_divljaci.png" loading="lazy" alt="Čvarci od divljači"
                        class="listImageSize cvarciMarginBottom" />
                        <h3 class="cvarciMarginBottom">
                        Čvarci od divljači
                    </h3>
                    <h4 class="cvarciMarginBottom">
                        100,00 kn / kg
                    </h4>
                    <div class="positionLeft cvarciMarginBottom">
                        <p class="mediumText family">Količina:</p>
                    <input type="text" class="amountContainer" size=1 value="1" />
                    </div>
                    <button class="addToCartButton positionCenter" type="submit">
                    <p class="largeText family buttonTextColor">Stavi u košaricu</p>
                    </button>
                </li>
            </ul>
            <div class="paginationContainer">
                <button class="buttonWithoutOutline">
                    <p class="largeText">Prev</p>
                </button>
                <div class="positionCenter">
                    <div class="paginatedCircle activeCircle">
                        <p>1</p>
                    </div>
                    <p>....</p>
                    <div class="paginatedCircle">
                        <p>584</p>
                    </div>
                </div>

                <button class="buttonWithoutOutline">
                    <p class="largeText">Next</p>
                </button>
            </div>
        </div>
    </section>





    <section class="centerColumn">
        <div>
            <div class="restaurantHeaderContainer spaceBetweenXAxis">
                <h2 class="h2TitleStyle">
                    Naše čvarke možete pronaći
                </h2>
                <button class="seeAllButton buttonWithoutOutline" type="button">
                    <p class="largeText family buttonTextColor">prikaži više</p>
                </button>
            </div>
            <ul class="restaurantListContainer">
                <li class="edgeContainer">
                    <button class="navigationButton buttonWithoutOutline leftNavigation positionCenter" type="button">
                        <img src="src/assets/arrow.svg" alt="arrow left" aria-label="swipe left" />
                    </button>
                    <img src="src/assets/firstRestaurant.jpg" loading="lazy" alt="first restaurant"
                        class="listImageSize" ar />
                </li>
                <li>
                    <img src="src/assets/secondRestaurant.png" loading="lazy" alt="second restaurant"
                        class="listImageSize" />
                </li>
                <li>
                    <img src="src/assets/thirdRestaurant.png" loading="lazy" alt="third restaurant"
                        class="listImageSize" />
                </li>
                <li class="edgeContainer">
                    <button class="navigationButton buttonWithoutOutline rightNavigation positionCenter" type="button">
                        <img src="src/assets/arrow.svg" alt="arrow right" aria-label="swipe right" />
                    </button>
                    <img src="src/assets/fourthRestaurant.png" loading="lazy" alt="fourth restaurant"
                        class="listImageSize" />
                </li>
            </ul>
            <div class="paginationContainer">
                <button class="buttonWithoutOutline">
                    <p class="largeText">Prev</p>
                </button>
                <div class="positionCenter">
                    <div class="paginatedCircle activeCircle">
                        <p>1</p>
                    </div>
                    <p>....</p>
                    <div class="paginatedCircle">
                        <p>584</p>
                    </div>
                </div>

                <button class="buttonWithoutOutline">
                    <p class="largeText">Next</p>
                </button>
            </div>
        </div>
    </section>
    <form class="userInfoContainer positionCenter">
        <div class="innerContainer positionCenter">
            <div class="infoTextPosition">
                <h2 class="h2TitleStyle">
                    Želite biti naš brand partner ?
                    <p class="mediumText family textWidth">
                        Pošaljite nam Vaš broj i kontaktirat ćemo Vas u najkraćem moguću roku
                    </p>
                </h2>
            </div>
            <div class="positionCenter">
                <input type="text" placeholder="Pošaljite Vašu email adresu" class="inputContainer" size=25 value="" />
                <button class="sendButton positionCenter" type="submit">
                    <p class="largeText family buttonTextColor">pošalji</p>
                </button>
            </div>
        </div>
    </form>
    <section class="mapContainer">
        <h2 class="h2TitleStyle mapTextWidth">
            Gdje se nalaze naši čvarkomati ?
        </h2>
        <img src="src/assets/map.jpg" alt="Our location" loading="lazy" class="mapSize" aria-label="slika s lokacijama naših poslovnica" />
    </section>
    <section class="positionCenter infoListContainer">
        <ul class="circleList">
            <li class="centerColumn itemMargin">
                <div class="circle circleSize">
                    <div class="innerCircle circleSize">
                        <p class="largeBoldText family" aria-label="1 unutar kruga">1</p>
                    </div>
                </div>
                <p class="largeBoldText family">klaonica</p>
            </li>
            <li class="centerColumn itemMargin">
                <div class="circle circleSize">
                    <div class="innerCircle circleSize">
                        <p class="largeBoldText family" aria-label="6 unutar kruga">6</p>
                    </div>
                </div>
                <p class="largeBoldText family">vrsta čvaraka</p>
            </li>
            <li class="centerColumn itemMargin">
                <div class="circle circleSize">
                    <div class="innerCircle circleSize">
                        <p class="largeBoldText family" aria-label="11 unutar kruga">11</p>
                    </div>
                </div>
                <p class="largeBoldText family">restorana</p>
            </li>
            <li class="centerColumn itemMargin">
                <div class="circle circleSize">
                    <div class="innerCircle circleSize">
                        <p class="largeBoldText family" aria-label="1 unutar kruga">1</p>
                    </div>
                </div>
                <p class="largeBoldText family">najbolja cijena</p>
            </li>
        </ul>
    </section>
    <section class="centerColumn">
        <div>
            <div class="instagramTitleContainer">
                <h2 class="h2TitleStyle">
                    #čvarcinet
                </h2>
                <b class="largeBoldText instagramTextPosition">na instagramu</b>
            </div>
            <ul class="positionCenter instagramContainer restaurantListContainer">
                <li class="instagramItemPadding">
                    <img src="src/assets/instagramFirst.jpg" alt="first instagram image" loading="lazy"
                        class="listImageSize" />
                </li>
                <li class="instagramItemPadding">
                    <img src="src/assets/instagramSecond.png" alt="second instagram image" loading="lazy"
                        class="listImageSize" />
                </li>
                <li class="instagramItemPadding">
                    <img src="src/assets/instagramThird.png" alt="third instagram image" loading="lazy"
                        class="listImageSize" />
                </li>
                <li class="instagramItemPadding">
                    <img src="src/assets/instagramFourth.png" alt="fourth instagram image" loading="lazy"
                        class="listImageSize" />
                </li>
            </ul>
        </div>
    </section>


    <footer class="footerContainer">
        <div class="footerTopContainer">
            <div class="logoBorder">
                <img src="src/assets/logo.svg" alt="logo" class="titleImage" aria-label="cvarci.net logo"/>
            </div>
            <ul class="contactList spaceBetweenXAxis">
                <li class="contactItem largeBoldText family">
                    <a class="anchorColor" href="">O nama</a>
                </li>
                <li class="contactItem largeBoldText family">
                    <a class="anchorColor" href="">Cijenik</a>
                </li>    
                <li class="contactItem largeBoldText family">
                    <a class="anchorColor" href="">Kontakt</a>
                </li>
            </ul>
        </div>
        <div class="footerBottomContainer spaceBetweenXAxis">
            <ul class="footerIconList">
                <li class="iconItem">
                    <img src="src/assets/insta.svg" alt="insta logo" class="footerIconSize"/>
                </li>
                <li class="iconItem">
                    <img src="src/assets/twitter.svg" alt="twitter logo" class="footerIconSize"/>
                </li>
                <li class="iconItem">
                    <img src="src/assets/fb.svg" alt="fb logo" class="footerIconSize"/>
                </li>
            </ul>
            <ul class="securityContainer">
                <li class="securityItem family mediumText">
                    <a class="securityColor" href="">Polica privatnosti</a>
                </li>
                <li class="securityItem family mediumText">
                   <a class="securityColor" href=""> Uvjeti korištenja</a>
                </li>
                <li class="securityItem family mediumText">
                    <a class="securityColor" href="">© 2021 čvarci.net</a>
                </li>
            </ul>
        </div>
    </footer>
</body>

</html>