<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container m-nav">
        <a class="navbar-brand me-4" href="/">Tokolé</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                        href="/">Daftar Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('aboutus') ? 'active' : '' }}" aria-current="page"
                        href="/aboutus">About Us</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" style="width:450px;" type="search" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success border-danger" type="submit"><i
                        class="bi bi-search"></i></button>
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="/login">
                        <img src="/image/home.png" alt="logo" height="40" width="40" class="ms-4 me-4">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/login" type="button" class="btn btn-outline-danger">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
