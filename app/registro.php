<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Apeia | Registro</title>
    <link rel="icon" type="image/x-icon" href="./assets/logoCircle.png">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>
<body>

<div class="registration-container">
    <div class="registration-box">
    <h1>Registro</h1>
    <form action="index.php" method="post">
      <input type="text" name="nome" placeholder="Nome" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
  <label class="form-check-label" for="flexCheckDefault">
    Eu li e concodo com os termos e condições
  </label>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ler
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Termos de condições de serviços</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-dialog modal-dialog-scrollable">

      <h3>Bem-vindo aos Termos de Serviço da apeia. Por favor, leia atentamente os seguintes termos antes de usar nossos serviços.</h3><p>

      <strong>1.</strong> Aceitação dos Termos:
Ao acessar ou usar qualquer parte do nosso site, você concorda em cumprir estes Termos de Serviço. Se você não concordar com todos os termos e condições aqui presentes, por favor, não use nossos serviços.
<br><br>
<strong>2.</strong> Informações do Usuário:
Ao utilizar nosso sistema web, você concorda que suas informações serão armazenadas em nosso banco de dados. As informações coletadas podem incluir, mas não estão limitadas a, dados de perfil, informações de contato e preferências pessoais.
<br><br>

<strong>3.</strong>Uso Responsável das Informações:
Garantimos aos usuários que as informações coletadas não serão utilizadas para nenhum propósito malicioso. Comprometemo-nos a proteger suas informações e a utilizá-las exclusivamente para melhorar e personalizar a experiência do usuário.
<br><br>

<strong>4.</strong>Privacidade e Segurança:
Implementamos medidas de segurança para proteger suas informações contra acesso não autorizado, divulgação ou alteração. No entanto, nenhum sistema é completamente imune a possíveis falhas de segurança, e, ao utilizar nossos serviços, você reconhece esse risco.
<br><br>
<strong>5.</strong>Cookies e Tecnologias Semelhantes:
Podemos usar cookies e outras tecnologias semelhantes para melhorar a experiência do usuário. Ao continuar a usar nosso site, você concorda com o uso dessas tecnologias de acordo com nossa Política de Cookies.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
       
      </div>
    </div>
  </div>
</div>
<br><br>
      <button type="submit" class="btn btn-primary"  name="acao" value="registro">Registrar</button>

        </form>
</div>

</body>
</html>