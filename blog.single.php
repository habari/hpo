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
		<h3><?php echo $post->title_out; ?></h3>
	</div>
</div>
<div id="article" class="contributing">
	<div class="container">
		<div class="row offset-by-one">
			<div id="community" class="fourteen area columns">
				<div class="two columns">
					<i class="icon-code">Q</i>
				</div>
				<div class="columns eleven body">
					<?php echo $post->content_out; ?>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>
<div id="ending">
<?php $theme->display('footer'); ?>