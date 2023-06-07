<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-fondo">
    <div class="container-fluid p-0">
        <i class='bx bx-menu text-white'></i>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex justify-content-end  collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <span class="nav-link active text-white fw-bold" aria-current="page" href="#">UF: <span class="text-white-50">35956.37</span></span>
                </li>
                <li class="nav-item">
                    <span class="nav-link active text-white fw-bold" aria-current="page" href="#">Dolar: <span class="text-white-50">820</span></span>
                </li>
                <li class="nav-item">
                    <span class="nav-link active text-white fw-bold" aria-current="page" href="#">Ventas Mes: <span class="text-white-50">8,54% <span class="text-success"><i class="fas fa-arrow-up"></i></span></span></span>
                </li>
            </ul>
            <div class="dropdown float-end">
                <button class="btn btn-link dropdown-toggle mt-3 btn-perfil" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-2 text-white fw-bold">Bienvenido {user}</span> <img src="../assets/img/user.png"
                        width="45px" height="45px">
                </button>

                <ul class="dropdown-menu mt-4 perfil" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{ url('user-profile') }}"><i
                                class="fas fa-user me-3 "></i>Perfil</a></li>
                    <li><a class="dropdown-item" href="{{ url('/logout') }}"><i
                                class="fas fa-sign-out-alt me-3 "></i>Salir</a></li>

                </ul>
            </div>

        </div>
    </div>
</nav>
<!--End Navbar -->

<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
</script>
