<?php namespace Habari; ?>
<?php $theme->display('header'); ?>
<div id="introduction">
	<div class="container">
		<div class="row offset-by-one">
			<div id="community" class="fourteen area columns">
				<div class="two columns">
					<i class="icon-code">Q</i>
				</div>
				<div class="columns eleven body">
					<h2><?php echo $post->title_out; ?></h2>
					<?php echo strip_tags( $post->content_excerpt ); ?>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>
<div id="ending">
<?php $theme->display('footer'); ?>