<?php
require_once '../../config/classes.php';
require_once '../../config/conexao.php';

$Banco_Terminal = new Banco_Terminal($databasedb, $hostnamedb, $usernamedb, $passworddb);

$select_ter = $Banco_Terminal->select_tb_terminal();


include("./header.php");

include("./nav.php");


    $cd_terminal=addslashes($_POST['cd_terminal']);
    //Cadastrar
        //Verifica se já não está cadastrado
        if(!$Banco_Terminal->cadastrarMovimentacao($cd_terminal)){
            ?><br><br><br><br><br><br><h4 class="false">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Esse setor já está cadastrado!</h4><?php
        }else{
            ?><br><br><br><br><br><br><h4 class="false">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Setor cadastrado com sucesso!</h4><?php
        }	
    else{
        echo '<br><br><br><br><br><br><h4 class="false">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Preencha todos os campos!</h4>';
    }	

?>



<!-- Small boxes (Stat box) -->
<section class="container-fluid">
    <div class="row">

        <section class="col-md-12">
        <form action="" method="POST" >  <br><br><br><br> <br><br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome Terminal</label>
                    <input type="text" class="form-control" name="nm_terminal" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Apelido</label>
                    <input type="text" class="form-control" name="nm_apelidoTerminal" placeholder="ESQ">
                </div>
            </div>
            <div class="form-group col-md-6">
                    <label for="inputEmail4">Capacidade Rodoviaria</label>
                    <input type="text" class="form-control" name="qt_capacidadeRodoviariaRec" placeholder="ESQ">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Capacidade Navio</label>
                    <input type="text" class="form-control" name="qt_capacidadeNavioRec" placeholder="ESQ">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Número Terminal</label>
                    <input type="text" class="form-control" name="cd_numeroTerminal" placeholder="ESQ">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Capacidade Rodoviaria Expedição</label>
                    <input type="text" class="form-control" name="qt_capacidadeRodoviariaExp" placeholder="ESQ">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Capacidade Navio Expedição</label>
                    <input type="text" class="form-control" name="qt_capacidadeNavioExp" placeholder="ESQ">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Armazem Nominal</label>
                    <input type="text" class="form-control" name="vl_armazem_nominal" placeholder="ESQ">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Capacidade Ferroviaria</label>
                    <input type="text" class="form-control" name="qt_capacidadeFerroviariaRec" placeholder="ESQ">
                </div>
            <div class="form-group col-md-6">
                    <label for="inputEmail4">Esquerda ou Direita</label>
                    <input type="text" class="form-control" name="cd_entradaEsqDir" placeholder="ESQ">
                </div>
            
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>




</section>
        <!-- ./col -->
    </div>
  

        <script src="../../public/js/classie.js"></script>
        <script src="../../public/js/gnmenu.js"></script>
        <script>
            new gnMenu(document.getElementById('gn-menu'));
        </script>



        <script>
            /*
             * BAR CHART
             * ---------
             */

            var bar_data = {
                data: [
                    ['January', 10],
                    ['February', 8],
                    ['March', 4],
                    ['April', 13],
                    ['May', 17],
                    ['June', 9]
                ],
                color: '#3c8dbc'
            }
            $.plot('#bar-chart', [bar_data], {
                grid: {
                    borderWidth: 1,
                    borderColor: '#f3f3f3',
                    tickColor: '#f3f3f3'
                },
                series: {
                    bars: {
                        show: true,
                        barWidth: 0.5,
                        align: 'center'
                    }
                },
                xaxis: {
                    mode: 'categories',
                    tickLength: 0
                }
            })
            /* END BAR CHART */
        </script>




        <!-- jQuery 3 -->
        <script src="../../public/fremwork/AdminLTE-master/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="../../public/fremwork/AdminLTE-master/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="../../public/fremwork/AdminLTE-master/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="../../public/fremwork/AdminLTE-master/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../public/fremwork/AdminLTE-master/dist/js/demo.js"></script>
        <!-- FLOT CHARTS -->
        <script src="../../public/fremwork/AdminLTE-master/bower_components/Flot/jquery.flot.js"></script>
        <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
        <script src="../../public/fremwork/AdminLTE-master/bower_components/Flot/jquery.flot.resize.js"></script>
        <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
        <script src="../../public/fremwork/AdminLTE-master/bower_components/Flot/jquery.flot.pie.js"></script>
        <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
        <script src="../../public/fremwork/AdminLTE-master/bower_components/Flot/jquery.flot.categories.js"></script>
        <!-- Page script -->
        <script>
            $(function() {




                /*
                 * BAR CHART
                 * ---------
                 */

                var bar_data = {
                    data: [
                        ['January', 10],
                        ['February', 8],
                        ['March', 4],
                        ['April', 13],
                        ['May', 17],
                        ['June', 9]
                    ],
                    color: '#3c8dbc'
                }
                $.plot('#bar-chart', [bar_data], {
                    grid: {
                        borderWidth: 1,
                        borderColor: '#f3f3f3',
                        tickColor: '#f3f3f3'
                    },
                    series: {
                        bars: {
                            show: true,
                            barWidth: 0.5,
                            align: 'center'
                        }
                    },
                    xaxis: {
                        mode: 'categories',
                        tickLength: 0
                    }
                })
                /* END BAR CHART */



            })

            /*
             * Custom Label formatter
             * ----------------------
             */
            function labelFormatter(label, series) {
                return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
                    label +
                    '<br>' +
                    Math.round(series.percent) + '%</div>'
            }
        </script>



        </div>

        </div>
        </div>
        <script src="public/js/classie.js"></script>
        <script src="public/js/gnmenu.js"></script>
        <script>
            new gnMenu(document.getElementById('gn-menu'));
        </script>
        </body>

        </html>