
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="#">
        <img src="app/assets/logo2.png" alt="APEIA" width="50" height="50">
    </a>
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Página inicial</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./app/loginCuidador.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="verAtividades.php">Ver Atividades</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="cadastroPacientes.php">Cadastrar Pacientes
            </a></li>
            <li><a class="dropdown-item" href="agendaPacientes.php">Agenda de Pacientes</a></li>
            <li><a class="dropdown-item" href="cadastroAtividades.php">Cadastrar atividades</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-login">
                <a class="nav-link" href="./app/registro.php">Registro</a>
            </li>
            <li class="nav-login">
                <a class="nav-link" href="./app/loginCuidador.php">Login</a>
            </li>
        </ul>
    </div>
</nav>
<style>
.nav-login {
    border: 1px solid #ccc; 
    border-radius: 5px; 
    margin-bottom: 10px;
    
  </style>