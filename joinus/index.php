<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$GLOBALS["arrFilterMainTheme"] = array("PROPERTY_MAIN_VALUE" => 1);
$GLOBALS["arrFilterMain"] = array("PROPERTY_MAIN_VALUE" => 1);
?>
				<div class="block why">
					<div>
						<h1>Почему мы создали организацию на базе программы «Тетрадка Дружбы»</h1>
					</div>
					<div class="reason">
						<img src="<?=SITE_SERVER_NAME?>/img/bluereason.png" alt=""><!--
						--><p>Чтобы увидеть новые перспективы</p>
					</div>
					<div class="reason">
						<img src="<?=SITE_SERVER_NAME?>/img/greenreason.png" alt=""><!--
						--><p>Чтобы быть независимыми</p>
					</div>
					<br>
					<div class="reason">
						<img src="<?=SITE_SERVER_NAME?>/img/yellowreason.png" alt=""><!--
						--><p>Чтобы предоставлять больше возможностей</p>
					</div>
					<div class="reason">
						<img src="<?=SITE_SERVER_NAME?>/img/pinkreason.png" alt=""><!--
						--><p>Чтобы стремительно развиваться</p>
					</div>
				</div>
				<div class="join_us block">
					<img src="<?=SITE_SERVER_NAME?>/img/left_border.png" alt="" class="left_border">
					<img src="<?=SITE_SERVER_NAME?>/img/right_border.png" alt="" class="right_border">
					<div>
						<h1>Присоединяйся к нам!</h1>
					</div>
					<div class="way">
						<a href="javascript:void(null);">
							<img src="<?=SITE_SERVER_NAME?>/img/book.png" alt="">
						</a>
						<a href="javascript:void(null);">
							<h2>Подать заявку на участие<br>в программе «Тетрадка Дружбы»</h2>
							<p>и заказать конкурсные тетради</p>
						</a>
					</div>
					<div class="way">
						<a href="http://">
							<img src="<?=SITE_SERVER_NAME?>/img/mark.png" alt="">
						</a>
						<a href="javascript:void(null);">
							<h2>Стать членом организации</h2>
							<p>и получить новые возможности<br>для развития</p>
						</a>
					</div>
					<div class="way">
						<a href="javascript:void(null);">
							<img src="<?=SITE_SERVER_NAME?>/img/heart.png" alt="">
						</a>
						<a href="http://">
							<h2>Стать волонтером</h2>
							<p>И получить бесценный опыт</p>
						</a>
					</div>
				</div>
				<div class="success block">
					<div><h1>Истории успеха участников</h1></div>
					<?$APPLICATION->IncludeComponent("bitrix:news.list","stories",Array(
							"IBLOCK_ID" => "15",
							"NEWS_COUNT" => "4",
							"SORT_BY1" => "ACTIVE_FROM",
							"SORT_ORDER1" => "DESC",
							"SORT_BY2" => "SORT",
							"SORT_ORDER2" => "ASC",
							"FILTER_NAME" => "",
							"FIELD_CODE" => Array("ID"),
							"PROPERTY_CODE" => Array("SCHOOL", "CITY")
						)
					);
					?>
					<?/*
					<a href="javascript:void(null);">
						<div class="person">
							<img src="<?=SITE_SERVER_NAME?>/img/dlaptev.png" alt="">
							<h2>Данил Лаптев</h2>
							<p>Школа №25, г. Пермь</p>
						</div>
					</a>
					<a href="javascript:void(null);">
						<div class="person">
							<img src="<?=SITE_SERVER_NAME?>/img/jnovoselova.png" alt="">
							<h2>Юлия Новоселова</h2>
							<p>Школа №116, г. Пермь</p>
						</div>
					</a>
					<a href="javascript:void(null);">
						<div class="person">
							<img src="<?=SITE_SERVER_NAME?>/img/akovalenskaya.png" alt="">
							<h2>Анастасия Коваленская</h2>
							<p>Гимназия №33, г. Пермь</p>
						</div>
					</a>
					<a href="javascript:void(null);">
						<div class="person">
							<img src="<?=SITE_SERVER_NAME?>/img/jklugeva.png" alt="">
							<h2>Юлия Клюжева</h2>
							<p>Школа №33, г. Владимир</p>
						</div>
					</a>
					*/?>
					<?/*<div class="add"><a href="http://"><img src="<?=SITE_SERVER_NAME?>/img/add.png" alt=""></a></div>*/?>
				</div>
				<div class="capabilities block">
					<div><h1>Возможности участников Детско-молодёжной общероссийской</h1><h1>общественной организации «Тетрадка Дружбы»</h1></div>
					<h2 class="people passive">Члены организации (дети и молодежь 8-30 лет)</h2>
					<ul class="cap_list">
						<li>
							<p align="left">
								Размещение на обложках главного атрибута программы и организации - «Тетрадках Дружбы».
							</p>
						</li>
						<li>
							<p align="left">
								Размещение логотипа на атрибутике участников программы (рюкзаки, ветровки, футболки поло, органайзеры и т.д.).
							</p>
						</li>
						<li>
							<p align="left">
								Позиционирование компании на региональных и всероссийских мероприятиях в рамках деятельности организации «Тетрадка Дружбы».
							</p>
						</li>
						<li>
							<p align="left">
								Проведение совместных социально значимых акций и мероприятий.
							</p>
						</li>
						<li>
							<p align="left">
								Позиционирование в Интернет-пространстве,&nbsp;e-mail&nbsp;рассылки.
							</p>
						</li>
						<li>
							<p align="left">
								Стать участником, экспертом, членом жюри всероссийских и международных мероприятий, в том числе принимать участие в международных мероприятиях Европейского отделения Организации Объединенных Наций на тему развития добровольчества, реализации детских молодежных социально-значимых инициатив, продвижения целей устойчивого развития.
							</p>
						</li>
						<li>
							<p align="left">
								Продвигать продукцию компании на региональных и всероссийских площадках в рамках реализации программы «Тетрадка Дружбы».
							</p>
						</li>
					</ul>
					<h2 class="people passive">Педагоги и координаторы организации</h2>
					<ul class="cap_list">
						<li>
							<p align="left">
								Принять участие в конкурсе грантов для школьников.
							</p>
						</li>
						<li>
							<p align="left">
								Получить путёвку в лагерь «Вектор Дружбы».
							</p>
						</li>
						<li>
							<p align="left">
								Получить поддержку для творческого и профессионального роста (дополнительное образование).
							</p>
						</li>
						<li>
							<p align="left">
								Принимать участие в мастер-классах от координаторов программы в регионе и руководителей программы в рамках Всероссийских мероприятий.
							</p>
						</li>
						<li>
							<p align="left">
								Войти в команду кураторов организации в своём регионе.
							</p>
						</li>
						<li>
							<p align="left">
								Стать представителем своего координационного центра в других городах (волонтёрские поездки внутри региона, в другие регионы России по обмену опытом).
							</p>
						</li>
						<li>
							<p align="left">
								Стать волонтёром Международного форума «Доброволец России».
							</p>
						</li>
						<li>
							<p align="left">
								Принимать участие в Международных мероприятиях Европейского отделения Организации Объединенных Наций на тему развития добровольчества, реализации детских молодежных социально-значимых инициатив, продвижения целей устойчивого развития.
							</p>
						</li>
						<li>
							<p align="left">
								Принимать участие во Всероссийских мероприятиях в рамках реализации программы «Тетрадка Дружбы».
							</p>
						</li>
						<li>
							<p align="left">
								Получать рекомендательные письма для соискания стипендий, участия в конкурсах, при поступлении в ВУЗы и т.д.;
							</p>
						</li>
						<li>
							<p align="left">
								Приобретать фирменную атрибутику организации «Тетрадка Дружбы» со специальной скидкой для членов организации.
							</p>
						</li>
					</ul>
					<h2 class="people passive">Родители</h2>
					<ul class="cap_list">
						<li>
							<p align="left">
								Возможность приобретать со скидкой методические материалы по семейному воспитанию.
							</p>
						</li>
						<li>
							<p align="left">
								Получать подписку на рассылку о мероприятиях и конкурсах, в которых может принять участие ребёнок.
							</p>
						</li>
						<li>
							<p align="left">
								Принимать участие в интерактивных, обучающих площадках, мастер-классах, в рамках региональных и всероссийских мероприятиях (семинары, слеты, форумы, смены всероссийского лагеря «Вектор Дружбы» и т.д.)
							</p>
						</li>
						<li>
							<p align="left">
								Принимать участие в Международных мероприятиях Европейского отделения Организации Объединенных Наций на тему развития добровольчества, реализации детских молодежных социально-значимых инициатив, продвижения целей устойчивого развития.
							</p>
						</li>
						<li>
							<p align="left">
								Принимать участие во Всероссийских мероприятиях в рамках реализации программы «Тетрадка Дружбы».
							</p>
						</li>
						<li>
							<p align="left">
								Приобретать фирменную атрибутику организации «Тетрадка Дружбы» со специальной скидкой для членов организации.
							</p>
						</li>
					</ul>
					<h2 class="people passive">Парнеры организации</h2>
					<ul class="cap_list">
						<li>
							<p align="left">
								Размещение на обложках главного атрибута программы и организации - «Тетрадках Дружбы».
							</p>
						</li>
						<li>
							<p align="left">
								Размещение логотипа на атрибутике участников программы (рюкзаки, ветровки, футболки поло, органайзеры и т.д.).
							</p>
						</li>
						<li>
							<p align="left">
								Позиционирование компании на региональных и всероссийских мероприятиях в рамках деятельности организации «Тетрадка Дружбы».
							</p>
						</li>
						<li>
							<p align="left">
								Проведение совместных социально значимых акций и мероприятий.
							</p>
						</li>
						<li>
							<p align="left">
								Позиционирование в Интернет-пространстве,&nbsp;e-mail&nbsp;рассылки.
							</p>
						</li>
						<li>
							<p align="left">
								Стать участником, экспертом, членом жюри всероссийских и международных мероприятий, в том числе принимать участие в международных мероприятиях Европейского отделения Организации Объединенных Наций на тему развития добровольчества, реализации детских молодежных социально-значимых инициатив, продвижения целей устойчивого развития.
							</p>
						</li>
						<li>
							<p align="left">
								Продвигать продукцию компании на региональных и всероссийских площадках в рамках реализации программы «Тетрадка Дружбы».
							</p>
						</li>
					</ul>
				</div>
				<div class="block open">
					<div>
						<a href="javascript:void(null);">
							<img src="<?=SITE_SERVER_NAME?>/img/earth.png" alt="">
						</a>
						<a href="javascript:void(null);">
							<p>Открыть региональное отделение</p>
						</a>
					</div>
					<div>
						<a href="javascript:void(null);">
							<img src="<?=SITE_SERVER_NAME?>/img/location_local.png" alt="">
						</a>
						<a href="javascript:void(null);">
							<p>Открыть местное отделение</p>
						</a>
					</div>
					<div>
						<a href="javascript:void(null);">
							<img src="<?=SITE_SERVER_NAME?>/img/doc1.png" alt="">
						</a>
						<a href="javascript:void(null);">
							<p>Анкета для получения специальной возможности</p>
						</a>
						<a href="javascript:void(null);">
							<p>Скачать</p>
						</a>
					</div>
				</div>
				<?/*
				<div class="docs block">
					<div><h1>Методические материалы</h1></div>
					<p>Бесплатные материалы</p>
					<a href='#'>
						<div class="doc">
							<img src="<?=SITE_SERVER_NAME?>/img/pdf1.png" alt="">
							<h2>Дорожная карта</h2>
							<p>Дорожная карта развития программы в регионе</p>
						</div>
					</a>
					<a href='#'>
						<div class="doc">
							<img src="<?=SITE_SERVER_NAME?>/img/pdf2.png" alt="">
							<h2>Тетрадка Дружбы </h2>
							<p>Универсальная презентация деятельности организации «Тетрадка Дружбы»</p>
						</div>
					</a>
					<a href='#'>
						<div class="doc">
							<img src="<?=SITE_SERVER_NAME?>/img/pdf3.png" alt="">
							<h2>Атрибутика участников</h2>
							<p>Отличительная атрибутика и знаки отличия членов организации «Тетрадка Дружбы»</p>
						</div>
					</a>
					<a href='#'>
						<div class="doc">
							<img src="<?=SITE_SERVER_NAME?>/img/pdf4.png" alt="">
							<h2>Атрибутика почетных членов организации</h2>
							<p>«Отличительная атрибутика и знаи отличия почетных членов организации «Тетрадка дружбы»</p>
						</div>
					</a>
					<div class="add"><a href="http://"><img src="<?=SITE_SERVER_NAME?>/img/add.png" alt=""></a></div>
				</div>
				<div class="buy block">
					<p>Приобрести</p>
					<a href='#'>
						<div class="item">
							<img src="<?=SITE_SERVER_NAME?>/img/method.png" alt="">
							<h2>Методическое пособие</h2>
							<p>Механизм реализации программы «Тетрадка Дружбы» на территории субъекта Российской Федерации</p>
							<p class="price">500 руб.</p>
						</div>
					</a>
					<a href='#'>
						<div class="item">
							<img src="<?=SITE_SERVER_NAME?>/img/book1.png" alt="">
							<h2>Книга</h2>
							<p>Механизм реализации программы «Тетрадка Дружбы» на территории субъекта Российской Федерации</p>
							<p class="price">450 руб.</p>
						</div>
					</a>
					<a href='#'>
						<div class="item">
							<img src="<?=SITE_SERVER_NAME?>/img/book2.png" alt="">
							<h2>Книга</h2>
							<p>Механизм реализации программы «Тетрадка Дружбы» на территории субъекта Российской Федерации</p>
							<p class="price">1500 руб.</p>
						</div>
					</a>
					<a href='#'>
						<div class="item">
							<img src="<?=SITE_SERVER_NAME?>/img/book3.png" alt="">
							<h2>Книга</h2>
							<p>Механизм реализации программы «Тетрадка Дружбы» на территории субъекта Российской Федерации</p>
							<p class="price">320 руб.</p>	
						</div>
					</a>
					<div class="add"><a href="http://"><img src="<?=SITE_SERVER_NAME?>/img/add.png" alt=""></a></div>
				</div>
				*/?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>