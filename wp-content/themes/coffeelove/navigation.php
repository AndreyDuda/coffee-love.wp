<?php if (is_home()) : ?>
<nav class="navbar navbar-custom navbar-fixed-top">
<?php else: ?>
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-color qwe">
<?php endif; ?>
	<div class="container">

		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="" class="navbar-logo" style="display: none;">
				<img src="<?php echo get_template_directory_uri() ?>/assets/image/logo_catalog.png" alt="Coffee-Love для любителей кофе">
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
				<?php $link = (!is_home())? home_url() . '/':'';
				?>
                <li><a href="<?php echo $link;?>#intro">Главная </a></li>
                <li><a href="<?php echo $link;?>#how-it-works">Как мы работаем</a></li>
                <li><a href="<?php echo $link;?>#stats">Статистика</a></li>
                <li><a href="<?php echo $link;?>#about_us">О нас</a></li>
                <li><a href="<?php echo $link;?>#coffee">Кофе</a></li>
                <li><a href="<?php echo $link;?>#coffee-machines">АРЕНДА КОФЕМАШИН</a></li>
                <li><a href="<?php echo $link;?>#clients">Клиенты</a></li>
                <li><a href="<?php echo $link;?>#footer">Контакты</a></li>
            </ul>
        </div>
    </div>
	</div>
</nav>