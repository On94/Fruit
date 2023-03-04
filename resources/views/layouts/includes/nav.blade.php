<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{route('fruits')}}" class="nav-link {{ Request::routeIs('fruits') ? 'active' : '' }}">Fruits</a></li>
                <li class="nav-item"><a href="{{route('favorite.fruits')}}" class="nav-link {{ Request::routeIs('favorite.fruits') ? 'active' : '' }}">Favorite Fruits</a></li>
            </ul>
        </div>
    </div>
</nav>
