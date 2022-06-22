<template>
    <main>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LARAVEL+VUEJS</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    style="justify-content: space-between"
                    class="collapse navbar-collapse"
                    id="navbarCollapse"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <router-link
                                to="/"
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                                >Home</router-link
                            >
                        </li>
                        <li class="nav-item">
                            <router-link to="/products" class="nav-link">Product</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/contact" class="nav-link">Contact</router-link>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Search"
                            aria-label="Search"
                        />
                        <button class="btn btn-outline-success" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <div>
            <router-view></router-view>
        </div>
    </main>
</template>
