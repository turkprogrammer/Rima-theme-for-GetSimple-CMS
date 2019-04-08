<?php
if(!defined('IN_GS'))
{
	die('you cannot load this page directly.');
	#@If my theme is good donate me plz: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=PG9ELJAE6JWBJ&source=url
}
/****************************************************
*
* @File: 			footer.inc.php
* @Package:		GetSimple
@Author TURK_BALASY https://github.com/turkprogrammer
*
*****************************************************/
?>

<!-- site footer -->

<div class="py-5 text-white" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(<?php get_theme_url(); ?>/images/bg-noon.jpg);	background-position: center center, center center;	background-size: cover, cover;	background-repeat: repeat, repeat; position: absolute; width:100%; ">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center align-self-center p-4">
				<p class="mb-5">
					<strong>
						<?php get_site_credits(); ?>
					</strong><br>
					<?php echo date('Y'); ?>
					<a href="<?php get_site_url(); ?>" >
						<?php get_site_name(); ?>
					</a>
				</p>
				<div class="row">
					<div class="col-md-1 d-flex align-items-center justify-content-around">
						<a href="#">
							<i class="d-block fa fa-facebook-official text-light fa-lg mx-2">
							</i>
						</a>
						<a href="#">
							<i class="d-block fa fa-instagram text-light fa-lg mx-2">
							</i>
						</a>
						<a href="#">
							<i class="d-block fa fa-google-plus-official text-light fa-lg mx-2">
							</i>
						</a>
						<a href="#">
							<i class="d-block fa fa-pinterest-p text-light fa-lg mx-2">
							</i>
						</a>
						<a href="#">
							<i class="d-block fa fa-reddit text-light fa-lg mx-2">
							</i>
						</a>
						<a href="#">
							<i class="d-block fa fa-twitter text-light fa-lg ml-2">
							</i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Подключение библиотеки jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script>
    $(function() {
        $('#before-load').find('i').fadeOut().end().delay(400).fadeOut('slow');
    });
</script>

</body>

</html>