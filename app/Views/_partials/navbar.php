<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand pl-2" id='home' href="#">
        <img class="icon-navbar" src="<?=base_url()?>/public/img/icons/house-solid.png" alt="Inicio">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" adddata-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto pr-2">
            <a id='books' class="nav-link active" href="#">
                <img class="icon-navbar" src="<?=base_url()?>/public/img/icons/books.png" alt="Libros">
                <span class="sr-only">(current)</span>
            </a>
            <a id='new' class="nav-link" href="#">
                <img class="icon-navbar" src="<?=base_url()?>/public/img/icons/add.png" alt="Nuevo">
            </a>
        </div>
    </div>
</nav>