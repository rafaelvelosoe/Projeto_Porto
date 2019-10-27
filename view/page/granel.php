<?php
require_once '../../config/classes.php';
require_once '../../config/conexao.php';

$Banco_Terminal = new Banco_Terminal($databasedb, $hostnamedb, $usernamedb, $passworddb);

$select_ter = $Banco_Terminal->select_tb_terminal() ;


// 	//Só vai mostrar os dados, se o array não estiver vazio
// 	if (count($select_ter) > 0) {
// 	  for ($i = 0; $i < count($select_ter); $i++) {
// 		foreach ($select_ter[$i] as $k => $v) {
// 		  if ($k == "tb_terminal") {
// 			$tb_terminal = $v;
// 			echo ($tb_terminal);
// 		  }
// 		} //Fim do FOREACH
// 	  }
	
//   }	


include ("./header.php");

include ("./nav.php");
?>


<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
	<a href="../../index.php"><button type="button" class="btn btn-secondary ativo">Líquido</button></a>
	<button type="button" class="btn btn-secondary">Granel</button>

</div>


<?php
print_r ($select_ter);
?>
					<!-- Small boxes (Stat box) -->
					<div class="row">
						<div class="col-lg-3 col-xs-6">
							<!-- small box -->
							<div class="small-box bg-aqua">
								<div class="inner">
									<h3>150</h3>

									<p>New Orders</p>
								</div>
								<div class="icon">
									<i class="ion ion-bag"></i>
								</div>
								<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-xs-6">
							<!-- small box -->
							<div class="small-box bg-green">
								<div class="inner">
									<h3>53<sup style="font-size: 20px">%</sup></h3>

									<p>Bounce Rate</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
								<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-xs-6">
							<!-- small box -->
							<div class="small-box bg-yellow">
								<div class="inner">
									<h3>44</h3>

									<p>User Registrations</p>
								</div>
								<div class="icon">
									<i class="ion ion-person-add"></i>
								</div>
								<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-xs-6">
							<!-- small box -->
							<div class="small-box bg-red">
								<div class="inner">
									<h3>65</h3>

									<p>Unique Visitors</p>
								</div>
								<div class="icon">
									<i class="ion ion-pie-graph"></i>
								</div>
								<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>


						<div class="col-md-6">
							<div class="box box-primary">
								<div class="box-header with-border">
									<i class="fa fa-bar-chart-o"></i>

									<h3 class="box-title">Bar Chart</h3>

									<div class="box-tools pull-right">
										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
										</button>
										<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
									</div>
								</div>
								<div class="box-body">
									<div id="bar-chart" style="height: 300px;"></div>
								</div>
								<!-- /.box-body-->
							</div>

						</div>


						

						


						<!-- ./col -->
					</div>

			</div>

		</div>
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
  $(function () {
  

   

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
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
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
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