<?php
echo AppBarWidget();
function AppBarWidget()
{
    $isLogged = true;

    if (!isset($_SESSION['idUtente']) && !isset($_SESSION['tipo'])) 
    {
        $isLogged = false;
    }
    $code =
        <<<HTML
                                                                                    <div class="wrap">
                                                                                            <div class="wrap_float">
                                                                                                <div class="left">
                                                                                                    <a href="index.php" class="logo">
                                                                                                        <div style="height: 110px; width: 110px;">
                                                                                                            <img src="img/favicons/favicon-32x32.png" style="height: 100%; width: 100%; object-fit: fill;" alt="" >
                                                                                                        </div>
                                                                                                    </a>
                                                                                                    <div class="menu" id="menu">
                                                                                                        <div class="scroll">
                                                                                                            <ul id="menu-ul">
                                                                                                                <li>
                                                                                                                    <a href="index.php"><span>Home</span></a>
                                                                                                                </li>
                                                                                                                <li class="dropdown_li">
                                                                                                                    <a href="#"><span>Servizi</span></a>
                                                                                                                    <ul class="dropdown_ul">
                                                                                                                        <li><a href="services.php">Tutti i Servizi</a></li>
                                                                                                                        <li><a href="risalita.php">Risalita</a></li>
                                                                                                                        <li><a href="discesa.php">Discesa</a></li>
                                                                                                                    </ul>
                                                                                                                </li>
                                                                                                                <li class="dropdown_li">
                                                                                                                    <a href="#blog_section" class="scroll_down pulse js-anchor"><span>Webcams</span></a>
                                                                                                                </li>
                                                                                                                <li class="dropdown_li">
                                                                                                                    <a href="#"><span>Pagine</span></a>
                                                                                                                    <ul class="dropdown_ul">
                                                                                                                        <li><a href="schedule.php">Schedulazione</a></li>
                                                                                                                        <li><a href="sitemap.php">Mappa del sito</a></li>
                                                                                                                        <li><a href="404.php">404 page</a></li>
                                                                                                                        <li><a href="search-results.php">Risultati della ricerca</a></li>
                                                                                                                        <li><a href="search-no-results.php">Nessun risultato per la ricerca</a></li>
                                                                                                                    </ul>
                                                                                                                </li>
                                                                                                                <li><a href="contacts.php"><span>Contatti</span></a></li>
                                                                                                            </ul>
                                                                                                            <div class="menu_bottom">
                                                                                                                <div class="tel"><a href="tel:+393466037660">+39 3466037660</a></div>
                                                                                                                <div class="socials">
                                                                                                                    <a href="#" class="linked-in"></a>
                                                                                                                    <a href="#" class="twitter"></a>
                                                                                                                    <a href="#" class="instagram"></a>
                                                                                                                </div>
                                                                                HTML;

                                                                                if ($isLogged) {
                                                                                    $code = $code .
                                                                                        <<<HTML
                                                                                        <a href="price.php" class="btn">ESCI</a>
                                                                                    </div>
                                                                                    <div class="close" id="menu-close"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="overlay" id="overlay"></div>
                                                                        </div>
                                                                        <div class="right">
                                                                            <div class="tel"><a href="tel:+393466037660">+39 3466037660</a></div>
                                                                            <a href="price.php" class="btn">ESCI</a>
                                                                        </div>
                                                                        <div class="menu_btn" id="menu_btn">
                                                                            <span></span>
                                                                            <span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                        HTML;
                                    }

                                    else
                                    {
                                        $code = $code .
                                            <<<HTML
                                                                    <a href="register.php" class="btn">REGISTRATI</a>
                                                                    <a href="login.php" class="btn">ACCEDI</a>
                                                                                    </div>
                                                                                    <div class="close" id="menu-close"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="overlay" id="overlay"></div>
                                                                        </div>
                                                                        <div class="right">
                                                                            <div class="tel"><a href="tel:+393466037660">+39 3466037660</a></div>
                                                                            <a href="register.php" class="btn">REGISTRATI</a>
                                                                        </div>
                                                                        <div class="menu_btn" id="menu_btn">
                                                                            <span></span>
                                                                            <span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                        HTML;
    }
    return $code;
}