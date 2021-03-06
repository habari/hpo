<?php namespace Habari; ?>
<?php $theme->display('header'); ?>
<div id="intro" class="subpage">
	<div class="bg"></div>
	<div class="container">
		<h1><?php echo $post->info->headline; ?></h1>
		<h2><?php echo $post->info->tagline; ?></h2>
	</div>
</div>
<div id="involved" class="subpage">
	<div class="container">
		<div class="row">
			<div class="area four columns">
				<a href="<?php URL::out( 'display_document', array('slug' => 'theme') ); ?>">
					<i class="icon-code">a</i>
					<p><strong>Theme API</strong></p>
				</a>
			</div>
			<div class="area four columns">
				<a href="<?php URL::out( 'display_document', array('slug' => 'plugin') ); ?>">
					<i class="icon-code">P</i>
					<p><strong>Plugin API</strong></p>
				</a>
			</div>
			<div class="area four columns">
				<a href="<?php URL::out( 'display_document', array('slug' => 'ajax') ); ?>">
					<i class="icon-code">A</i>
					<p><strong>AJAX API</strong></p>
				</a>
			</div>
			<div class="area four columns">
				<a href="<?php URL::out( 'display_document', array('slug' => 'rest') ); ?>">
					<i class="icon-code">r</i>
					<p><strong>REST API</strong></p>
				</a>
			</div>
		</div>
	</div>
</div>
<div id="article">
	<div class="container">
		<div class="fourteen offset-by-one body columns omega">
			<?php echo $post->content_out; ?>
		</div>
	</div>
</div>
<div id="ending">
<?php $theme->display('quicklinks'); ?>
<?php $theme->display('footer'); ?>
