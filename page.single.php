<?php namespace Habari; ?>
<?php $theme->display('header'); ?>
<div id="intro" class="subpage">
	<div class="bg"></div>
	<div class="container">
		<h1><?php echo $post->info->headline; ?></h1>
		<h2><?php echo $post->info->tagline; ?></h2>
	</div>
</div>
<div id="article" class="contributing">
	<div class="container">		
		<div class="fourteen offset-by-one columns omega">
			<?php echo $post->content_out; ?>
		</div>
	</div>
</div>
<div id="ending">
<?php $theme->display('quicklinks'); ?>
<?php $theme->display('footer'); ?>