<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Настройки пользователя");
?>
<div class="block">
	<div>
		<h1>Личный кабинет пользователя</h1>
	</div>
	<div class="profile">
		<?$APPLICATION->IncludeComponent("bitrix:main.profile", "td", Array(
			"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
			),
			false
		);?>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>