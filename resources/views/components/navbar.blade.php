<nav class="navbar navbar-expand-xxl  navbar-dark shadow-5 p-3">
  <div class="container-fluid">
    <img class="Logo mx-1" src="\storage\img\prestoverde.png" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 py-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link active rounded-3 border-success" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active border border-success rounded-3" aria-current="page" href="{{route('announcements.index')}}">{{__('ui.tuttiGliAnnunci')}}</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active rounded-3 border-success" id="categoriesDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__('ui.categorie')}}
          </a>
          <ul class="dropdown-menu bg-dark active border border-success rounded-3" aria-labelledby="categoriesDropdown">
            @foreach ($categories as $category)
            <li><a class="dropdown-item text-light" href="{{route('categoryShow', compact('category'))}}">{{($category->name)}}</a></li>
            @endforeach
            {{-- <li><a class="dropdown-item text-light rounded-3" href="#">Action</a></li>
            <li><a class="dropdown-item text-light rounded-3" href="#">Another action</a></li>
            <li><hr class="dropdown-divider text-light"></li>
            <li><a class="dropdown-item text-light rounded-3" href="#">Something else here</a></li> --}}
          </ul>
        </li>
        <form action="{{route('announcements.search')}}" method="GET" class="d-flex mx-5 SearchNav rounded-3" role="search">
          <input class="form-control me-2 rounded-3" type="search" name="searched" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success button rounded-3" type="submit">{{__('ui.cerca')}}</button>
        </form>
        @guest
        <li class="nav-item">
          <a class="nav-link active border border-success rounded-3" href="{{route('register')}}">{{__('ui.registrati')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active border border-success rounded-3" href="{{route('login')}}">{{__('ui.accedi')}}</a>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active rounded-3 border-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__('ui.benvenuto')}} {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu bg-dark active border border-success rounded-3">
            <li><a class="dropdown-item text-light" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
              @csrf
            </form>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active rounded-3 border border-success" href="{{route('announcements.create')}}">{{__('ui.nuovoAnnuncio')}}</a>
        </li>
        @if (Auth::user()->is_revisor)
        <li class="nav-item">
          <a class="nav-link rounded-3 zona_revisione pe-4 active rounded-3 border-success" aria-current="page" href="{{route('revisor.index')}}">{{__('ui.zonaRevisioni')}}: </a>
        </li>


        <li class="nav-item">
          <span class="nav-link active z_revisione">{{App\Models\Announcement::toBeRevisionedCount()}}</span>
        </li>
        @endif
        @endguest

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active rounded-3 border-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__('ui.lingua')}}
          </a>
          <ul class="dropdown-menu bg-dark">
            <div class="d-flex justify-content-center bg-dark">
              <li class="nav-item"><x-_locale lang='it'/></li>
              <li class="nav-item"><x-_locale lang='en'/></li>
              <li class="nav-item"><x-_locale lang='es'/></li>
            </div>
          </ul>
        </li>
      </ul>

    <img class="Logo mx-1" src="\storage\img\prestoverde.png" alt="">
    </div>
  </div>
</nav>
