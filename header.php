<?php namespace Habari; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php Options::out('title'); ?> <?php if( $request->display_page && isset($post) ) { echo ' &mdash; ' .  $post->title; } ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=auto, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="<?php Site::out_url('theme'); ?>/style.css" media="screen" type="text/css">            
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
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
		<li><a href="<?php Site::out_url('habari'); ?>/en/blog">News</a></li>
		<li><a href="<?php Site::out_url('habari'); ?>/addons">Addons</a></li>
		<li><a href="<?php Site::out_url('habari'); ?>/en/developers">Developers</a></li>
		<li><a href="<?php Site::out_url('habari'); ?>/en/support">Support</a></li>
		<li><a href="http://demo.habariproject.org">Demo</a></li>
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
		</ul>
	</div>
</header>
<?php if( $request->display_home ) { ?>
<div id="intro">
	<div class="bg"></div>
	<div class="container">
		<h1>Spread the News!</h1>
		<h2>Nimble, flexible, powerful. Say hello to Habari 1.0.</h2>
		<div class="offset-by-one columns">
			<p>100's of new features, a completely rewritten core, a new streamlined admin interface and an integrated Plugin &amp; Theme Store are just some of the highlights of this feature packed release.</p>
		</div>
	</div>
	<div id="app_preview">
		<div class="container">
			<div class="row offset-by-three">
				<div class="download five columns"><a href="http://habariproject.org/en/download" title="download 1.0">Download 1.0</a></div>
				<div class="take_tour five columns"><a href="#tour" title="Take a tour">See what's new</a></div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
