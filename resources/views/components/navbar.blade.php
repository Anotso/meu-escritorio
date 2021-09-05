<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('index') }}">{{ $navbar['soon']}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            @foreach ($navbar['pages'] as $key => $page)
                <li class="nav-item">
                <a class="nav-link" href="{{ $page }}">{{$key}}</a>
                </li>
            @endforeach
        </ul>
    <a class="btn btn-success my-2 my-sm-0">Login</a>
    </div>
  </nav>
