<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('index') }}">BLOG Naïto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @if(Session::has("user"))
                <li class="nav-item">

                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Session::get("user")->firstname}}
                        </a>
                              
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('posts.create') }}">Nouveau Poste</a>
                            <a class="dropdown-item" href="{{ route('posts.index') }}">Mes postes</a>
                        </div>
                        
                    </div>

                </li>
                <li class="nav-item">
                    <a id="logout" class="nav-link" href="{{ route('users.logout') }}">@lang('Déconnexion')</a>
                    <form id="logout-form" action="{{ route('users.logout') }}" method="POST" class="hide">
                        {{ csrf_field() }}
                    </form>
                </li>
            @else
                
                <li class="nav-item"><a class="nav-link" href="{{ route('users.login') }}">@lang('Connexion')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('users.register') }}">@lang('Inscription')</a></li>
            @endif
                        
        </ul>
    </div>
</nav>