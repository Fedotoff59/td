<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$GLOBALS["arrFilterMainTheme"] = array("PROPERTY_MAIN_VALUE" => 1);
$GLOBALS["arrFilterMain"] = array("PROPERTY_MAIN_VALUE" => 1);
use Bitrix\Main\Diag\Debug;
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addString('<link rel="stylesheet" type="text/css" href="'.SITE_TEMPLATE_PATH.'/vendor/jquery.formstyler/jquery.formstyler.css">');
Asset::getInstance()->addString('<script src="'.SITE_TEMPLATE_PATH.'/vendor/jquery.formstyler/jquery.formstyler.js"></script>');
Asset::getInstance()->addString('<script src="'.SITE_TEMPLATE_PATH.'/scripts/styler.js"></script>');
$APPLICATION->SetTitle("Заявка на принятие в члены ДМООО «Тетрадка Дружбы»");
?>
    <div class="block b-form">
        <div>
            <h1>Заявка на принятие в члены ДМООО «Тетрадка Дружбы»</h1>
        </div>
        <div class="memberform-block">
            <div class="memberform-row">
                <div class="memberform-row-caption">
                    <h2>Регион</h2>
                </div>
                <div class="memberform-row-input">
                    <select>
                        <option>-- Выберите --</option>
                    </select>
                </div>
            </div>

            <div class="memberform-row">
                <div class="memberform-row-caption">
                    <h2>Населенный пункт</h2>
                </div>
                <div class="memberform-row-input">
                    <select>
                        <option>-- Выберите --</option>
                    </select>
                </div>
            </div>

            <div class="memberform-row">
                <div class="memberform-row-caption">
                    <h2>Образовательное учреждение (место работы)</h2>
                </div>
                <div class="memberform-row-input">
                    <input class="styler" type="text" />
                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>