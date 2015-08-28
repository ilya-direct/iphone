<?
use yii\helpers\Html;
$this->title = 'Приведи друга';
$this->params['navbar']= true;
$this->params['breadcrumbs']= [$breadcrumb];

?>
<div class="content">
	<div class="container">
		<div class="bs-row">				<div class="col-md-9 col-lg-9">

				<div class="element-wrap content-text">
					<h2>Приведи друга и получи скидку на ремонт в 10%!</h2>
				</div>
				<div class="element-wrap content-text">
					<div class="img-wrap">
						<img class="centered" src="/assets/images/skidki_Sankt_Peterburg_1384966201.0c38a79c.jpg" alt="Приведи друга!">
					</div>
				</div>
			</div>
			<?=$this->render('/site/akcii/_submenu')?>
		</div>
	</div>
</div>