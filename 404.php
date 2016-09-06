<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");

?>
<div class="block notfound">
	<div>
		<h1>Страница не найдена</h1>
	</div>
	<p>Сожелаем, но по адресу, который Вы ввели, нет страницы. Пожалуйста, попробуйте начать пользоваться нашим сайтом заново, перейдя на <a href="<?=SITE_SERVER_NAME?>/">главную страницу</a></p>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>