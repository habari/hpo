<?php namespace Habari; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php Options::out('title'); ?> <?php if( $request->display_page && isset($post) ) { echo ' &mdash; ' .  $post->title; } ?><?php echo $title; ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="<?php Site::out_url('theme'); ?>/style.css" media="screen" type="text/css">
<link rel="Shortcut Icon" href="<?php Site::out_url('theme'); ?>/favicon.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="//get.pictos.cc/fonts/2135/9" rel="stylesheet" type="text/css">

<script>
	if ( typeof(HPO) == "undefined" ) { HPO = {}; }
		HPO.url = "<?php Site::out_url('habari'); ?>";
		HPO.WSSE = <?php echo json_encode(Utils::WSSE()); ?>;
		HPO.WSSE_update = '<?php echo URL::get('auth_ajax', array('context' => 'wsse_update')); ?>';
</script>

<?php echo $theme->header(); ?>
</head>
<body>
<nav id="mobile_menu">
	<ul>
		<?php echo $theme->top_level_menu(); ?>
	</ul>
</nav>
<header>
	<div class="container">
		<div id="mobile_menu_trigger">
			<a id="show_menu" href="#menu"><i class="icon-menu">q</i></a>
		</div>
		<div class="logo">
			<a href="<?php Site::out_url('habari'); ?>" title="Habari Project"><span>Habari</span> <img src="<?php Site::out_url('theme'); ?>/images/habari_logo.png"></a>
		</div>
		<ul id="menu">
			<?php echo $theme->top_level_menu(); ?>
			<li class="search_field"><form method="get" action="<?php URL::out('display_search'); ?>"><input type="text" value="<?php if ( isset( $criteria ) ) { echo htmlentities($criteria, ENT_COMPAT, 'UTF-8'); } ?>" name="criteria" placeholder="Search"></form></li>
		</ul>
	</div>
</header>
<?php if( $request->display_home ) { ?>
<div id="intro">
	<div class="bg"></div>
	<div class="container">
		<h1>Spread the News!</h1>
		<h2>Nimble, flexible, powerful. Say hello to Habari.</h2>
		<div class="offset-by-one columns">
			<p>While we are preparing for our next major release - as you can see on our redesigned website - the 0.9 series is still being maintained. Try our latest stable release now. You should also consider upgrading if you are already using Habari as 0.9.2 contains security fixes.</p>
		</div>
	</div>
	<div id="app_preview">
		<div class="container">
			<div class="row offset-by-three">
				<div class="download five columns"><a href="http://habariproject.org/en/download" title="download 0.9.1">Download 0.9.2</a></div>
				<div class="five columns"><a href="http://habariproject.org/en/habari-092-released" title="See what's new">See what's new</a></div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
