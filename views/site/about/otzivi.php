<?
use yii\helpers\Html;
$this->title = 'Отзывы';
$this->params['navbar']= true;
$this->params['breadcrumbs']= [$breadcrumb];

?>
<div class="content">
	<div class="container">
		<div class="bs-row">				<div class="col-md-9 col-lg-9">
				<div class="service-form xform" id="form-testimonial" data-url="/ajax/testimonial/">
					<h2 class="text-xs-center margin-20 lined">Оставьте свой отзыв</h2>
					<form class="b-form iq-testimonial-form margin-30"  action="/ajax/testimonial/" method="post">
						<input type="hidden" name="form-testimonial" value="1">
						<div class="row bs-row">
							<div class="col-sm-4 col-md-4 col-lg-4">
								<div class="input-wrap m-full-width">
									<i class="icon-user"></i>
									<input class="field-name" type="text" placeholder="Ваше имя (*)" name="name" data-content="" value="" required>
								</div>
								<div class="input-wrap m-full-width">
									<i class="icon-envelope"></i>
									<input class="field-email" type="email" placeholder="Ваш Email (*)" name="email" data-content="" value="" required>
								</div>
							</div>
							<div class="col-sm-8 col-md-8 col-lg-8">
								<div class="textarea-wrap">
									<i class="icon-pencil"></i>
									<textarea class="field-comment" placeholder="Текст сообщения (*)" name="comment" data-content="" required></textarea>
								</div>
							</div>
						</div>
						<hr class="dashed" style="margin-top: 0px;margin-bottom: 10px;">
						<div class="row bs-row">
							<div class="col-sm-4 col-md-3 col-sm-offset-4 col-md-offset-5">
								<input class="btn-submit btn-block btn big colored" type="submit" value="Отправить">
							</div>
						</div>
					</form>
				</div>
				<div class="element-wrap iq-pages-testimonials" id="testimonials-all">
					<h2 class="text-xs-center lined margin-20">Все отзывы</h2>
					<div class="b-recall">
						<div class="recall-text">Очень славные ребята у вас работают. Сломался Хуавей Хонор-6. Поехал в рем мастрскую на Щелковской. Пообещали починить за 5 000 рэ и 2 недели. Срок меня не устроил и я поехал сюда. В IQСервис у меня взяли телефон, и за 10 (десять) сек все исправили. Там разъем просто засорился. В общем, молодцы. Хорошие специалисты, а главное - честные!</div>
						<div class="recall-author"><span>Алексей</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text">Менял экран на Meizu mx4. Спасибо вам огромное!!! Все просто идеально!!! Теперь знаю куда обращаться за ремонтом техники! Очень рекомендую данный сервис. Вы лучшие!</div>
						<div class="recall-author"><span>Рустам</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text">Имел несчастье 2 раза подряд разбить телефон Meizu mx4. Поскольку сам живу в другом городе, для меня была очень важна оперативность ремонта. Выражаю огромную благодарность сотрудникам сервиса, которые вошли в положение, и произвели качественный и быстрый ремонт аппарата (у официальных представителей он занял бы на 13 дней больше). Также очень порадовала стоимость ремонта. Рекомендую данный сервис. Спасибо Вам большое!</div>
						<div class="recall-author"><span>Сергей</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text">Хочу выразить огромную благодарность ребятам данного сервиса!!! Телефон искупался в супе, принесла им в ремонт, взяли на диагностику (дали взамен телефон чтоб была на связи), быстро все сделали, почистили, я осталась довольна! Спасибо за оперативность и результат, всем советую данный сервис!!!</div>
						<div class="recall-author"><span>Анастасия</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text">Будучи в командировке в Москве, уронил свой Айфон. Естественно, стекло все "в сеточку". Обратился в несколько сервисных центров, в том числе в IQСервис - их цены выгодно отличались от конкурентов, меня это конечно же подкупило. Утром заехал, отдал телефон, в обед уже забрал из ремонта. Теперь как новенький. Ребятам респект!</div>
						<div class="recall-author"><span>Андрей</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text">Хочу выразить благодарность ребятам и iQСервис! После очередного падения моего айфон 5с он все таки приказал долго жить))) экран был разбит. Так как телефон нужен постоянно требовалась срочная замена экрана. Обратилась именно в это сервисный центр так как из многочисленных мне показалось что тут работают профессионалы знающие толк в своем деле. Еще было важно чтобы с деталью не обманули и поставили качественную запчасть. Собственно говоря весь ремонт длился 20 минут, поставили оригинальный дисплей! Теперь в случае чего только сюда) Всем рекомендую!</div>
						<div class="recall-author"><span>Елена</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text">Спасибо ребятам за качественно и быстро выполненную работу.Носил телефон в сервисный центр с разбитым дисплеем мне зарядили за дисплей 6500 еще 4000 р.за какой-то контроллер ,отнес ребятам в iq сервис ,оказалось что не какой контроллер менять не нужно,сделали только экран и намного дешевле.Подарили пленочку. Спасибо огромное!</div>
						<div class="recall-author"><span>Богославский Илья</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text">Хочу выразить благодарность коллективу сервисного центра iQСервис! Починили мой OnePlus One быстро и качественно. Рекомендую!;)</div>
						<div class="recall-author"><span>Екатерина</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text">Спасибо ребятам за помощь! Все отлично сделали. Разбил экран на айфон 6. Поставили действительно оригинал, так как для меня это было очень важно. </div>
						<div class="recall-author"><span>Александр</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text">Продиагностировали и починили кнопку в Nexus 5 за 15 минут. До этого обращался к "официалам", объявили 11 к. и замену платы. Жалею, что сразу не обратился в IQ сервис. Хорошие ребята. И поболтать приятно)</div>
						<div class="recall-author"><span>Антон</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text">Отличный сервис. Работают профессионалы! Делают быстро и качественно. Нареканий нет.</div>
						<div class="recall-author"><span>Troy Castor</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text">Чинил Nexus 5 со сложными заводским браком. После диагностики выяснилось, что придётся менять материнскую плату. Сейчас пишу с него, причин для недовольства нет. Работа выполнена хорошо и за разумные деньги.</div>
						<div class="recall-author"><span>Дмитрий</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text">Менял тачскрин (в сборе с дисплеем и рамкой) на Nexus 5. Не сказать, что дешевле, чем где-то ещё, но быстро, с оригинальными запчастями и качественной работой. Доволен. Вежливый персонал.</div>
						<div class="recall-author"><span>Андрей</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text">Отличный сервис. Поменяли дисплей на 5 нексусе и сделали приятную скидку.</div>
						<div class="recall-author"><span>Йоханес</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text">Все грамотно, четко и быстро!Лучший сервис, который я видел!</div>
						<div class="recall-author"><span>Константин</span></div>
					</div>
					<hr class="dashed" style="margin-top: 0px;">
				</div>
			</div>
			<?=$this->render('/site/about/_submenu')?>
		</div>		</div>
</div>