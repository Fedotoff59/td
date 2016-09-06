$(document).ready(function(){
	function nextImage(banner_class){
		$(banner_class+" .current").addClass("prev");
		return ($(banner_class+" .current").is(banner_class+".banner>img:last"))?$(banner_class+".banner>img:first"):$(banner_class+" .current").next('img');
	}
	function prevImage(banner_class){
		$(banner_class+" .current").addClass("prev");
		return ($(banner_class+" .current").is(banner_class+".banner>img:first"))?$(banner_class+".banner>img:last"):$(banner_class+" .current").prev('img');
	}
	function changeSlide(banner_class){
		nextImage(banner_class).addClass("current");
		$(banner_class+" .prev").fadeOut(500, function(){
			$(banner_class+" .prev").removeClass();
				$(banner_class+" .current").fadeIn(500);
		});
	}
	
	function start_banner(banner_class, time){
		var changing = setInterval(function(){changeSlide(banner_class)}, time);
		$(banner_class+" .arrow").click(function(){
			clearInterval(changing);
			var img = $(this).hasClass('left')?prevImage(banner_class):nextImage(banner_class);
			img.addClass('current');
			$(".prev").fadeOut(500, function(){
				$(".prev").removeClass();
					$(".current").fadeIn(500);
			});
			changing = setInterval(function(){changeSlide(banner_class)}, time);
		});
	}

	start_banner('.mainpage', 10000);
	start_banner('.about', 20000);
	start_banner('.history', 20000);
	/*function create_navigation(){
		$('.content').append('<div class="navigation"></div>');
		$('.block').each(function(){
			text = $(this).children('h1').text();
			class = 
			$('<a href="'++'">').appendTo('.navigation')
		})
	}*/
	$(".news_block .arrow").click(function scroll(){
		var page = $(this).attr('id').substr(6);
		if (page != undefined && page != ''){
			fields = JSON.stringify([""]);
			properties = JSON.stringify([""]);
			$.get(
				"/ajax/list.php",
				{
					IBLOCK_ID: 21,
					NEWS_COUNT: 3,
					TEMPLATE: "news",
					FIELDS: fields,
					PROPERTIES: properties,
					PAGEN_1: page
				},
				onSuccess
			);
			function onSuccess(data)
			{
				if ($(this).hasClass('left')){
					$('.news_block').html(data);
					$('.news_block .news:eq(0)').fadeTo(0, 0, function hide(){
						$(this).next().fadeTo(0, 0, hide);
					})
					$('.news_block .news:eq(0)').fadeTo(300, 1, function show(){
						$(this).next().fadeTo(300, 1, show);
					});
				}else{
					$('.news_block').html(data);
					$('.news_block .news:last-child').fadeTo(0, 0, function hide(){
						$(this).prev().fadeTo(0, 0, hide);
					})
					$('.news_block .news:last-child').fadeTo(300, 1, function show(){
						$(this).prev().fadeTo(300, 1, show);
					});
				}
				$(".news_block .arrow").click(scroll);
				$('.readmore').click(show_lightbox);
			}
			
		}
	});
	$('.partners_block .scroll').on('change', ":radio[name='scroll']", function scroll(){
		var page = $(this).attr("id").substr(6);

		fields = JSON.stringify(["PREVIEW_PICTURE"]);
		properties = JSON.stringify(["LINK"]);
		$.get(
			"/ajax/list.php",
			{
				IBLOCK_ID: 10,
				NEWS_COUNT: 5,
				TEMPLATE: "partners",
				FIELDS: fields,
				PROPERTIES: properties,
				PAGEN_1: page
			},
			onSuccess
		);
		function onSuccess(data)
		{
			$('.partners_block .partners .partner:eq(0)').fadeTo(300, 0, function hide(){
				$(this).next().fadeTo(300, 0, hide);
			})
			$('.partners_block').html("<div><h1>Наши партнеры</h1></div>"+data);
			$('.partners_block .partners .partner:eq(0)').fadeTo(0, 0, function hide(){
				$(this).next().fadeTo(0, 0, hide);
			})
			$('.partners_block .partners .partner:eq(0)').fadeTo(300, 1, function hide(){
				$(this).next().fadeTo(300, 1, hide);
			})
			$('.partners_block .scroll').on('change', ":radio[name='scroll']", scroll);
		}

		
	});

	function onLightboxShow(data)
	{
		$('.lightbox').html('<div class="close"></div>'+data);
		$('.lightbox').fadeIn(200);
		$('.close').click(function(){
			$('.lightbox').fadeOut(200);
		});
	}

	$('.capabilities h2').click(function(){
		$(this).toggleClass("passive active")
		$(this).next('ul').slideToggle(500);
	});

	$('.direction a').click(function(){
		var id = $(this).find('.person').data('id');
		var template = 'direction';
		var fields = JSON.stringify(["DETAIL_PICTURE", "NAME"]);
		var properties = JSON.stringify(["LOCATION"]);
		$.post(
			"/ajax/detail.php",
			{
				IBLOCK_ID: 11,
				ELEMENT_ID: id,
				TEMPLATE: template,
				FIELDS: fields,
				PROPERTIES: properties
			},
			onLightboxShow
		);
		$('.lightbox').fadeIn(200);
		$('.close').click(function(){
			$('.lightbox').fadeOut(200);
		});
		return false;
	});
	$('.reviews a.readmore').click(function(){
		//var id = $(this).children('.person').attr('id').substr(1,1);
		/*здесь идет подгрузка информации по ajax по idшнику*/
		/*
		$('.lightbox').html('<div class="close"></div>'+
			'<div class="lightbox_content"><img class="portrait" src="/img/astahov.png" alt="">'+
			'<h2>Павел Астахов</h2>'+
			'<p class="info">Уполномоченный при призеденте РФ по правам ребенка</p>'+
			'<p class="story">Рад приветствовать участников II Межрегионального слета культурно-образовательного проекта «»Тетрадка Дружбы», проходящего в Перми! <br /><br /> Сегодня особенно важно развивать, продвигать и использовать потенциал молодежи и детей, привлекая их к решению важных социальных задач, стоящих перед нашим государством! <br /><br />Поддержка особо значимых инициатив в вопросах развития молодежного волонтерского движения будет содействовать формированию активной гражданской позиции молодых граждан России. <br /><br />Уверен, что проблемы российских семей и детей будут решены лишь тогда, когда мы с вами будем не только слушать, но и слышать друг друга, реализуя государственные гарантии прав для каждого ребенка, привлекая к сотрудничеству и взаимодействию молодежь! <br /><br />Мы должны действовать на опережение, быть не только рядом с теми, кто нуждается в помощи, но и быть вместе с ними! Помощь детям должна приходить своевременно, опережая беду и неблагополучие! <br /><br />Желаю участникам слета плодотворной работы, интересных дискуссий, серьезных и важных решений!</p></div>');
		$('.lightbox').fadeIn(200);
		$('.close').click(function(){
			$('.lightbox').fadeOut(200);
		});*/
		return false;
	});
	$('.add a').click(function more_news(){
		if ($(this).attr('id') == '' || $(this).attr('id') == undefined){
			return false;
		}
		var page = $(this).attr('id').substr(6);
		var code = $(this).parent('.add').attr('id');
		var block = $(this).parents('.block');
		var parent = $(this).parent('.add');
		page++;
		var template;
		var news_count;
		var ID;
		switch(code){
			case 'LETTERS':
				news_count = 4;
				template = 'letters';
				fields = JSON.stringify([""]);
				properties = JSON.stringify(["POSITION"]);
				ID = 13;
				break;
			case 'STORIES':
				news_count = 4;
				template = 'stories';
				fields = JSON.stringify(["PREVIEW_PICTURE"]);
				properties = JSON.stringify(["SCHOOL", "CITY"]);
				ID = 15;
				break;
		}
		$.get(
			"/ajax/list.php",
			{
				IBLOCK_ID: ID,
				NEWS_COUNT: news_count,
				TEMPLATE: template,
				FIELDS: fields,
				PROPERTIES: properties,
				PAGEN_1: page
			},
			onSuccess
		);
		function onSuccess(data){
			parent.remove();
			$(block).append(data);
			$('.readmore').click(show_lightbox);
			$('.add a').click(more_news);
		}
		return false;
	});
	$('.success a').click(function(){
		//var id = $(this).children('.person').attr('id').substr(1,1);
		/*здесь идет подгрузка информации по ajax по idшнику*/
		/*$('.lightbox').html('<div class="close"></div>'+
			'<div class="lightbox_content"><img class="portrait" src="/img/dlaptev.png" alt="">'+
			'<h2 class="success_story">Данил Лаптев<br />'+
			'Школа №25 г. Пермь</h2>'+
			'<p class="story">В «Тетрадках Дружбы» Данил пишет с 5 класса. В 2015 году восьмиклассник Данил стал постановщиком спектакля, который был показан на сцене Пермского театра кукол. <br /><br />Данил всегда интересовался театром. Участвуя в программе «Тетрадка Дружбы», начинающий режиссер видел, что в рамках программы могут поддержать любое творческое начинание, поэтому и решился взяться за постановку «Ревизор» самостоятельно. Данил сам написал сценарий, руководил фотосъемкой, режиссировал постановку. После отборочного этапа работа Школы №25 оказалась в числе четырёх финалистов и была приглашена на краевой этап Фестиваля в Пермском театре кукол. В 2016 году Данил со своей командой решил поставить спектакль по мотивам пьесы Булгакова «Иван Васильевич». Пьесу также высоко оценили члены жюри. По итогам краевого этапа фестиваля спектакль «Иван Васильевич» одержал победу в номинации «Лучшее музыкальное оформление». <br /><br />Сам Данил пишет в социальных сетях:  <br />«Вот и прошла премьера нашего спектакля. Недели репетиций, множество часов в школе, горы выученного текста. Я думаю все получили, как и я, дозу адреналина на сцене. Из 55 спектаклей выбрали 11 и в эти 11 спектаклей вошли мы, это уже победа, но в этом году мы получили кубок, к этому мы шли давно, и вот у нас это получилось. Я как режиссёр очень удовлетворён. Я говорю всем, кто участвовал в создании "Ивана Васильевича" ОООгромное спасибо. Как я думаю, это наша с вами крайняя постановка, т.к многие после 9-го уходят. Но я надеюсь, что где -нибудь в коллежах, институтах вы будете активистами, инициаторами, а может быть даже и режиссёрами других спектаклей. Давайте пронесём через всю жизнь эту отрасль искусства-ТЕАТР. Не так часто мы задумываемся, какую роль играет искусство в нашей жизни, какое воздействие оно оказывает на человека. Все мы в какой-то степени актеры».</p></div>');
		$('.lightbox').fadeIn(200);
		$('.close').click(function(){
			$('.lightbox').fadeOut(200);
		});*/
		return false;
	});
	$('.readmore').click(show_lightbox);
	function show_lightbox(){
		var element_code = $(this).attr('id');
		if ($(this).hasClass('story')){
			template = 'story';
			fields = JSON.stringify(["PREVIEW_PICTURE"]);
			properties = JSON.stringify(["SCHOOL", "CITY"]);
		}
		if ($(this).hasClass('news_link')){
			template = 'news';
			fields = JSON.stringify(["DETAIL_PICTURE"]);
			properties = JSON.stringify([]);
		}
		if ($(this).hasClass('friends')){
			template = 'friends';
			fields = JSON.stringify([]);
			properties = JSON.stringify(["PHOTO", "VIDEO"]);
		}
		if ($(this).hasClass('letters')){
			template = 'letters';
			fields = JSON.stringify(["PREVIEW_PICTURE"]);
			properties = JSON.stringify(["POSITION"]);
		}
		$.post(
			"/ajax/detail.php",
			{
				ELEMENT_CODE: element_code,
				TEMPLATE: template,
				FIELDS: fields,
				PROPERTIES: properties
			},
			onLightboxShow
		);
		return false;
	}
});