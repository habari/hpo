<?php namespace Habari; ?>
<?php $theme->display('header'); ?>
<div id="introduction">
	<div class="container">
		<div class="row">
			<div class="clear"></div>
			<div class="column" style="margin-top:36px;">
				<h2><?php echo $post->title_out; ?></h2>
				<?php echo $post->content_out ?>
			</div>
		</div>
	</div>
</div>
<div id="ending">
<?php $theme->display('footer'); ?>
