<header>
    <nav id="sidebarMenu" class=" d-lg-block sidebar collapse bg-sidebar">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-5">
                <a class="nav-link hidden-arrow d-flex align-items-center mb-admin" href="#"
                    id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                    <img src="/image/user.png" class="rounded-circle me-4" height="50" alt="Avatar"
                        loading="lazy" />

                    <span>
                        <a href="/view-profile" class="text-decor2">
                            <div class="mg-prof">
                                <h6 class="text-center text-dark">{{ auth()->user()->nameuser }}</h6>
                                <p class="fw-bold cf text-center">Admin</p>
                            </div>
                        </a>
                    </span>
                </a>

                <div class=" py-2 ripple fw-bold mb-4 ms-4" style="text-decoration:none" aria-current="true">
                    <i class="bi bi-speedometer2 me-4"></i><span>Dashboard</span>
                </div>
                
                <a href="/admin-view-store"
                    class="list-group-item-action py-2 ripple mb-4 ms-3 {{ request()->is('admin-view-store') ? 'active' : '' }}"
                    style="text-decoration:none">
                    <i class="bi bi-shop me-4 ps-2"></i><span>Store</span>
                </a>

                <a href="/admin-view-product"
                    class=" list-group-item-action py-2 ripple mb-3 ms-3  {{ request()->is('admin-view-product') ? 'active' : '' }}"
                    style="text-decoration:none"><i class="bi bi-handbag me-4 ps-2"></i><span>
                        Products</span>
                </a>

                <a href="/admin-category"
                    class=" list-group-item-action py-2 ripple mb-3 ms-3 {{ request()->is('admin-category') ? 'active' : '' }}"
                    style="text-decoration:none"><i class="bi bi-columns-gap me-4 ps-2"></i><span>Categories</span>
                </a>

                <div class="mt-4">
                    <form>
                        @csrf
                        <a href="{{ route('logout') }}" type="submit"
                            class="list-group-item-action py-2 ripple mb-4 ms-3"><i class="bi bi-box-arrow-right me-4"
                                style="text-decoration:none"></i><span>Logout</span>
                        </a>
                    </form>
                </div>

            </div>
        </div>
    </nav>

    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light fixed-top  bg-logosidebar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand ms-4" href="#">
                <h1>TOKOLÉ</h1>
                <hr class="margin-logo">
            </a>
        </div>
    </nav>

    <hr class="margin-hr">
</header>

<main style="margin-bottom: 90px;">
    <div class="container pt-4"></div>
</main>
