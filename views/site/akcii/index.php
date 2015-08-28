<?
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = ' Акции';
$this->params['navbar']= true;
$this->params['breadcrumbs']= [];

?>

<div class="content">
	<div class="container" style="padding-top: 40px;padding-bottom:40px;">
		<div class="bs-row m-block port b-works">
			<div class="col-sm-6 col-md-4 col-lg-4 identity photography tehnology">
				<div class="work">
					<a href="<?=Url::to(['akcii/privedi_druga'])?>" class="work-image">
						<img src="/assets/images/skidki_Sankt_Peterburg_1384966201.61caae2a.jpg" alt="Приведи друга!">
						<div class="link-overlay icon-chevron-right"></div>
					</a>
					<a href="<?=Url::to(['akcii/privedi_druga'])?>" class="work-name">Приведи друга!</a>
					<div class="tags">
						Приведи друга и получи скидку на ремонт в 10%!
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4 identity photography tehnology">
				<div class="work">
					<a href="#" class="work-image">
						<img src="/assets/images/meizu.61caae2a.jpg" alt="Ремонт смартфонов Meizu">
						<div class="link-overlay icon-chevron-right"></div>
					</a>
					<a href="#" class="work-name">Ремонт смартфонов Meizu</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4 identity photography tehnology">
				<div class="work">
					<a href="#" class="work-image">
						<img src="/assets/images/refurbished_mac.61caae2a.jpg" alt="Ремонт техники Apple">
						<div class="link-overlay icon-chevron-right"></div>
					</a>
					<a href="#" class="work-name">Ремонт техники Apple</a>
				</div>
			</div>
		</div>
	</div>
</div>