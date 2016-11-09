<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0)
    LocalRedirect($backurl);

$APPLICATION->SetTitle("Авторизация");
?>
    <div class="block b-profile">
        <div>
            <h1>Авторизация</h1>
        </div>
        <div class="profile">
            <p>Вы зарегистрированы и успешно авторизовались.</p>

            <p>Вы можете настроить дополнительные параметры в личном кабинете</p>

            <p><a href="/personal/profile/">Войти в личный кабинет</a></p>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>