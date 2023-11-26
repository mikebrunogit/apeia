<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="#">
        <img src="app/assets/logoSemFundo.png" alt="logo" width="30" height="30">
    </a>
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Página inicial</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./app/loginCuidador.php"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="verAtividades.php"></a>
        </li>
        <li class="nav-item dropdown">
       
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="cadastroPacientes.php">
            </a></li>
            <li><a class="dropdown-item" href="agendaPacientes.php"></a></li>
            <li><a class="dropdown-item" href="cadastroAtividades.php"></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class ="nav-login">
                <a class="nav-link" href="./app/registro.php">Registro</a>
            </li>
            <li class ="nav-login">
                <a class="nav-link" href="./app/loginCuidador.php">Login</a>
            </li>
        </ul>
    </div>
</nav>

  </style>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
