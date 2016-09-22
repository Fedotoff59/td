<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$GLOBALS["arrFilterMainTheme"] = array("PROPERTY_MAIN_VALUE" => 1);
$GLOBALS["arrFilterMain"] = array("PROPERTY_MAIN_VALUE" => 1);
use Bitrix\Main\Diag\Debug;
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addString('<link rel="stylesheet" type="text/css" href="'.SITE_TEMPLATE_PATH.'/vendor/jquery.formstyler/jquery.formstyler.css">');
Asset::getInstance()->addString('<script src="'.SITE_TEMPLATE_PATH.'/vendor/jquery.formstyler/jquery.formstyler.js"></script>');
Asset::getInstance()->addString('<script src="'.SITE_TEMPLATE_PATH.'/scripts/styler.js"></script>');
?>
    <div class="block b-form">
        <div>
            <h1>Заявка на принятие в члены ДМООО «Тетрадка Дружбы»</h1>
        </div>
        <div class="member-form-block">

        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>