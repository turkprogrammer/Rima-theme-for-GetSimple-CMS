<?php
if(!defined('IN_GS'))
{
	die('you cannot load this page directly.');
	#@If my theme is good donate me plz: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=PG9ELJAE6JWBJ&source=url
}
/****************************************************
*
* @File: 	    template.inc.php
* @Package:		GetSimple

*@Author TURK_BALASY https://github.com/turkprogrammer
*****************************************************/
?>
<!-- include the header template -->

<?php include('header.inc.php'); ?>

<body id="<?php get_page_slug(); ?>">
<div id="before-load">
    <i class="fa fa-spinner fa-spin"></i>
</div>

<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
		<a class="navbar-brand text-primary" href="<?php get_site_url(); ?>">
			<i class="fa d-inline fa-lg fa-circle-o">
			</i>
			<b>
				<?php get_site_name(); ?>
			</b>
		</a>
		<button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar5">
			<span class="navbar-toggler-icon">
			</span>
		</button>
		<div class="collapse navbar-collapse" id="navbar5">
			<ul class="navbar-nav ml-auto">
				<li>
					<a href="<?php get_site_url(); ?>" class="nav-link active text-dark">
						Главная
					</a>
				</li>
				<li>
					<a class="nav-link active text-dark" href="/contact/">
						Обратная связь
					</a>
				</li>
				<li>
					<a class="nav-link active text-dark" href="/about/">
						О сайте
					</a>
				</li>
				<li>
					<a class="nav-link active text-dark" href="/price/">
						Прайс лист
					</a>
				</li>
				<li>
					<a class="nav-link active text-dark" href="/features/">
						Все опции темы
						<span class="badge badge-light">
							<i class="fa fa-check">
							</i>
						</span>
					</a>
				</li>
			</ul>

		</div>

	</div>
</nav>



<div class="h-50 d-flex align-items-center bg-light" style="	background-image: url(<?php get_theme_url(); ?>/images/img-02.jpg);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
	<div class="container">
		<div class="row">
			<div class="mx-auto text-center col-md-6">
				<h1 class="display-3 text-light">
					<?php get_page_title(); ?>
				</h1>
				<p class="lead text-light">
					<?php get_component('lead');	?>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="py-5">
<div class="container">
	<div class="row">

		<div class="p-4 col-lg-8 ">
			<ol id="breadcrumb">
			
			<?php if (return_page_slug() == 'index') {
				
echo <<<'EOD'
	<li class="current">
					<a href="/">
						<i class="fa fa-home">
						</i>
						
					</a>
				</li>
EOD;
				
				
			}else {
				echo <<<'EOD'
	<li >
					<a href="/">
						<i class="fa fa-home">
						</i>
						
					</a>
				</li>
EOD;
			}
			
			?>

				


				<li class="current">
					<a href="#">
						<?php get_page_clean_title(); ?>
					</a>
				</li>
			</ol>

			<h2>
				<?php get_page_title(); ?>
			</h2>
			<?php get_page_content(); ?>
			<p class="badge badge-secondary">
				Published on
				<time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate>
					<?php get_page_date('F jS, Y'); ?>
				</time>
			</p>
			
		</div>
		<hr/>
		<div class="col-md-4 align-self-top">

			<?php get_component('sidebar');	?>
				

		</div>
	</div>
</div>
<!-- include the footer template -->
<?php include('footer.inc.php'); ?>