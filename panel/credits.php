
 <?php
require_once "connect.php";
session_start();

if(!empty($_SESSION['PainelApolo'])){

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
                 <a class="nav-link " href="index.php">
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
                 <a class="nav-link " href="user.php">
                   <span data-feather="users"></span>
                   Usuários
                 </a>
               </li>
               <li class="nav-item">
                 <a class="nav-link active" href="credits.php">
                   <span data-feather="coffee">(current)</span>
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
               <h1 class="h2">Créditos</h1>
               v1.0.0 Alpha
             </div>
             <h6>Site desenvolvido por:</h6>
            Jackson Fedorgchyn (https://proceduraweb.com.br)
             <hr>
             <h6>Painel desenvolvido por:</h6>
             Daniel Pinhal Filho (https://studiopinus.com)
             <hr>

            <h6>Frameworks ultilizados:</h6>
             Bootstrap v4.1.3 (https://getbootstrap.com/)</br>
             Chart.js v2.7.1 (http://chartjs.org/)
            <hr>
            <h6>Softwares ultilizados:</h6>
            Atom v1.32.2 (https://atom.io/)
            <hr>

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
