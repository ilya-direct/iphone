<?
use yii\helpers\Html;
$this->title = 'Контакты';
$this->params['navbar']= true;
$this->params['breadcrumbs']= [];

?>
<div class="content shortcodes">
	<div class="container">
		<div class="element-wrap content-text margin-40">
			<h2>Убедительная просьба!</h2>
			<p>Перед приездом к нам обязательно позвоните и предупредите о своем визите. Благодарим за понимание!</p>
		</div>
		<div class="bs-row">
			<div class="col-md-6">
				<div class="title">
					<h3 class="lined text-xs-center">Контактная информация</h3>
				</div>
				<?=$this->render('contact-info')?>
				<div class="gap" style="height: 15px;"></div>
				<h4 class="text-xs-center margin-20">Следуйте за нами</h4>
				<ul class="b-social m-varicolored text-xs-center">
					<!--noindex-->
					<li><a class="vk" target="_blank" href="https://vk.com/" rel="nofollow"><i class="icon-vk"></i></a></li>
					<li><a class="fb" target="_blank" href="https://www.facebook.com/" rel="nofollow"><i class="icon-facebook"></i></a></li>
					<li><a class="yt" target="_blank" href="http://www.youtube.com/" rel="nofollow"><i class="icon-youtube"></i></a></li>
					<li><a class="is" target="_blank" href="https://instagram.com/"><i class="icon-instagram"></i></a></li>
					<li><a class="ya" target="_blank" href="https://old.maps.yandex.ru/" rel="nofollow"><span style="color:#f00">Я</span>ндекс</a></li>
					<li><a class="ya" target="_blank" href="https://www.google.ru/" rel="nofollow">
							<span style="color:#1B49EB">G</span><span style="color:#EA222D">o</span><span style="color:#F8B717">o</span><span style="color:#1B49EB">g</span><span style="color:#07AB1D">l</span><span style="color:#EA222D">e</span>
						</a></li>
					<!--/noindex-->
				</ul>
				<div class="gap" style="height: 15px;"></div>
			</div>
			<div class="col-md-6">
				<section class="b-widgets-wrap">
					<div class="title">
						<h3 class="lined text-xs-center">Обратная связь</h3>
					</div>
					<p>Мы были бы очень рады услышать ваше мнение о наших услугах.
						Вы можете оставить свой комментарий или задать любой вопрос
						воспользовавшись формой обратной связи.</p>
					<div class="contacts-feedback-form xform" id="contacts-form-feedback" data-url="/ajax/contacts-feedback/">
						<?=Html::beginForm('/ajax/contacts-feedback/','post',['class'=>"b-form bmstu-feedback-form ajax-form"]); ?>
							<input type="hidden" name="contacts-form-feedback" value="1">
							<div class="row bs-row">
								<div class="col-xs-12">
									<div class="input-wrap m-full-width">
										<i class="icon-user"></i>
										<input class="field-name" type="text" placeholder="Ваше имя (*)" name="name" data-content="" value="" required>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="input-wrap m-full-width">
										<i class="icon-envelope"></i>
										<input class="field-email" type="email" placeholder="Ваш Email (*)" name="email" data-content="" value="" required>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="input-wrap m-full-width">
										<i class="icon-pencil"></i>
										<input class="field-subject" type="subject" placeholder="Тема сообщения (*)" name="subject" data-content="" value="" required>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="textarea-wrap">
										<i class="icon-pencil"></i>
										<textarea class="field-message" placeholder="Текст сообщения (*)" name="message" data-content="" required></textarea>
									</div>
								</div>
							</div>
							<input class="btn-submit btn colored" type="submit" value="Отправить">
						<?=Html::endForm(); ?>
					</div>
				</section>
			</div>
		</div>
		<div class="gap" style="height: 20px;"></div>
		<div class="title">
			<h3 class="lined text-xs-center">Мы на карте</h3>
		</div>
		<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=xKpCubt0PqVC0hXK-XzxpBrgPvSP5MDu&height=400"></script>
		<div class="gap" style="height: 20px;"></div>
	</div>
</div>
 