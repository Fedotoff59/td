<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$GLOBALS["arrFilterMainTheme"] = array("PROPERTY_MAIN_VALUE" => 1);
$GLOBALS["arrFilterMain"] = array("PROPERTY_MAIN_VALUE" => 1);
?>
    <div class="banner mainpage">
        <img src="<?=SITE_SERVER_NAME?>/img/index/1.png" alt="" class="current">
        <img src="<?=SITE_SERVER_NAME?>/img/index/2.png" alt="" style="display:none;">
        <img src="<?=SITE_SERVER_NAME?>/img/index/3.png" alt="" style="display:none;">
        <img src="<?=SITE_SERVER_NAME?>/img/index/4.png" alt="" style="display:none;">
        <i class="arrow left"><img src="<?=SITE_SERVER_NAME?>/img/larrow.png" alt=""></i>
        <i class="arrow right"><img src="<?=SITE_SERVER_NAME?>/img/rarrow.png" alt=""></i>
    </div>
    <div class="map block">
        <img src="<?=SITE_SERVER_NAME?>/img/map.png" alt="">
        <div><h1>География организации</h1></div>
        <?$APPLICATION->IncludeComponent("bitrix:news.list","regions_map",Array(
                "CACHE_TYPE" => "N",
                "IBLOCK_ID" => "9",
                "NEWS_COUNT" => "54",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => Array("ID"),
                "PROPERTY_CODE" => Array("FIO")
            )
        );?>
    </div>
    <div class="join_us block">
        <img src="<?=SITE_SERVER_NAME?>/img/left_border.png" alt="" class="left_border">
        <img src="<?=SITE_SERVER_NAME?>/img/right_border.png" alt="" class="right_border">
        <div>
            <h1>Присоединяйся к нам!</h1>
        </div>
        <div class="way">
            <a href="http://">
                <img src="<?=SITE_SERVER_NAME?>/img/book.png" alt="">
            </a>
            <a href="http://">
                <h2>Подай заявку на участие<br>в программе «Тетрадка Дружбы»</h2>
                <p>и заказажи конкурсные тетради</p>
            </a>
        </div>
        <div class="way">
            <a href="http://">
                <img src="<?=SITE_SERVER_NAME?>/img/mark.png" alt="">
            </a>
            <a href="http://">
                <h2>Стань членом организации</h2>
                <p>и получи новые возможности<br>для развития</p>
            </a>
        </div>
        <div class="way">
            <a href="http://">
                <img src="<?=SITE_SERVER_NAME?>/img/heart.png" alt="">
            </a>
            <a href="http://">
                <h2>Стань волонтером</h2>
                <p>И получи бесценный опыт</p>
            </a>
        </div>
    </div>
    <div class="friends mini_block">
        <div>
            <h1>Знаменитые друзья</h1>
        </div>
        <?$APPLICATION->IncludeComponent("bitrix:news.list","friends",Array(
                "IBLOCK_ID" => "20",
                "NEWS_COUNT" => "4",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => Array("ID"),
                "PROPERTY_CODE" => Array("DESCRIPTION")
            )
        );?>
        <div class="president">
            <div>
                <h2>Отзыв президента России о<br>программе «Тетрадка Дружбы»</h2>
                <br>
                <a href="https://www.youtube.com/watch?v=_b9qomKJhrE">
                    <p>Смотреть видео</p>
                </a>
                <br>
                <a href="https:// life.ru/t/новости/142863">
                    <p>Читать на Life News</p>
                </a>
            </div>
            <img src="<?=SITE_SERVER_NAME?>/img/putin.png" alt="">
        </div>
    </div>
    <div class="about mini_block">
        <div>
            <h1>Что такое «Тетрадка Дружбы»</h1>
        </div>
        <? /*<h2>«Тетрадка Дружбы» - Всероссийская детская<br>программа, в которой каждый - яркая<br>индивидуальность, открытая творчеству</h2> */?>
        <div class="watch">
            <img src="<?=SITE_SERVER_NAME?>/img/watch.png" alt="">
        </div>
        <iframe style="width: 500px; height: 300px; " src="https://www.youtube.com/embed/HJ-mBI-_8xk" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="stories mini_block">
        <div>
            <h1>Истории успеха</h1>
        </div>
        <?$APPLICATION->IncludeComponent("bitrix:news.list","main_story",Array(
                "IBLOCK_ID" => "15",
                "NEWS_COUNT" => "1",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => Array("ID"),
                "PROPERTY_CODE" => Array("DESCRIPTION")
            )
        );
        ?>

        <div class="int_transfer">
            <img src="<?=SITE_SERVER_NAME?>/img/globe.png" alt=""><!--
						--><div>
                <h2>Международный обмен</h2>
                <p>Отправь «Тетрадку Дружбы» в<br>другую страну</p>
            </div>
        </div>
    </div>
    <div class="copybooks mini_block">
        <div>
            <h1>Яркие тетради</h1>
        </div>
        <div class="copybook">
            <a href="">
                <div class="border">
                    <h2>О друзьях</h2>
                    <br>
                    <div class="line"></div>
                    <br>
                    <br>
                    <p>«Тетрадки Дружбы» об отношениях со школьными товарищами</p>
                </div>
            </a>
        </div>
        <div class="copybook">
            <a href="">
                <div class="border">
                    <h2>О Родине</h2>
                    <br>
                    <div class="line"></div>
                    <br>
                    <br>
                    <p>«Тетрадки Дружбы» о стране и родном крае учащихся</p>
                </div>
            </a>
        </div>
        <div class="copybook">
            <a href="">
                <div class="border">
                    <h2>О семье</h2>
                    <br>
                    <div class="line"></div>
                    <br>
                    <br>
                    <p>«Тетрадки Дружбы» о любимых, родных и близких</p>
                </div>
            </a>
        </div>
        <div class="copybook">
            <a href="">
                <div class="border">
                    <h2>О природе</h2>
                    <br>
                    <div class="line"></div>
                    <br>
                    <br>
                    <p>«Тетрадки Дружбы» о животных и растениях</p>
                </div>
            </a>
        </div>
        <a href="">
            <p>Смотреть все «Тетрадки Дружбы»</p>
        </a>
    </div>
    <div class="news_block block">
        <?$APPLICATION->IncludeComponent("bitrix:news.list","news",Array(
                "IBLOCK_ID" => "21",
                "NEWS_COUNT" => "3",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => Array("ID")
            )
        );
        ?>
    </div>
    <div class="partners_block block">
        <div>
            <h1>Наши партнеры</h1>
        </div>
        <?$APPLICATION->IncludeComponent("bitrix:news.list","partners",Array(
                "IBLOCK_ID" => "10",
                "NEWS_COUNT" => "5",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => Array("ID"),
                "PROPERTY_CODE" => Array("LINK")
            )
        );
        ?>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>