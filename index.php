<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>acceuil</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light text-light nav-acceuil">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Saint Vincnent BTS 1</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Lien 1
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item text-light" href="#">Action</a></li>
                        <li><a class="dropdown-itemtext-light" href="#">Another action</a></li>
                        <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Lien 2
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item text-light" href="#">Action</a></li>
                        <li><a class="dropdown-item text-light" href="#">Another action</a></li>
                        <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Lien 3
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item text-light" href="#">Action</a></li>
                        <li><a class="dropdown-item text-light" href="#">Another action</a></li>
                        <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light " href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Lien 4
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item text-light" href="#">Action</a></li>
                        <li><a class="dropdown-item text-light" href="#">Another action</a></li>
                        <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
                    </ul>
                </li>
                <button class="btnPink text-light">Se connecter</button>
            </ul>
        </div>
    </div>
</nav>
<div class="acceuil">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-5 description">
                <h2>
                    Lorem ipsum dolor sit amet
                </h2>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem
                    aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo
                </p>
                <button class="btnPink">Bouton CTA</button>
            </div>
            <div class="col-5">
                <img src="./images/step-1.png">
            </div>
        </div>
    </div>
</div>
<div class="blocInfo">
    <div class="info">
        <img src="./images/i1.png">
        <h5>Suits Your Style</h5>
        <p>Dragon sed ut perspiciatis une omnis iste error sot voluptatem accusatiom doloremque laudantium, totam
            aperiam eaque Arya</p>
    </div>
    <div class="info">
        <img src="./images/i2.png">
        <h5>Ut posuere molestie</h5>
        <p>Duis convallis convallis tellus nterdum. Non diam phasellus vestibulum lorem sed risus ultricies Tyrion.
            Enim
            blandit volutpat</p>
    </div>
    <div class="info">
        <img src="./images/i3.png">
        <h5>Vestibulum ut erat consectetur</h5>
        <p>Eunuch sed blandit libero volutpat sed cras. Cersei quis imperdiet tincidunt unuch pulvinar sapien.
            Habitasse
            platea Davos vestibulum.</p>
    </div>
</div>

<div class="info2">
    <div>
        <h4>Aenean magna odio</h4>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totem
            rem
            aperiam eaqe ipsa.</p>
    </div>
    <div>
        <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#lien1" role="button" aria-expanded="false"
               aria-controls="multiCollapseExample1">Lien1</a>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#lien2" role="button" aria-expanded="false"
               aria-controls="multiCollapseExample2">Lien2</a>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#lien3" role="button" aria-expanded="false"
               aria-controls="multiCollapseExample2">Lien3</a>
        </p>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="lien1">
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col">
                                <img src="./images/step-1.png">
                            </div>
                            <div class="col">
                                <h4>Praesent vitae velit tristique old alos</h4>
                                <p>Ned ut persopiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque
                                    laudantium totam rem aperiam eaque ipsa</p>
                                <div class="card">
                                    <div class="card-header">
                                        Quote
                                    </div>
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                            <footer class="blockquote-footer">Someone famous in <cite
                                                        title="Source Title">Source
                                                    Title</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="collapse multi-collapse" id="lien2">
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col">
                                    <h4>Praesent vitae velit tristique old alos</h4>
                                    <p>Ned ut persopiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque
                                        laudantium totam rem aperiam eaque ipsa</p>
                                    <div class="card">
                                        <div class="card-header">
                                            Quote
                                        </div>
                                        <div class="card-body">
                                            <blockquote class="blockquote mb-0">
                                                <p>A well-known quote, contained in a blockquote element.</p>
                                                <footer class="blockquote-footer">Someone famous in <cite
                                                            title="Source Title">Source
                                                        Title</cite></footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <img src="./images/step-1.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="collapse multi-collapse" id="lien3">
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col">
                                    <h4>Praesent vitae velit tristique old alos</h4>
                                    <p>Ned ut persopiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque
                                        laudantium totam rem aperiam eaque ipsa</p>
                                    <div class="card">
                                        <div class="card-header">
                                            Quote
                                        </div>
                                        <div class="card-body">
                                            <blockquote class="blockquote mb-0">
                                                <p>A well-known quote, contained in a blockquote element.</p>
                                                <footer class="blockquote-footer">Someone famous in <cite
                                                            title="Source Title">Source
                                                        Title</cite></footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <img src="./images/step-1.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous">
    </script>

</body>
</html>