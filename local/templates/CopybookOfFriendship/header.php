<!DOCTYPE html>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="stylesheet" type="text/css" href="<?=SITE_SERVER_NAME.SITE_TEMPLATE_PATH?>/css/style.css">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?=SITE_SERVER_NAME.SITE_TEMPLATE_PATH?>/scripts/script.js"></script>
		<title>Детско-молодёжная общероссийская общественная организация «Тетрадка Дружбы»</title>
		<?$APPLICATION->ShowHead();?>
	</head>
	<body>
	<?$APPLICATION->ShowPanel()?>
		<div class="wrapper">
			<div class="content">
				<div class="header">
					<div class="buttons">
						<ul>
							<li><a href="http://old.tetradka.org.ru/" target="_blank">Предыдущая версия сайта</a></li>
							<?/*
							|
							<li>Координаторам</li> |
							<li>Вход</li>
							*/?>
						</ul>
					</div>
					<div class="logo">
						<a href="<?=SITE_SERVER_NAME?>/"><img src="<?=SITE_SERVER_NAME?>/img/Logo.png"/></a>
					</div>
					<ul class="menu">
						<li><a href="<?=SITE_SERVER_NAME?>/about">о нас</a></li>
						<li><a href="<?=SITE_SERVER_NAME?>/organisation">отделения</a></li>
						<li><a href="<?=SITE_SERVER_NAME?>/joinus">присоединиться</a></li>
						<li><a href="<?=SITE_SERVER_NAME?>/projects">проекты</a></li>
						<li><a href="<?=SITE_SERVER_NAME?>/press">пресс-центр</a></li>
					</ul>
				</div>
				<div class="lightbox"></div>