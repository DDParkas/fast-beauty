<?php
require_once "connect.php";
session_start();

if(!empty($_SESSION['PainelApolo'])){
$query = mysqli_query($connect, "SELECT * FROM login");
if(isset($_GET['del'])){
  $ex = $_GET['del'];
  $que = mysqli_query($connect, "DELETE FROM login WHERE id = {$ex}");
  header("location: user.php");
}

 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
   <head>
     <meta charset="utf-8">
     <title>Painel Colegio Apollo</title>
     <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="../bootstrap/dashboard.css">
   </head>
   <body>
 <nav class="navbar navbar-dark fixed-top bg-blue flex-md-nowrap p-0 shadow">
       <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><img src="../imagens/logo-apollo.png" width="120"></a>
       <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Search"> -->
       <ul class="navbar-nav px-3">
         <li class="nav-item text-nowrap">
           <a class="nav-link text-light " href='logout.php'>Deslogar</a>
         </li>
       </ul>
     </nav>
     <!------------------>
     <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="things.php">
                  <span data-feather="edit-3"></span>
                  Anúncios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active " href="user.php">
                  <span data-feather="users">(current)</span>
                  Usuários
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="credits.php">
                  <span data-feather="coffee"></span>
                  Créditos
                </a>
              </li>
            </ul>
 <!--
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>-->
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Usuários</h1>
            <!-- <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div> -->
          </div>

          <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
          <form action="cadUser.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Insira aqui o e-mail">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input name="pass" type="password" class="form-control" id="inputPassword4" placeholder="*****">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Nome</label>
      <input name="name" type="text" class="form-control" id="inputAddress" placeholder="Insira aqui o nome">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Nivel de Acesso</label>
      <select id="inputState" class="form-control" name="acessLevel">
        <option selected value="1"> 1 - Administrador</option>
      </select>
    </div>

  </div><button type="submit" class="btn btn-outline-primary btn-sm">Cadastrar</button>


</form>
</br></br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>Nivel</th>
                  <th>Excluir</th>
                </tr>
              </thead>
              <tbody>
                <?php while($data=mysqli_fetch_assoc($query)){?>
                <tr>
                <td><?=$data['id']; $exclui = $data['id'];?></td>
                <td><?=$data['name'];?></td>
                <td><?=$data['email'];?></td>
                <td><?=$data['acessLevel'];?></td>
                  <td><?="<a href='?del=$exclui'> <input type='button' class='btn btn-outline-primary btn-sm' value='Deletar'></a> ";$row_cnt--;?></td>
                </tr>
                <?php };?>
              </tbody>
            </table>
            <?php var_dump($data);?>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
   ================================================== -->


   <!-- Icons -->
   <script src="../bootstrap/js/feather.min.js"></script>
   <script>
     feather.replace()
   </script>

   <!-- Graphs -->
   <!-- <script src="../bootstrap/js/Chart.min.js"></script>
   <script>
     var ctx = document.getElementById("myChart");
     var myChart = new Chart(ctx, {
       type: 'line',
       data: {
         labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho","Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
         datasets: [{
           data: [100, 99, 76, 58, 64, 88, 95, 99, 87 ],
           lineTension: 0,
           backgroundColor: 'transparent',
           borderColor: '#007bff',
           borderWidth: 4,
           pointBackgroundColor: '#007bff'
         }]
       },
       options: {
         scales: {
           yAxes: [{
             ticks: {
               beginAtZero: false
             }
           }]
         },
         legend: {
           display: false,
         }
       }
     });
   </script> -->
 <?php
 }else{echo "<center><h1> ERROR 404: Page not found </h1></center> ";}


?>
