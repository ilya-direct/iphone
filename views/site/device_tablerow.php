<tr <?=$display ? '': 'style="display:none;"'?>>
	<td class="col-1">
		<div class="iq-service-title">
			<?=$serv['name']?>
		</div>
		<div class="collapsible collapse-xs collapsed">
			<div class="collapse-container">
				<div class="iq-service-details">
					<?=$serv['smalldesc']?>
					<? if(!empty($serv['warning'])):?>
						<p class="b-message message-info iq-service-info">
							<i class="icon-warning-sign"></i>
							<?=$serv['warning']?>
						</p>
					<? endif;?>
				</div>
			</div>
			<a href="#" class="collapse-open">
				<i class="icon-caret-down"></i>
				<span>Подробнее</span>
			</a>
			<a href="#" class="collapse-close">
				<i class="icon-caret-up"></i>
				<span>Скрыть</span>
			</a>
		</div>
	</td>
	<td class="col-2 centered iq-service-price">
		<? if($serv['price']==='Бесплатно'){ ?>
		<span class="blue"><b>Бесплатно</b></span>
		<? }elseif($serv['price']==='Уточняйте'){ ?>
			<a href="#"
			   class="btn-ajax-popup b-dashed"
			   data-fancybox-href="/ajax/service-inform-price/"
			   data-params="resource-id=722&group-id=1&price-id=6"><b>Уточняйте</b></a>
		<? }else{ ?>
			<b> <span><?=$serv['price']?></span> <i class="icon-rub"></i></b>
			<div class="buttons">
				<!-- Кнопка "Заказать сейчас" -->
				<a href="#"
				   class="btn btn-xs small btn-ajax-popup"
				   style="margin:10px 0 0;font-size:11px;padding:1px 7px;white-space:pre;"
				   data-fancybox-href="/ajax/service-order-item/"
				   data-params="device_id=<?=$device_id?>&service_id=<?=$serv['id']?>"><i class="icon-ok"></i>Заказать сейчас</a>
			</div>
		<? } ?>

	</td>
	<td class="col-3 centered">
		<?=$serv['duration']?>
	</td>
	<td class="col-4 centered">
		<?=$serv['guaranty']?>
	</td>
</tr>