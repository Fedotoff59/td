<!DOCTYPE html>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/style.css">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/scripts/script.js"></script>
		<title><?$APPLICATION->ShowTitle()?></title>
		<?$APPLICATION->ShowHead();?>
	</head>
	<body>
	<?$APPLICATION->ShowPanel()?>
		<div class="wrapper">
			<div class="content">
				<div class="header">
					<div class="old_link"><a href="http://old.tetradka.org.ru/" target="_blank">Предыдущая версия сайта</a></div>
					<div class="buttons">
						<ul>
							<?/*<li>Координаторам</li> |*/?>
							<li><a href="/personal/profile/">Вход</a></li>
						</ul>

					</div>
					<div class="logo">
						<a href="/"><img src="/img/Logo.png"/></a>
					</div>
					<ul class="menu">
						<li><a href="/about/">о нас</a></li>
						<li><a href="/organization/">отделения</a></li>
						<li><a href="/joinus/">присоединиться</a></li>
						<li><a href="/projects/">проекты</a></li>
						<?/*<li><a href="<?=SITE_SERVER_NAME?>/press">пресс-центр</a></li>*/?>
					</ul>
				</div>
				<div class="lightbox"></div>