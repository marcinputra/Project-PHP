<?php include('site/header.php'); ?>

<header>
    <img src="img/img001.jpg" alt="img001">
    <img src="img/img002.jpg" alt="img002">
    <img src="img/img003.jpg" alt="img003">
    <h1>Lorem, ipsum dolor.</h1>
    <h1>Lorem ipsum dolor sit.</h1>
    <h1>Lorem ipsum dolor sit amet.</h1>
</header>

<!-- <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/1600/400?grayscale&random=2" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://picsum.photos/1600/400?grayscale&random=1" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1600/400?grayscale&random=3" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div> -->
<!-- komentarz -->

<div class="container">
    <div class="row">
        <div class="col text-center box-margin">
            <h1>Oferta kursów</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md box-margin">
            <div class="card">
                <img src="https://picsum.photos/300/200?random=3" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Podstwa HTML</h5>
                    <p class="card-text">Naucz się języka HTML od podstaw. Kurs dla osób początkujących. Dzięki naszym kursom zdobędziesz lepszą pracę.</p>
                    <a href="kurs.php" class="btn btn-primary">zapisz się na kurs</a>
                </div>
            </div>

        </div>
        <div class="col-md box-margin">
            <div class="card">
                <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Podstawy CSS</h5>
                    <p class="card-text">Naucz się upiększać strony dzięki stylom CSS. Kurs dla osób początkujących. Dzięki naszym kursom zdobędziesz lepszą pracę.</p>
                    <a href="kurs.php" class="btn btn-primary">zapisz się na kurs</a>
                </div>
            </div>
        </div>
        <div class="col-md box-margin">
            <div class="card">
                <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Podstawy JavaScript</h5>
                    <p class="card-text">Naucz się JavaScript od podstaw. Kurs dla osób początkujących. Dzięki naszym kursom zdobędziesz lepszą pracę.</p>
                    <a href="kurs.php" class="btn btn-primary">zapisz się na kurs</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-2 box-margin">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Zarejestruj się</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Jeśli ne masz konta załóż je...</h6>
                    <p class="card-text">Utwórz konto, aby móc korzystać ze wszystkich informacji zawartych na stronie Internetowej.</p>
                    <a href="signup.php" class="card-link">Zarejestruj się</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 box-margin">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Zaloguj</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Zaloguj się do strony internetowej</h6>
                    <p class="card-text">Kiedy zalogujesz się do strony, będziesz miał dostęp do wszystkich infrmacji na stronie Internetowej.</p>
                    <a href="login.php" class="card-link">Zaloguj się</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">O nas</h1>
                    <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                    <a class="btn btn-primary btn-lg" href="kontakt.php">Napisz do nas</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    The current link item
                </a>
                <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
            </div>
        </div>
        <div class="col">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    The current link item
                </a>
                <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
            </div>
        </div>
        <div class="col">

        </div>
    </div>
</div>
<?php include('site/footer.php'); ?>