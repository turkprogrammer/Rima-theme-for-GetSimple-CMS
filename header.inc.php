<?php
if(!defined('IN_GS')){
	die('you cannot load this page directly.');
}
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple ver.1.0.0
* @Action:		Rima theme for GetSimple CMS
  @Author TURK_BALASY https://github.com/turkprogrammer
  @If my theme is good donate me plz: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=PG9ELJAE6JWBJ&source=url
*
*****************************************************/

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- PAGE settings -->
	<link rel="icon" href="/favicon.ico">
	<title>
		<?php get_page_clean_title(); ?> - <?php get_site_name(); ?>
	</title>
	<?php get_header(); ?>
	<!-- CSS dependencies -->

	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/wireframe.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/custom.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
		<style>
        #before-load {
            position: fixed; /*фиксированное положение блока*/
            left: 0; /*положение элемента слева*/
            top: 0; /*положение элемента сверху*/
            right: 0; /*положение элемента справа*/
            bottom: 0; /*положение элемента снизу*/
            background: #fff; /*цвет заднего фона блока*/
            z-index: 1001; /*располагаем его над всеми элементами на странице*/
        }
        #before-load i {
            font-size: 140px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -70px 0 0 -70px;
        }
    </style>

</head>
