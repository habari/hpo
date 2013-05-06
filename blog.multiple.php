<?php namespace Habari; ?>
<?php $theme->display('header'); ?>
<div id="intro" class="subpage">
	<div class="bg"></div>
	<div class="container">
		<h1>News from Habari</h1>
	</div>
</div>
<div id="intro_header">
	<div class="container">
		<h3>Updates, Tutorials &amp; Articles from the Habari Community.</h3>
	</div>
</div>

<div id="article" class="contributing">
	<div class="container">
		<div id="page-selector" class="top sixteen columns">
			<?php echo $theme->prev_page_link(); ?> <?php echo $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php echo $theme->next_page_link(); ?>
		</div>
		<div class="row offset-by-one">
			<?php foreach( $posts as $post ) { ?>
			<div id="community" class="fourteen area columns">
				<div class="two columns">
					<i class="icon-code">Q</i>
				</div>
				<div class="columns eleven body">
					<h2><a href="<?php URL::out('display_single', array('slug' => $post->slug) ); ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
					<?php echo strip_tags( $post->content_excerpt ); ?>
				</div>
				<hr>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<div id="ending">
<?php $theme->display('footer'); ?>
