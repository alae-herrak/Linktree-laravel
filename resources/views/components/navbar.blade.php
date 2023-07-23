<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/notes">
            <i class="fa-solid fa-link"></i>
            Linktree
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item d-flex align-items-center">
                    <i class="fa-solid fa-house"></i>
                    <a class="nav-link" aria-current="page" href="/notes">Home</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <i class="fa-solid fa-pen-nib"></i>
                    <a class="nav-link" href="/notes/create">New note</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="/profile">
                                <i class="fa-solid fa-gear"></i>
                                Manage profile
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form class="dropdown-item d-flex align-items-center gap-1" action="/logout" method="post">
                                @csrf
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <button class="btn border-0 p-0" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
