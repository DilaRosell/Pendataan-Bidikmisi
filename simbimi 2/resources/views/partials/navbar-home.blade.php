    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}">SIMBIMI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" >
              <li class="nav-item">
                <a class="nav-link {{ ($title === 'Home')? 'active' : '' }}" href="{{ route('home') }}">Home <i class="bi bi-house-fill"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === 'About')? 'active' : '' }}" href="{{ route('about') }}">About <i class="bi bi-exclamation-octagon-fill"></i></a>
              </li>              
              <li class="nav-item">
                <a class="nav-link {{ ($title === 'Register')? 'active' : '' }}" href="{{ route('registermhs') }}">Register <i class="bi bi-person-square"></i></a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ ($title === 'Loginmhs')? 'active' : '' }}" href="{{ route('mhslogin') }}">Login <i class="bi-box-arrow-in-right"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    