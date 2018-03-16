<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="css/tabelas.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">VP6 It Consulting</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="tabelaInadimplencia.php">
                        <span data-feather="file-text"></span>
                        Inadimplência
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tabelaVendas.php">
                        <span data-feather="file-text"></span>
                        Vendas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ocupacaoLojas.php">
                        <span data-feather="file-text"></span>
                        Ocupação Lojas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tabelaFluxo.php">
                        <span data-feather="file-text"></span>
                        Fluxo de pessoas
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="estacionamentoReceita.php">
                        <span data-feather="file-text"></span>
                        Receita Estacionamento
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="estacionamentoFluxo.php">
                        <span data-feather="file-text"></span>
                        Fluxo Estacionamento
                    </a>
                </li>
    </nav>
    <div class="container">
        <br>
        <center>
            <img src="image/tenco.png" />
        </center>
    </div>
    <div class="container">
        <div class="jumbotron">
            <div class="menu" id="menu">
                <div class="table-responsive">
                    <!--Tabela Vendas-->
                    <table class="table table-bordered">
                        <thead>
                            <tr bgcolor='#B0C4DE'>
                                <br>
                                <h2>
                                    <center>VENDAS</center>
                                </h2>
                                <th scope="col" colspan="2">
                                    <center>Meta de 2018(R$)</center>
                                </th>
                                <th>466</th>
                                <th scope="col" colspan="3">
                                    <center>Meta de 2018(R$/m²)</center>
                                </th>
                                <th>664</th>
                            </tr>
                            <tr bgcolor='#B0C4DE'>
                                <th scope="col" rowspan="3">
                                    <center>Descrição
                                        <br> Periodo
                                    </center>
                                </th>
                                <th scope="col" colspan="2">
                                    <center>Mês Anterior</center>
                                </th>
                                <th scope="col" colspan="2">
                                    <center>Mês Atual</center>
                                </th>
                                <th scope="col" colspan="2">
                                    <center>YTD</center>
                                </th>
                            </tr>
                            <tr bgcolor='#B0C4DE'>
                                <th>SC'S</th>
                                <th>SSHS</th>
                                <th>SC'S</th>
                                <th>SSHS</th>
                                <th>SC'S</th>
                                <th>SSHS</th>
                            </tr>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="color">
                                    <center>R$</center>
                                </th>
                                <td>34324</td>
                                <td>54545</td>
                                <td>54545</td>
                                <td>54545</td>
                                <td>54545</td>
                                <td>54545</td>
                            </tr>
                            <tr>
                                <th class="color" scope="row">
                                    <center>% R/P</center>
                                </th>
                                <?php
                                $a = -99.45;
                                if($a>0){
                                    echo "<td><font class='verde'>$a%</td>";
                                }else{
                                    echo "<td><font class='vermelho'>$a%</td>";
                                }
                                $a = -99.45;
                                if($a>0){
                                    echo "<td><font class='verde'>$a%</td>";
                                }else{
                                    echo "<td><font class='vermelho'>$a%</td>";
                                }
                                $a = -99.45;
                                if($a>0){
                                    echo "<td><font class='verde'>$a%</td>";
                                }else{
                                    echo "<td><font class='vermelho'>$a%</td>";
                                }
                                $a = -99.45;
                                if($a>0){
                                    echo "<td><font class='verde'>$a%</td>";
                                }else{
                                    echo "<td><font class='vermelho'>$a%</td>";
                                }
                                $a = -99.45;
                                if($a>0){
                                    echo "<td><font class='verde'>$a%</td>";
                                }else{
                                    echo "<td><font class='vermelho'>$a%</td>";
                                }
                                $a = -99.45;
                                if($a>0){
                                    echo "<td><font class='verde'>$a%</td>";
                                }else{
                                    echo "<td><font class='vermelho'>$a%</td>";
                                }
                                           
                              ?>
                            </tr>
                            <tr>
                                <th class="color" scope="row">
                                    <center>% YOY</center>
                                </th>
                                <?php
                              $a = 99.45;
                              if($a>0){
                                  echo "<td><font class='verde'>$a%</td>";
                              }else{
                                  echo "<td><font class='vermelho'>$a%</td>";
                              }
                              $a = -99.45;
                              if($a>0){
                                  echo "<td><font class='verde'>$a%</td>";
                              }else{
                                  echo "<td><font class='vermelho'>$a%</td>";
                              }
                              $a = -99.45;
                              if($a>0){
                                  echo "<td><font class='verde'>$a%</td>";
                              }else{
                                  echo "<td><font class='vermelho'>$a%</td>";
                              }
                              $a = -99.45;
                              if($a>0){
                                  echo "<td><font class='verde'>$a%</td>";
                              }else{
                                  echo "<td><font class='vermelho'>$a%</td>";
                              }
                              $a = -99.45;
                              if($a>0){
                                  echo "<td><font class='verde'>$a%</td>";
                              }else{
                                  echo "<td><font class='vermelho'>$a%</td>";
                              }
                              $a = -99.45;
                              if($a>0){
                                  echo "<td><font class='verde'>$a%</td>";
                              }else{
                                  echo "<td><font class='vermelho'>$a%</td>";
                              }
                              ?>
                            </tr>
                            <tr>
                                <th class="color" scope="row">
                                    <center>R$ / M²</center>
                                </th>
                                <td>3432</td>
                                <td>3432</td>
                                <td>3432</td>
                                <td>3432</td>
                                <td>3432</td>
                                <td>3432</td>
                            </tr>
                            <tr>
                                <th class="color" scope="row">
                                    <center>% R/P</center>
                                </th>
                                <?php
                              $a = 99.45;
                              if($a>0){
                                  echo "<td><font class='verde'>$a%</td>";
                              }else{
                                  echo "<td><font class='vermelho'>$a%</td>";
                              }
                              $a = -99.45;
                              if($a>0){
                                  echo "<td><font class='verde'>$a%</td>";
                              }else{
                                  echo "<td><font class='vermelho'>$a%</td>";
                              }
                              $a = -99.45;
                              if($a>0){
                                  echo "<td><font class='verde'>$a%</td>";
                              }else{
                                  echo "<td><font class='vermelho'>$a%</td>";
                              }
                              $a = -99.45;
                              if($a>0){
                                  echo "<td><font class='verde'>$a%</td>";
                              }else{
                                  echo "<td><font class='vermelho'>$a%</td>";
                              }
                              $a = -99.45;
                              if($a>0){
                                  echo "<td><font class='verde'>$a%</td>";
                              }else{
                                  echo "<td><font class='vermelho'>$a%</td>";
                              }
                              $a = -99.45;
                              if($a>0){
                                  echo "<td><font class='verde'>$a%</td>";
                              }else{
                                  echo "<td><font class='vermelho'>$a%</td>";
                              }
                              ?>
                            </tr>
                            <tr>
                                <th class="color" scope="row">
                                    <center>% YOY</center>
                                </th>
                                <?php
                               $a = 99.45;
                               if($a>0){
                                   echo "<td><font class='verde'>$a%</td>";
                               }else{
                                   echo "<td><font class='vermelho'>$a%</td>";
                               }
                               $a = -99.45;
                               if($a>0){
                                   echo "<td><font class='verde'>$a%</td>";
                               }else{
                                   echo "<td><font class='vermelho'>$a%</td>";
                               }
                               $a = -99.45;
                               if($a>0){
                                   echo "<td><font class='verde'>$a%</td>";
                               }else{
                                   echo "<td><font class='vermelho'>$a%</td>";
                               }
                               $a = -99.45;
                               if($a>0){
                                   echo "<td><font class='verde'>$a%</td>";
                               }else{
                                   echo "<td><font class='vermelho'>$a%</td>";
                               }
                               $a = -99.45;
                               if($a>0){
                                   echo "<td><font class='verde'>$a%</td>";
                               }else{
                                   echo "<td><font class='vermelho'>$a%</td>";
                               }
                               $a = -99.45;
                               if($a>0){
                                   echo "<td><font class='verde'>$a%</td>";
                               }else{
                                   echo "<td><font class='vermelho'>$a%</td>";
                               }
                              ?>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <thead>
                            <tr bgcolor='#B0C4DE'>
                                <br>
                                <h2>
                                    <center>VENDAS NESTA DATA</center>
                                </h2>
                                <th scope="col">
                                    <center>R$</center>
                                </th>
                                <th>
                                    <center>5454</center>
                                </th>
                                <th scope="col">
                                    <center>R$/m²</center>
                                </th>
                                <th>
                                    <center>5545</center>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript
         ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write(
            '<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
                    "Saturday"
                ],
                datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
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
    </script>
</body>

</html>