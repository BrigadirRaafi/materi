<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styleindex.css">

    <title>E-DISCIPLINE </title>

</head>
<body>
    <header class="navbar py-3 navbar-expand navbar-dark bg-dark" data-aos="fade-down">
        <div class="container-fluid mx-2">
            <navbar class="d-flex">
                <button type="button" class="btn btn-outline-info me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                    </svg>
                </button>
                <a class="navbar navbar-brand text-white ms-4" href="#"><i>E-DISCIPLINE</i></a>
            </navbar>
            <navbar class="d-flex ms-auto">
                <form class="d-flex" role="search">
                    <input class="form-control me-3" type="search" placeholder="Search">
                    <button class="btn btn-primary me-3" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
                
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"><img src="profile.png" class="rounded-circle" alt="Cinque Terre" width="30" height="30"></a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Keluar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </navbar>
        </div>
    </header>

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-7 col-md-7 col-sm-12">
                
                <h3 class="mt-2 p-2">Jurusan</h3>
                    <div class="d-flex mx-2 mb-5" data-aos="fade-right">
                        <div class="d-grid gap-5 col-5">
                            <div class="btn-group">
                                <button type="button" class="p-3 btn btn-jurusan btn-danger btn-lg">PS</button>
                            </div>                       
                            <div class="btn-group">
                                <button type="button" class="p-3 btn btn-jurusan btn-danger btn-lg">TJKT</button>
                            </div>                       
                            <div class="btn-group">
                                <button type="button" class="p-3 btn btn-jurusan btn-danger btn-lg">DKV</button>
                            </div>                      
                            <div class="btn-group">
                                <button type="button" class="p-3 btn btn-jurusan btn-danger btn-lg">ANM</button>
                            </div>
                        </div>
                        <div class="d-grid gap-5 col-5 ms-5">
                            <div class="btn-group">
                                <button type="button" class="p-3 btn btn-jurusan btn-danger btn-lg">PPLG</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="p-3 btn btn-jurusan btn-danger btn-lg">BCT</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="p-3 btn btn-jurusan btn-danger btn-lg">TKI</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="p-3 btn btn-jurusan btn-danger btn-lg">TF</button>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 pt-4" data-aos="fade-up">
                <div class="mt-1 p-5 warna text-center text-white rounded">
                    <img class="mb-4" src="logosmkn2.png" style="width: 55%;">
                    <div class="my-4">
                        <h3>
                        SELAMAT DATANG DI
                        <br>
                        <i>E-DISCIPLINE</i>
                        </h3>
                    </div>
                </div>
                
            </div>
        </div>  
    </div>


    <main class="container">
       <div class="col-lg-12 accordion mt-4 mb-5" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="warnasiswa accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Nama-nama Siswa
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="warnasiswa accordion-body">
                    <div class="my-2">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col mt-4">
                                <ul class="list-group w-100">
                                    <li class="list-group-item">A first item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                    <li class="list-group-item">A fourth item</li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mt-4">
                                <ul class="list-group w-100">
                                    <li class="list-group-item">A first item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                    <li class="list-group-item">A fourth item</li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mt-4">
                                <ul class="list-group w-100">
                                    <li class="list-group-item">A first item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                    <li class="list-group-item">A fourth item</li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mt-4">
                                <ul class="list-group w-100">

                                    <li class="list-group-item">A first item</li>
                                    <li class="list-group-item">A second item</li>
                                    <li class="list-group-item">A third item</li>
                                    <li class="list-group-item">A fourth item</li>
                                </ul>
                            </div>
                        </div> 
                    </div> 

                </div>
            </div>
        </div>
       </div>
    </main>

    <footer class="container-fluid bg-primary text-white">
        <div class="row">
            <div class="col-12 py-3 text-center">
                <h4>
                    © KULA CODING
                </h4>
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="app.js"></script>

</body>
</html>