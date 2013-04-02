<?php namespace Habari; ?>
<?php $theme->display('header'); ?>
<div id="intro_header">
	<div class="container">
		<h3>Habari is a next-generation publishing platform<br>and application framework all-in-one.</h3>
	</div>
</div>
<div id="introduction">
	<div class="container">
		<div class="row">
			<div class="clear"></div>
			<div class="feature one-third column">
				<i class="icon-modern">M</i>
				<p><strong>Modern</strong></p>
				<p>Habari is a modern application framework, architected from the beginning to embrace best practices.</p>
			</div>
			<div class="feature one-third column">
				<i class="icon-fast">f</i>
				<p><strong>Fast</strong></p>
				<p>Everything about Habari is geared for speed, and a small footprint. You won't find the kitchen sink here.</p>
			</div>
			<div class="feature one-third column">
				<i class="icon-mobile">m</i>
				<p><strong>Mobile</strong></p>
				<p>Today's internet is spread across multiple screens and platforms. Habari looks great on any screen.</p>
			</div>
		</div>
	</div>
</div>
<?php $theme->display('quicklinks'); ?>
<div id="involved">
	<div class="container">
		<h2>Getting involved with Habari</h2>
		<div class="row">
			<div class="offset-by-one fourteen columns">
				<p>Habari is a vibrant open source project that embraces the concept of Meritocracy. In a nutshell, if you are a positive force in the community you are given more authority. This applies to people from all walks of life, not just developers. We are always looking for help in one of the following areas.</p>
			</div>
		</div>
		<div class="row">
			<div class="area four columns">
				<a href="<?php Site::out_url('site'); ?>/contributing#design">
					<i class="icon-code">a</i>
					<p><strong>Design</strong></p>
				</a>
			</div>		
			<div class="area four columns">
				<a href="<?php Site::out_url('site'); ?>/contributing#development">
					<i class="icon-code">g</i>
					<p><strong>Development</strong></p>
				</a>
			</div>
			<div class="area four columns">
				<a href="<?php Site::out_url('site'); ?>/contributing#translation">
					<i class="icon-code">e</i>
					<p><strong>Translations</strong></p>
				</a>
			</div>
			<div class="area four columns">
				<a href="<?php Site::out_url('site'); ?>/contributing#documentation">
					<i class="icon-code">d</i>
					<p><strong>Documentation</strong></p>
				</a>
			</div>
		</div>
		<h5>Don't see your area of interest listed? Let us know how you can help and we'll put you to work.</h5>
	</div>
</div>
<div id="ending">
<?php $theme->display('footer'); ?>