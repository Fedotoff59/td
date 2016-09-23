<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$GLOBALS["arrFilterMainTheme"] = array("PROPERTY_MAIN_VALUE" => 1);
$GLOBALS["arrFilterMain"] = array("PROPERTY_MAIN_VALUE" => 1);
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
            <?
            CModule::IncludeModule("fileman");
            CMedialib::Init();
            // 4 - is id of doc's collection, 1 - is id of doc
            $arRes = CMedialibItem::GetList(array('arCollections' => array("5"), 'ID' => Array(4)));
            $doc_path = $arRes[0]['PATH'];
            ?>
            <a href="<?=$doc_path?>" class="info-link">Справочная информация о членстве</a>
            <a name="form350073523" id="formAnchor350073523"></a>
            <script type="text/javascript" src="https://fs25.formsite.com/include/form/embedManager.js?350073523"></script>
            <script type="text/javascript">
                EmbedManager.embed({
                    key: "https://fs25.formsite.com/res/showFormEmbed?EParam=m%2FOmK8apOTDphb%2F8KCsVfX4C58M2Fb%2F7FzpUCZwnDno%3D&350073523",
                    width: "100%",
                    mobileResponsive: true
                });
            </script>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>