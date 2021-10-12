    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="/">SIMBIMI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" >
              <li class="nav-item">
                <a class="nav-link {{ ($title === 'Home')? 'active' : '' }}" href="/">Home <i class="bi bi-house-fill"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === 'About')? 'active' : '' }}" href="/about">About <i class="bi bi-exclamation-octagon-fill"></i></a>
              </li>              
              <li class="nav-item">
                <a class="nav-link {{ ($title === 'Contact')? 'active' : '' }}" href="/contact">Contact <i class="bi bi-person-square"></i></a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item {{ ($title === 'Loginmhs')? 'active' : '' }}" href="/loginmhs">Mahasiswa</a></li>
                  <li><a class="dropdown-item{{ ($title === 'Loginadmin')? 'active' : '' }}" href="/loginadm">Admin</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    