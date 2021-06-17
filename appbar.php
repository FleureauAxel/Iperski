<?php

function AppBarWidget()
{
    $isLogged = true;

    if (!isset($_SESSION['idUtente']) && !isset($_SESSION['tipo'])) {
        $isLogged = false;
    }
    $code =
        <<<HTML
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="./images/delivery-truck.png" alt="Logo" width="30" height="30" class="d-inline-block align-top" >
                FastDelivery
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./area-personale.php">Traccia pacco</a>
                    </li>
                </ul>
                <!-- </div>
            </div>
         </nav> -->
    HTML;

    if ($isLogged) {
        $code = $code .
            <<<HTML
                <form class="d-flex" action="logout.php">
                    <button class="btn btn-inline-success" type="submit" style="color: red;">Logout</button>
                </form>
                </div>
            </div>
        </nav>
        HTML;
    }
    else
    {
        $code = $code .
            <<<HTML
                <form class="d-flex" action="register.php">
                    <button class="btn btn-inline-success" type="submit" style="color: orange;" >registrazione</button>
                </form>
                </div>
            </div>
        </nav>
        HTML;
    }
    return $code;
}

