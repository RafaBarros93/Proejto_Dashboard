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
      <link href="css/custom.css" rel="stylesheet">
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
         </ul>
      </nav>
      <div class="container">
         <br>
         <center>
            <img src="image/tenco.png" />
         </center>
      </div>
      <div class="container">
         <div class="menu" id="menu">
            <div class="jumbotron">
               <h2>
                  <p>
                  <center>ESTACIONAMENTO-FLUXO
               </h2>
               </p>
               </center>
               <!--Tabela Estacionamento Fluxo -->
               <table class="table table-bordered">
                  <tr bgcolor='#B0C4DE'>
                     <th scope="col" rowspan="2">
                        <center>
                           <br>Shopping
                        </center>
                     </th>
                     <th scope="col" colspan="3">
                        <center>Semana Anterior</center>
                     </th>
                     <th scope="col" colspan="3">
                        <center>Mês Atual</center>
                     </th>
                     <th scope="col" colspan="3">
                        <center>YTD</center>
                     </th>
                  <tr bgcolor='#B0C4DE'>
                     <th>
                        <center>2017</center>
                     </th>
                     <th>
                        <center>2018</center>
                     </th>
                     <th>
                        <center>%</center>
                     </th>
                     <th>
                        <center>2017</center>
                     </th>
                     <th>
                        <center>2018</center>
                     </th>
                     <th>
                        <center>%</center>
                     </th>
                     <th>
                        <center>2017</center>
                     </th>
                     <th>
                        <center>2018</center>
                     </th>
                     <th>
                        <center>%</center>
                     </th>
                  </tr>
                  </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th scope="row" class='color'>
                           <center>AGS</center>
                        </th>
                        <td></td>
                        <td></td>
                        <?php 
                                $a = 99.45;
                                if($a>0){
                                    echo "<td><font class='verde'>$a%</td>";
                                }else{
                                    echo "<td><font class='vermelho'>$a%</td>";
                                }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                            $a = 99.45;
                            if($a>0){
                                echo "<td><font class='verde'>$a%</td>";
                            }else{
                                echo "<td><font class='vermelho'>$a%</td>";
                            }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                            $a = 99.45;
                            if($a>0){
                                echo "<td><font class='verde'>$a%</td>";
                            }else{
                                echo "<td><font class='vermelho'>$a%</td>";
                            }
                           ?>
                     </tr>
                     <tr>
                        <th scope="row" class='color'>
                           <center>ARA</center>
                        </th>
                        <td></td>
                        <td></td>
                        <?php 
                        $a = 99.45;
                        if($a>0){
                            echo "<td><font class='verde'>$a%</td>";
                        }else{
                            echo "<td><font class='vermelho'>$a%</td>";
                        }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                            $a = 99.45;
                            if($a>0){
                                echo "<td><font class='verde'>$a%</td>";
                            }else{
                                echo "<td><font class='vermelho'>$a%</td>";
                            }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                       $a = 99.45;
                       if($a>0){
                           echo "<td><font class='verde'>$a%</td>";
                       }else{
                           echo "<td><font class='vermelho'>$a%</td>";
                       }
                           ?>
                     </tr>
                     <tr>
                        <th scope="row" class='color'>
                           <center>BRG</center>
                        </th>
                        <td></td>
                        <td></td>
                        <?php
                        $a = 99.45;
                        if($a>0){
                            echo "<td><font class='verde'>$a%</td>";
                        }else{
                            echo "<td><font class='vermelho'>$a%</td>";
                        }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                        $a = 99.45;
                        if($a>0){
                            echo "<td><font class='verde'>$a%</td>";
                        }else{
                            echo "<td><font class='vermelho'>$a%</td>";
                        }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                        $a = 99.45;
                        if($a>0){
                            echo "<td><font class='verde'>$a%</td>";
                        }else{
                            echo "<td><font class='vermelho'>$a%</td>";
                        }
                           ?>
                     </tr>
                     <tr>
                        <th scope="row" class='color'>
                           <center>CCR</center>
                        </th>
                        <td></td>
                        <td></td>
                        <?php 
                        $a = 99.45;
                        if($a>0){
                            echo "<td><font class='verde'>$a%</td>";
                        }else{
                            echo "<td><font class='vermelho'>$a%</td>";
                        }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                       $a = 99.45;
                       if($a>0){
                           echo "<td><font class='verde'>$a%</td>";
                       }else{
                           echo "<td><font class='vermelho'>$a%</td>";
                       }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                         $a = 99.45;
                         if($a>0){
                             echo "<td><font class='verde'>$a%</td>";
                         }else{
                             echo "<td><font class='vermelho'>$a%</td>";
                         }
                           ?>
                     </tr>
                     <tr>
                        <th scope="row" class='color'>
                           <center>ITQ</center>
                        </th>
                        <td></td>
                        <td></td>
                        <?php 
                            $a = 99.45;
                            if($a>0){
                                echo "<td><font class='verde'>$a%</td>";
                            }else{
                                echo "<td><font class='vermelho'>$a%</td>";
                            }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                            $a = 99.45;
                            if($a>0){
                                echo "<td><font class='verde'>$a%</td>";
                            }else{
                                echo "<td><font class='vermelho'>$a%</td>";
                            }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                            $a = 99.45;
                            if($a>0){
                                echo "<td><font class='verde'>$a%</td>";
                            }else{
                                echo "<td><font class='vermelho'>$a%</td>";
                            }
                           ?>
                     </tr>
                     <tr>
                        <th scope="row" class='color'>
                           <center>JRS</center>
                        </th>
                        <td></td>
                        <td></td>
                        <?php 
                            $a = 99.45;
                            if($a>0){
                                echo "<td><font class='verde'>$a%</td>";
                            }else{
                                echo "<td><font class='vermelho'>$a%</td>";
                            }
                            ?>
                        <td></td>
                        <td></td>
                        <?php 
                            $a = 99.45;
                            if($a>0){
                                echo "<td><font class='verde'>$a%</td>";
                            }else{
                                echo "<td><font class='vermelho'>$a%</td>";
                            }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                            $a = 99.45;
                            if($a>0){
                                echo "<td><font class='verde'>$a%</td>";
                            }else{
                                echo "<td><font class='vermelho'>$a%</td>";
                            }
                           ?>
                     </tr>
                     <tr>
                        <th scope="row" class='color'>
                           <center>LGS</center>
                        </th>
                        <td></td>
                        <td></td>
                        <?php 
                                $a = 99.45;
                                if($a>0){
                                    echo "<td><font class='verde'>$a%</td>";
                                }else{
                                    echo "<td><font class='vermelho'>$a%</td>";
                                }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                            $a = 99.45;
                            if($a>0){
                                echo "<td><font class='verde'>$a%</td>";
                            }else{
                                echo "<td><font class='vermelho'>$a%</td>";
                            }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                        $a = 99.45;
                        if($a>0){
                            echo "<td><font class='verde'>$a%</td>";
                        }else{
                            echo "<td><font class='vermelho'>$a%</td>";
                        }
                           ?>
                     </tr>
                     <tr>
                        <th scope="row" class='color'>
                           <center>RRM</center>
                        </th>
                        <td></td>
                        <td></td>
                        <?php 
                        $a = 99.45;
                        if($a>0){
                            echo "<td><font class='verde'>$a%</td>";
                        }else{
                            echo "<td><font class='vermelho'>$a%</td>";
                        }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                       $a = 99.45;
                       if($a>0){
                           echo "<td><font class='verde'>$a%</td>";
                       }else{
                           echo "<td><font class='vermelho'>$a%</td>";
                       }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                        $a = 99.45;
                        if($a>0){
                            echo "<td><font class='verde'>$a%</td>";
                        }else{
                            echo "<td><font class='vermelho'>$a%</td>";
                        }
                           ?>
                     </tr>
                     <tr>
                        <th scope="row" class='color'>
                           <center>VCF</center>
                        <td></td>
                        <td></td>
                        <?php 
                         $a = 99.45;
                         if($a>0){
                             echo "<td><font class='verde'>$a%</td>";
                         }else{
                             echo "<td><font class='vermelho'>$a%</td>";
                         }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                         $a = 99.45;
                         if($a>0){
                             echo "<td><font class='verde'>$a%</td>";
                         }else{
                             echo "<td><font class='vermelho'>$a%</td>";
                         }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                            $a = 99.45;
                            if($a>0){
                                echo "<td><font class='verde'>$a%</td>";
                            }else{
                                echo "<td><font class='vermelho'>$a%</td>";
                            }
                           ?>
                     </tr>
                     <tr>
                        <th scope="row" class='color'>
                           <center>VVS</center>
                        <td></td>
                        <td></td>
                        <?php 
                         $a = 99.45;
                         if($a>0){
                             echo "<td><font class='verde'>$a%</td>";
                         }else{
                             echo "<td><font class='vermelho'>$a%</td>";
                         }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                        $a = 99.45;
                        if($a>0){
                            echo "<td><font class='verde'>$a%</td>";
                        }else{
                            echo "<td><font class='vermelho'>$a%</td>";
                        }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                        $a = 99.45;
                        if($a>0){
                            echo "<td><font class='verde'>$a%</td>";
                        }else{
                            echo "<td><font class='vermelho'>$a%</td>";
                        }
                           ?>
                     </tr>
                     <tr>
                        <th scope="row" class='color'>
                           <center>Total</center>
                        <td></td>
                        <td></td>
                        <?php 
                         $a = 99.45;
                         if($a>0){
                             echo "<td><font class='verde'>$a%</td>";
                         }else{
                             echo "<td><font class='vermelho'>$a%</td>";
                         }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                         $a = 99.45;
                         if($a>0){
                             echo "<td><font class='verde'>$a%</td>";
                         }else{
                             echo "<td><font class='vermelho'>$a%</td>";
                         }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                        $a = 99.45;
                        if($a>0){
                            echo "<td><font class='verde'>$a%</td>";
                        }else{
                            echo "<td><font class='vermelho'>$a%</td>";
                        }
                           ?>
                     </tr>
                     <tr>
                        <th scope="row" class='color'>
                           <center>Média</center>
                        <td></td>
                        <td></td>
                        <?php 
                        $a = 99.45;
                        if($a>0){
                            echo "<td><font class='verde'>$a%</td>";
                        }else{
                            echo "<td><font class='vermelho'>$a%</td>";
                        }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                            $a = 99.45;
                            if($a>0){
                                echo "<td><font class='verde'>$a%</td>";
                            }else{
                                echo "<td><font class='vermelho'>$a%</td>";
                            }
                           ?>
                        <td></td>
                        <td></td>
                        <?php 
                            $a = 99.45;
                            if($a>0){
                                echo "<td><font class='verde'>$a%</td>";
                            }else{
                                echo "<td><font class='vermelho'>$a%</td>";
                            }
                           ?>
                     </tr>
                  </tbody>
               </table>
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
                 labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
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