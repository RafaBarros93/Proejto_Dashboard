<?php
 
?>
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
            <div class="menu" id="menu">
                <div class="jumbotron">
                    <h2>
                        <p>
                            <center>INADIMPLÊNCIA META</center>
                        </p>
                    </h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" bgcolor=#B0C4DE colspan="3">
                                    <center>
                                        <font color="#3A5FCD" size="4">R$</center>
                                </th>
                                <td class="azul" bgcolor='#B0C4DE' colspan="2">
                                    <center>15.62617</td>
                                <th scope="col" bgcolor='#B0C4DE' colspan="3">
                                    <center>
                                        <font color="#3A5FCD" size="4">%</center>
                                </th>
                                <td class="azul" bgcolor='#B0C4DE' colspan="4">
                                    <center>15%</center>
                                </td>
                            </tr>
                            <tr bgcolor='#B0C4DE'>
                                <th scope="col" colspan="1">
                                    <center>
                                        <font color="#3A5FCD" size="3">Visão</center>
                                </th>
                                <th scope="col" colspan="2">
                                    <center>
                                        <font color="#3A5FCD" size="3">Faturamento com vencimento no mês atual (Empreendedor)</center>
                                </th>
                                <th scope="col" colspan="2">
                                    <center>
                                        <font color="#3A5FCD" size="3">Arrecadação do
                                            <center>Mês</center>
                                    </center>
                                </th>
                                <th valign="top" scope="col" colspan="4">
                                    <center>
                                        <font color="#3A5FCD" size="3">Recuperação
                                            <br>do
                                            <br>Mês</center>
                                </th>
                                <th scope="col" colspan="2">
                                    <center>
                                        <font color="#3A5FCD" size="3">Inadimplência
                                            <br>Líquida</center>
                            </tr>
                            <tr bgcolor='#B0C4DE'>
                                <td></td>
                                <th scope="col">
                                    <center>SC'S</center>
                                </th>
                                <th scope="col">
                                    <center>SSH</center>
                                </th>
                                <th scope="col">Baixa</th>
                                <th scope="col">Caixa</th>
                                <th scope="col">Mês (Caixa)</th>
                                <th scope="col">YTD (Caixa)</th>
                                <th scope="col">Desc. (Mês)</th>
                                <th scope="col">Desc. (YTD)</th>
                                <th scope="col">Mês</th>
                                <th scope="col">YTD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor="#F0FFFF">
                                    <center>R$</center>
                                </th>
                                <td>
                                    <center>51.124.123</center>
                                </td>
                                <td>
                                    <center>56.124.123</center>
                                </td>
                                <td>
                                    <center>43.124.123</center>
                                </td>
                                <td>
                                    <center>6.124.123</center>
                                </td>
                                <td>
                                    <center>6.124.123</center>
                                </td>
                                <td>
                                    <center>6.124.123</center>
                                </td>
                                <td>
                                    <center>6.124.123</center>
                                </td>
                                <td>
                                    <center>6.124.123</center>
                                </td>
                                <td>
                                    <center>6.124.123</center>
                                </td>
                                <td>
                                    <center>6.124.123</center>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor='#F0FFFF'>
                                    <center>% R/P</center>
                                </th>
                                <?php 
                                 $a = 10.56;
                              if($a>0){
                                    echo "<td><center><font class='verde'>$a%</center></td>";
                              }else{
                                    echo "<td><font class='vermelho'>$a%</center></td>";
                                }
                                $a = 0;
                                if($a>0){
                                      echo "<td><center><font class='verde'>$a%</center></td>";
                                }else{
                                      echo "<td><font class='vermelho'>$a%</center></td>";
                                  }
                                $a = 10;
                                if($a>0){
                                        echo "<td><center><font class='verde'>$a%</center></td>";
                                  }else{
                                        echo "<td><font class='vermelho'>$a%</center></td>";
                                    }
                                    $a = 99.45;
                                    if($a>0){
                                        echo "<td><center><font class='verde'>$a%</center></td>";
                                  }else{
                                        echo "<td><font class='vermelho'>$a%</center></td>";
                                    }
                                    $a = 99.45;
                                    if($a>0){
                                        echo "<td><center><font class='verde'>$a%</center></td>";
                                  }else{
                                        echo "<td><font class='vermelho'>$a%</center></td>";
                                    }
                                    $a = 99.45;
                                    if($a>0){
                                        echo "<td><center><font class='verde'>$a%</center></td>";
                                  }else{
                                        echo "<td><font class='vermelho'>$a%</center></td>";
                                    }
                                    $a = 99.45;
                                    if($a>0){
                                        echo "<td><center><font class='verde'>$a%</center></td>";
                                  }else{
                                        echo "<td><font class='vermelho'>$a%</center></td>";
                                    }
                                    $a = 0;
                                    if($a>0){
                                        echo "<td><center><font class='verde'>$a%</center></td>";
                                  }else{
                                        echo "<td><font class='vermelho'>$a%</center></td>";
                                    }
                                    $a = 0;
                                    if($a>0){
                                        echo "<td><center><font class='verde'>$a%</center></td>";
                                  }else{
                                        echo "<td><font class='vermelho'>$a%</center></td>";
                                    }
                                    $a = 0;
                                    if($a>0){
                                        echo "<td><center><font class='verde'>$a%</center></td>";
                                  }else{
                                        echo "<td><font class='vermelho'>$a%</center></td>";
                                    }                        
                                 ?>
                        </tbody>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor='#F0FFFF'>
                                    <center>%YOY</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor='#F0FFFF'>
                                    <center>R$/m²</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor='#F0FFFF'>R$/m²</th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor='#F0FFFF'>% R/P</th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor='#F0FFFF'>%YOY</th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="col" bgcolor='#B0C4DE' colspan="7">
                                    <center>ESTOQUE INÍCIO ANO R$</center>
                                </th>
                                <td colspan="5" bgcolor='#B0C4DE' class="azul">24.23423</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <thead>
                            <tr bgcolor='#B0C4DE'>
                                <th scope="col" colspan="2">
                                    <center>(%) Inad / Fat</center>
                                </th>
                                <th scope="col" colspan="4">
                                    <center>Mémoria de Cálculo</center>
                                </th>
                            </tr>
                            <tr bgcolor="#B0C4DE">
                                <th scope="col">Mês</th>
                                <th scope="col">YTD</th>
                                <th scope="col">Inad. Mês</th>
                                <th scope="col">Inad. YTD</th>
                                <th scope="col">Fat. Mês</th>
                                <th scope="col">Fat. YTD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr bgcolor="#FFFFF0">
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <thead>
                            <tr bgcolor='#B0C4DE'>
                                <th scope="col" rowspan="2">
                                    <center>Aging/Descr</center>
                                </th>
                                <th scope="col" rowspan="2">
                                    <center>Não Negociada</center>
                                </th>
                                <th scope="col" colspan="4">
                                    <center>Negociada</center>
                                </th>
                                <th scope="col" rowspan="2">
                                    <center>Total</center>
                                </th>
                                <th scope="col" rowspan="2">
                                    <cneter>Aging Recuperação*</cneter>
                                </th>
                            </tr>
                            <tr bgcolor='#B0C4DE'>
                                <th scope="col">
                                    <center>Vlr Original </center>
                                </th>
                                <th scope="col">
                                    <center>CMJ</center>
                                </th>
                                <th scope="col">
                                    <center>Desconto</center>
                                </th>
                                <th scope="col">
                                    <center>Valor Final</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor='#F0FFFF'>
                                    <center>1 à 30</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor='#F0FFFF'>
                                    <center>31 à 60</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                        </tbody>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor='#F0FFFF'>
                                    <center>61 à 90</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor='#F0FFFF'>
                                    <center>91 à 180</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor='#F0FFFF'>
                                    <center>PCLD</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor='#F0FFFF'>
                                    <center>Sub-Total</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor='#F0FFFF'>
                                    <center>Inativos</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th scope="row" bgcolor='#F0FFFF'>
                                    <center>Total</center>
                                </th>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered">
                        <h2>Inadimplência Líquida Nesta Data</h2>
                        <tr bgcolor='#B0C4DE'>
                            <th>
                                <font color="#3A5FCD" size="4">R$</center>
                            </th>
                            <td class="azul">34543</td>
                            <th>
                                <font color="#3A5FCD" size="4">%</center>
                            </th>
                            <td class="azul">34543</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div>
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