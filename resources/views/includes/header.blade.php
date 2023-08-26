<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fs-3 @if (request()->routeIs('home')) active @endif"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-3 @if (request()->routeIs('comics*')) active @endif"
                        href="{{ route('comics.index') }}">Comics</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
</header>
