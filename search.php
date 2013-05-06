<?php namespace Habari; ?>
<?php $theme->display('header'); ?>
<div id="intro_header">
	<div class="container">
		<h3> You searched for "<?php echo Utils::htmlspecialchars( $criteria ); ?>"</h3>
	</div>
</div>
<div id="article" class="contributing">
	<div class="container">
		<div id="page-selector" class="top sixteen columns">
			<?php echo $theme->prev_page_link(); ?> <?php echo $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php echo $theme->next_page_link(); ?>
		</div>
		<div class="row">
			<?php foreach( $posts as $post ) { ?>
			<div id="entry-<?php $post->id; ?>" class="sixteen area columns news_block">
				<div class="three columns block">
					<?php if( $post->content_type == Post::type('addon') ) { ?>
						<?php echo AddonCatalogPlugin::screenshot( $post ); ?>
					<?php } else { ?>
					<i class="icon-code"><?php echo $theme->get_page_icon($post->slug); ?></i>
					<?php } ?>
				</div>
				<div class="columns twelve body">
					<h2><?php echo $theme->permalink( $post ); ?>
					<h2><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h2>
					<?php echo strip_tags( $post->content_excerpt ); ?>
				</div>
			</div>
			<?php } ?>
		</div>
		<div id="page-selector" class="top sixteen columns">
			<?php echo $theme->prev_page_link(); ?> <?php echo $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php echo $theme->next_page_link(); ?>
		</div>
	</div>
</div>
<div id="ending">
<?php $theme->display('footer'); ?>