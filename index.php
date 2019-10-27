<?php

require_once 'config/classes.php';
require_once 'config/conexao.php';

$Banco_Terminal = new Banco_Terminal($databasedb, $hostnamedb, $usernamedb, $passworddb);




// $select_ter = $Banco_Terminal->select_Analise() ;
// //Só vai mostrar os dados, se o array não estiver vazio
// if (count($select_ter) > 0) {
//   for ($i = 0; $i < count($select_ter); $i++) {
// 	foreach ($select_ter[$i] as $k => $v) {
// 	  if ($k == "nm_tipoTerminal") {
// 		$nm_tipoTerminal = $v;
// 	  }
// 	} //Fim do FOREACH
//   }
// }
//   echo ($nm_tipoTerminal);
// // var_dump($select_ter);







$select_rodo = $Banco_Terminal->select_rodo();
$qt_realizadaVagao = count($select_rodo);

$select_ferro = $Banco_Terminal->select_ferro();
$qt_realizadaVagaoferro = $select_ferro;

$select_navio = $Banco_Terminal->select_navio();
$qt_realizadaVagaonavio = count($select_navio);

// $media = $qt_realizadaVagao + $qt_realizadaVagaoferro + $qt_realizadaVagaonavio;

// $media =  $media / 3;
// var_dump($select_ter);
?>

<!DOCTYPE html>
<html lang="pt-br" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Projeto Porto</title>
	<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
	<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="public/img/favicon.ico">
	<!-- <link rel="stylesheet" type="text/css" href="css/normalize.css" /> -->
	<link rel="stylesheet" type="text/css" href="public/css/demo.css" />
	<link rel="stylesheet" type="text/css" href="public/css/component.css" />

	<link href="public/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<script src="public/js/modernizr.custom.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="public/fremwork/AdminLTE-master/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="public/fremwork/AdminLTE-master/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="public/fremwork/AdminLTE-master/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="public/fremwork/AdminLTE-master/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="public/fremwork/AdminLTE-master/dist/css/skins/_all-skins.min.css">







	<script src="public/bootstrap/js/bootstrap.min.js"></script>
</head>




<!-- -------------------------------------------------------------------------- -->

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1">

			</div>
			<div class="col-md-11">
				<ul id="gn-menu" class="gn-menu-main" style="z-index:999999 !important;">
					<li class="gn-trigger">
						<a class="gn-icon gn-icon-menu"><span>Menu</span></a>


						<nav class="gn-menu-wrapper">
							<div class="gn-scroller">
								<ul class="gn-menu">

									<li>
										<a class="gn-icon gn-icon-download">Vegetal</a>

									</li>
									<li><a class="gn-icon gn-icon-cog">Mineral</a></li>
									<li><a class="gn-icon gn-icon-help">Container</a></li>
									<li>
										<a class="gn-icon gn-icon-archive">Geral</a>

									</li>
									<li>
										<a class="gn-icon gn-icon-archive" href="view/page/input.php">Form</a>

									</li>
								</ul>
							</div>
						</nav>
					</li>
					<li><a href="#"><img src="public/img/man.png" width="60px"></a></li>
					<li><a class="codrops-icon codrops-icon-drop" href="#"><span>Sair</span></a></li>
				</ul>

				<!-- ----------------------------------------------------------------------- -->
				<header>

					&nbsp;&nbsp;&nbsp;
					<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
						&nbsp;<button type="button" class="btn btn-primary btn-lg">Líquido</button>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="#"><button type="button" class="btn btn-primary btn-lg">Granel</button></a>

					</div>
					<br>
					<br>



					<!-- Small boxes (Stat box) -->


					<style>
						.nav-pills {
							background: white;
						}
					</style>

					<div class="col-lg-12">
						<ul class="nav nav-pills">
							<li class="nav-item">
								<a class="nav-link active" href="#primeiro">Primeiro Período</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#segundo">Segundo Período</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#terceiro">Terceiro Período</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#terceiro">Quarto Período</a>
							</li>
						</ul>
						<br>
						<br>
					</div>

					<br><br><br><br>







					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3><?php echo ($qt_realizadaVagao); ?></h3>

								<p>Rodoviário Caminhões</p>
							</div>
							<div class="icon">
								<i class="ion ion-bag"></i>
							</div>
							<a class="small-box-footer" data-toggle="modal" data-target=".bd-example-modal-xl">Mais Informações<i class="fa fa-arrow-circle-right"></i></a>

							<!-- Modal -->
							<div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<br>
								<br>
								<div class="modal-dialog  modal-lg" role="document">
									<div class="modal-content ">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<table class="table table-striped table-info	">
												<thead class="thead-dark">
													<tr>

														<th scope="col" class="text-center" style="font-size:25px;">Descarga</th>
														<th scope="col" class="text-center" style="font-size:25px;">Embarque</th>

													</tr>
												</thead>
												<tbody>
													<tr>

													<td class="echo text-center">
														<?php 
														$select_rodoDir=$Banco_Terminal->select_rodoDir();
														
														if (count($select_rodoDir) > 0) {
															for ($i = 0; $i < count($select_rodoDir); $i++) {
																foreach ($select_rodoDir[$i] as $k => $v) {
																	if ($k == "quantidade") {
																		$quantidade = $v;
																		
																	}
																}
															} 
															//Fim do FOREACH
														}
														echo $quantidade;
														?>

														</td>
														<td class="echo text-center">
															<?php
															$dados=$Banco_Terminal->select_rodoEsq();
														
															if (count($dados) > 0) {
																for ($i = 0; $i < count($dados); $i++) {
																	foreach ($dados[$i] as $k => $v) {
																		if ($k == "quantidade") {
																			$quantidade = $v;
																			
																		}
																	}
																} 
																//Fim do FOREACH
															}
															echo $quantidade;
															?>

														</td>


													</tr>
													<style>
														.echo {
															color: rgba("0,0,0,0.8");
															font-size: 22px;
															margin-top: 1px;
														}
													</style>


												</tbody>
											</table>


										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-green">
							<div class="inner">









								<h3><?php
								
								$dados=$Banco_Terminal->select_ferroDir();
															
															if (count($dados) > 0) {
																for ($i = 0; $i < count($dados); $i++) {
																	foreach ($dados[$i] as $k => $v) {
																		if ($k == "quantidade") {
																			$quantidadeferro = $v;
																			
																		}
																	}
																} 
																//Fim do FOREACH
															}
															echo $quantidadeferro;
								
							 ?><sup style="font-size: 20px"></sup></h3>






















								<p>Ferroviario Vagões</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>

							<a class="small-box-footer" data-toggle="modal" data-target=".bd-example-modal-xl01">Mais Informações<i class="fa fa-arrow-circle-right"></i></a>

							<!-- Modal -->
							<div class="modal fade bd-example-modal-xl01" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<br>
								<br>
								<div class="modal-dialog  modal-lg" role="document">
									<div class="modal-content ">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<table class="table table-striped table-info	">
												<thead class="thead-dark">
													<tr>

														<th scope="col" class="text-center" style="font-size:25px;">Descarga</th>
														<th scope="col" class="text-center" style="font-size:25px;">Embarque</th>

													</tr>
												</thead>
												<tbody>
													<tr>

													<td class="echo text-center">
															<?php
															$dados=$Banco_Terminal->select_ferroDir();
															
															if (count($dados) > 0) {
																for ($i = 0; $i < count($dados); $i++) {
																	foreach ($dados[$i] as $k => $v) {
																		if ($k == "quantidade") {
																			$quantidade = $v;
																			
																		}
																	}
																} 
																//Fim do FOREACH
															}
															echo $quantidade;
															?>

														</td>
														<td class="echo text-center">
															<?php
															$dados=$Banco_Terminal->select_ferroEsq();
														
															if (count($dados) > 0) {
																for ($i = 0; $i < count($dados); $i++) {
																	foreach ($dados[$i] as $k => $v) {
																		if ($k == "quantidade") {
																			$quantidade = $v;
																			
																		}
																	}
																} 
																//Fim do FOREACH
															}
															echo $quantidade;
															?>

														</td>


													</tr>
													<style>
														.echo {
															color: rgba("0,0,0,0.8");
															font-size: 22px;
															margin-top: 1px;
														}
													</style>


												</tbody>
											</table>


										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3>120.689</h3>

								<p>Navios</p>
							</div>
							<div class="icon">
								<i class="ion ion-person-add"></i>
							</div>



							<a class="small-box-footer" data-toggle="modal" data-target=".bd-example-modal-xl02">Mais Informações<i class="fa fa-arrow-circle-right"></i></a>

							<!-- Modal -->
							<div class="modal fade bd-example-modal-xl02	" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<br>
								<br>
								<div class="modal-dialog  modal-lg" role="document">
									<div class="modal-content ">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<table class="table table-striped table-info	">
												<thead class="thead-dark">
													<tr>

														<th scope="col" class="text-center" style="font-size:25px;">Descarga</th>
														<th scope="col" class="text-center" style="font-size:25px;">Embarque</th>

													</tr>
												</thead>
												<tbody>
													<tr>
													<td class="echo text-center">
															<?php
															$dados=$Banco_Terminal->select_navioDir();
														
															if (count($dados) > 0) {
																for ($i = 0; $i < count($dados); $i++) {
																	foreach ($dados[$i] as $k => $v) {
																		if ($k == "quantidade") {
																			$quantidade = $v;
																			
																		}
																	}
																} 
																//Fim do FOREACH
															}
															echo $quantidade;
															?>

														</td>

														<td class="echo text-center">
															<?php
															$dados=$Banco_Terminal-> select_navioEsq();
														
															if (count($dados) > 0) {
																for ($i = 0; $i < count($dados); $i++) {
																	foreach ($dados[$i] as $k => $v) {
																		if ($k == "quantidade") {
																			$quantidade = $v;
																			
																		}
																	}
																} 
																//Fim do FOREACH
															}
															echo $quantidade;
															?>

														</td>



													</tr>

												</tbody>
											</table>


										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-red">
							<div class="inner">
								<h3>120.689</h3>

								<p>Média</p>
							</div>
							<div class="icon">
								<i class="ion ion-pie-graph"></i>
							</div>
							<a href="#" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<div class="col-md-6">

						<div class="box box-primary">
							<div class="box-header with-border">
								<i class="fa fa-bar-chart-o"></i>

								<h3 class="box-title">Terminal</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body">
								<div id="donut-chart" style="height: 300px;"></div>
							</div>
							<!-- /.box-body-->
						</div>
					</div>

					<div class="col-md-6">
						<div class="box box-primary">
							<div class="box-header with-border">
								<i class="fa fa-bar-chart-o"></i>

								<h3 class="box-title">Modal</h3>

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


	<script src="public/js/classie.js"></script>
	<script src="public/js/gnmenu.js"></script>
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
				['January', 900],
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
			ferroviario: {
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
	<script src="public/fremwork/AdminLTE-master/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="public/fremwork/AdminLTE-master/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="public/fremwork/AdminLTE-master/bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="public/fremwork/AdminLTE-master/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="public/fremwork/AdminLTE-master/dist/js/demo.js"></script>
	<!-- FLOT CHARTS -->
	<script src="public/fremwork/AdminLTE-master/bower_components/Flot/jquery.flot.js"></script>
	<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
	<script src="public/fremwork/AdminLTE-master/bower_components/Flot/jquery.flot.resize.js"></script>
	<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
	<script src="public/fremwork/AdminLTE-master/bower_components/Flot/jquery.flot.pie.js"></script>
	<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
	<script src="public/fremwork/AdminLTE-master/bower_components/Flot/jquery.flot.categories.js"></script>
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



			var donutData = [{
					label: 'Navio',
					data: 30,
					color: '#3c8dbc'
				},
				{
					label: 'Ferroviario',
					data: 20,
					color: '#0073b7'
				},
				{
					label: 'Rodoviario',
					data: 50,
					color: '#00c0ef'
				}
			]
			$.plot('#donut-chart', donutData, {
				series: {
					pie: {
						show: true,
						radius: 1,
						innerRadius: 0.5,
						label: {
							show: true,
							radius: 2 / 3,
							formatter: labelFormatter,
							threshold: 0.1
						}

					}
				},
				legend: {
					show: false
				}
			})
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