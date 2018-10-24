<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$slider = [];
//print_r(scandir(Url::home() . 'img/slider'));
for($i = 2; $i < count(scandir(getcwd() . '\img\slider')); $i++){
	array_push($slider, scandir(getcwd() . '\img\slider')[$i]);
}

$slider_path = Url::home() . 'img/slider/';
$slider_desc = [
	"ДЕТСКОЕ МОДЕЛЬНОЕ АГЕНТСТВО И ШКОЛА МОДЕЛЕЙ",
	"ДЛЯ ДЕТЕЙ ОТ 3-Х ДО 16-ТИ ЛЕТ",
	"STAR KIDS  - ИСПОЛНЯЕТ МЕЧТЫ!",
];
?>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner">
		<?php
		for ($i=0; $i < count($slider); $i++) { ?>
			<div class="carousel-item <?php if($i == 0){ echo "active"; } ?>">
				<img class="d-block w-100" src="<?php echo $slider_path . $slider[$i];?>" alt="First slide">
				<div class="black_wrapper"></div>
				<div class="carousel-caption d-none d-md-block caption_slider">
					<h2><?php echo $slider_desc[$i]; ?></h2>
				</div>
			</div>
			<?php
		}
		?>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="container cont_preim">
	<div class="row">
		<div class="col-md-12">
			<h2 class="preim_h">Преимущества работы с нами</h2>
		</div>
		<div class="col-md-12">
			<p>С нами работать перспективно и выгодно</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="preim">
				<div><i class="fas fa-briefcase"></i></div>
				<div><span>3 года работы</span></div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="preim">
				<div><i class="fas fa-building"></i></div>
				<div><span>5 филиалов</span></div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="preim">
				<div><i class="fas fa-map-marker-alt"></i></div>
				<div><span>7 направлений</span></div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="preim">
				<div><i class="fas fa-graduation-cap"></i></div>
				<div><span>Более 35 дисциплин</span></div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="preim">
				<div><i class="fas fa-handshake"></i></div>
				<div><span>258 постоянных партнеров</span></div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="preim">
				<div><i class="fas fa-project-diagram"></i></div>
				<div><span>423 проекта</span></div>
			</div>
		</div>
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
			<div class="preim">
				<div><i class="fas fa-users"></i></div>
				<div><span>Более 35 квалифицированных педагогов</span></div>
			</div>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>


	<div class="row about_middle_block div_violet">
		<div class="col-md-12">
			<h2 class="h2_main">
				Свяжитесь с нами!
			</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 mail_form">
			<form action="#" method="post">
				<span class="input input--chisato">
					<input class="input__field input__field--chisato" name="Name" type="text" id="input-13" placeholder=" " required="">
					<label class="input__label input__label--chisato" for="input-13">
						<span class="input__label-content input__label-content--chisato" data-content="Имя">Имя</span>
					</label>
				</span>
				<span class="input input--chisato">
					<input class="input__field input__field--chisato" name="Email" type="email" id="input-14" placeholder=" " required="">
					<label class="input__label input__label--chisato" for="input-14">
						<span class="input__label-content input__label-content--chisato" data-content="Email">Почта</span>
					</label>
				</span>
				<span class="input input--chisato">
					<input class="input__field input__field--chisato" name="Subject" type="text" id="input-15" placeholder=" " required="">
					<label class="input__label input__label--chisato" for="input-15">
						<span class="input__label-content input__label-content--chisato" data-content="Телефон">Телефон</span>
					</label>
				</span>
				<textarea name="Message" placeholder="Сообщение..." required=""></textarea>
				<input type="submit" value="Отправить">
			</form>

		</div>
	</div>
</div>

<div class="album py-5 bg-light cont_news">
	<div class="container">
		<div class="fresh-news-header all-block-header row">
			<div class="fresh-news-title kids-title col-md-12"><h2 class="h2_main">Свежие новости</h2></div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" data-holder-rendered="true">
					<div class="card-body">
						<p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" data-holder-rendered="true">
					<div class="card-body">
						<p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" data-holder-rendered="true">
					<div class="card-body">
						<p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
						
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" data-holder-rendered="true">
					<div class="card-body">
						<p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" data-holder-rendered="true">
					<div class="card-body">
						<p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" data-holder-rendered="true">
					<div class="card-body">
						<p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
						
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" data-holder-rendered="true">
					<div class="card-body">
						<p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" data-holder-rendered="true">
					<div class="card-body">
						<p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?php echo Url::base().'/'; ?>img/starkids/main_page/9H8A3845.JPG" data-holder-rendered="true">
					<div class="card-body">
						<p class="news_text_mavl">Семейная фотосессия сегодня прошла у семи Фроловых.</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="album py-5" style="background-color: #e8e8e8;">
	<div class="container">
		<div class="fresh-news-header all-block-header row">
			<div class="fresh-news-title kids-title col-md-12">
				<h2 class="h2_main">Новые видео</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<iframe style="width: 100%;" src="https://www.youtube.com/embed/dfR6UBEBVvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<div class="card-body">
						<p class="news_text_mavl">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<iframe style="width: 100%;" src="https://www.youtube.com/embed/dfR6UBEBVvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<div class="card-body">
						<p class="news_text_mavl">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<iframe style="width: 100%;" src="https://www.youtube.com/embed/dfR6UBEBVvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<div class="card-body">
						<p class="news_text_mavl">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						
					</div>
				</div>
			</div>

			
		</div>


		<div class="row about_middle_block div_violet">
			<div class="col-md-12">
				<h2 class="h2_main">
					Свяжитесь с нами!
				</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 mail_form">
				<form action="#" method="post">
					<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="Name" type="text" id="input-13" placeholder=" " required="">
						<label class="input__label input__label--chisato" for="input-13">
							<span class="input__label-content input__label-content--chisato" data-content="Имя">Имя</span>
						</label>
					</span>
					<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="Email" type="email" id="input-14" placeholder=" " required="">
						<label class="input__label input__label--chisato" for="input-14">
							<span class="input__label-content input__label-content--chisato" data-content="Email">Почта</span>
						</label>
					</span>
					<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="Subject" type="text" id="input-15" placeholder=" " required="">
						<label class="input__label input__label--chisato" for="input-15">
							<span class="input__label-content input__label-content--chisato" data-content="Телефон">Телефон</span>
						</label>
					</span>
					<textarea name="Message" placeholder="Сообщение..." required=""></textarea>
					<input type="submit" value="Отправить">
				</form>

			</div>
		</div>
	</div>
</div>

