<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<a href="{{ route('products.add') }}" class="btn btn-secondary mb-3">Ajouter un produit</a>

@if (session('error'))
        <div class="modal" tabindex="-1" role="dialog" style="display: block;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Erreur</h5>
                        <button type="button" class="close" onclick="hideModal()">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body bg-danger">
                        <p class="text-light">{{ session('error') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Fonction pour masquer le modal après 10 secondes
            function hideModal() {
                var modal = document.querySelector('.modal');
                modal.style.display = 'none';
            }

            // Masquer automatiquement le modal après 10 secondes
            setTimeout(hideModal, 5000);
        </script>
    @endif

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                {{ auth()->user()->name }}
                <br>
                <small>{{ auth()->user()->level }}</small>
            </span>
            <img class="img-profile rounded-circle"
                src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <a class="dropdown-item" href="{{ route('register')}}">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Ajouter un gerant
            </a>
            <a class="dropdown-item" href="{{ route('gerants.index')}}">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Liste des gerants
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route ('logout') }}" >
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Déconexion
            </a>
        </div>
    </li>

</ul>

</nav>
<!-- End of Topbar -->