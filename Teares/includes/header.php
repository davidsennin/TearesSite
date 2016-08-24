<!DOCTYPE html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
	<title>Teares</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript">
		$(function(){
		   //$(document).ready

		   $(".has_sub > a").click(function(e){
		    e.preventDefault();
		    var menu_li = $(this).parent("li");
		    var menu_ul = $(this).next("ul");

		    if(menu_li.hasClass("open")){
		      menu_ul.slideUp(350);
		      menu_ul.background = "#FFFFFF";
		      menu_li.removeClass("open")
		    }
		    else{
		      $("#nav > li > ul").slideUp(350);
		      $("#nav > li").removeClass("open");
		      menu_ul.slideDown(350);
		      menu_li.addClass("open");
		    }
		  });
		});


	</script>
</head>
<body>
	<div class="row">
		<div class="col-md-11"></div>
		<div>
			<?php 
				session_start();
				if(isset($_SESSION['user']) and isset($_SESSION['password'])) {
			?>
					<a href="rotinas/logout.php" class="btn btn-default">Logout</a>
			<?php
				} else {
			?>
					<a href="login.php" class="btn btn-default">Login</a>
			<?php
				}
			?>
		</div>
	</div>
	<div class="row">
		<!-- Sidebar -->
		<div class="sidebar col-md-2">
			<ul id="nav">
				<!-- Introdução -->
				<li>
					<a href="index.php">
						<i class="fa fa-home"></i>
						O que é um Tear
					</a>
				</li>
				<!-- História -->
				<li class="has_sub">
					<a href="#">
						<i class="fa fa-folder-open"></i>
						História
						<span class="pull_right">
							<i class="fa fa-chevron-right"></i>
						</span>
					</a>
					<ul style="display: none">
						<li>
							<a href="historia.php">Século 14</a>
						</li>
						<li>
							<a href="seculo16.php">Século 16</a>
						</li>
						<li>
							<a href="seculo18.php">Século 18</a>
						</li>
						<li>
							<a href="seculo19.php">Século 19</a>
						</li>
						<li>
							<a href="atualmente.php">Atualmente</a>
						</li>
						<li>
							<a href="tear-no-brasil.php">Tear no Brasil</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="tipos.php">
						<i class="fa fa-file-o"></i>
						Tipos de Tear
					</a>
				</li>
				
				<li>
					<a href="contato.php">
						<i class="fa fa-tasks"></i>
						Entre em Contato
					</a>					
				</li>
				<li>
					<a href="listar2.php">
						<i class="fa fa-tasks"></i>
						Teares à venda
					</a>					
				</li>
				<li>
					<a href="cadastro.php">
						<i class="fa fa-tasks"></i>
						Cadastrar teares
					</a>					
				</li>
			</ul>
		</div>