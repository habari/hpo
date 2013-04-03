<?php namespace Habari; ?>
<?php $theme->display('header'); ?>
<div id="intro" class="subpage">
	<div class="bg"></div>
	<div class="container">
		<h1><?php echo $post->info->headline; ?></h1>
		<h2><?php echo $post->info->tagline; ?></h2>
	</div>
</div>
<div id="intro_header">
	<div class="container">
		<h3>We are the most successful when passionate people<br>contribute their experience and expertise.</h3>
	</div>
</div>
<div id="article" class="contributing">
	<div class="container">		
		<div class="row offset-by-one">
		<div id="community" class="fourteen area columns">
			<div class="two columns">
				<i class="icon-code">c</i>
			</div>
			<div class="columns eleven body">
				<h2><?php echo $post->title_out; ?></h2>
				<p>Even if you don't feel that you have much time or experience to contribute right now, it's easy to be a part of the Habari community. Even a single tweet or documentation edit helps build Habari.</p>
				<p>When in doubt, ask on the mailing list or our <a href="irc://irc.freenode.net/#habari">IRC channel</a>, and someone will point you in the right direction.</p>
			</div>
			<hr>
		</div>
		<div class="fourteen columns">
			<?php echo $post->content_out; ?>
		</div>
			<div id="design" class="fourteen area columns">
				<div class="two columns">
					<i class="icon-code">a</i>
				</div>
				<div class="columns eleven body">
					<h2>Design</h2>
					<p>From the UI of the admin, to the standard themes we ship with, design is an important part of the Habari Experience.</p>
					<p>We are known for our clean, minimalistic aesthetic and we are very proud of that fact. Very proud indeed. To get started helping out with design, simply follow the following steps.</p>
					<ol>
						<li><a href="http://habariproject.org/en/download" title="Download and install Habari">Download and install Habari</a>.</li>
						<li>Marvel at its majesty.</li>
						<li>Read through our <a rhef="<?php Site::out_url('habari'); ?>/style-guide" title="Style Guidelines">Style Guidelines</a>.</li>
						<li>Peruse our <a href="https://github.com/habari/habari/issues?state=open" title="Issue Tracker">Issue tracker</a> on Github for design related issues.</li>
						<li><a href="https://help.github.com/articles/fork-a-repo" title="">Fork the project</a> into your own Github account and start making updates!</li>
						<li><a href="https://help.github.com/articles/using-pull-requests" title="Using Pull Requests">Make a Pull Request</a> so we can see your hard work and merge it into the project!</li>
					</ol>
					<p>Rinse and Repeat. As your contributions are seen and integrated your karma in the project will rise, and with it the authority you will have. All of our Committers started their journey this way. For more on our community policies, check out the <a href="<?php Site::out_url('habari'); ?>/community" title="Community Guidelines">Community Guidelines</a>.</p>
					<p>Don't worry if this all seems like so much gibberish to you. There are tons of people ready and willing to help get you up to speed as quickly and painlessly as possible. You can find us on IRC at <a href="irc://irc.freenode.net/#habari">#habari</a> hosted by <a href="http://irc.freenode.net" title="Freenode">Freenode</a>, or on the project mailing lists.</p>
				</div>
				<hr>
			</div>
			<div id="development" class="fourteen area columns">
				<div class="two columns">
					<i class="icon-code">g</i>
				</div>
				<div class="columns eleven body">
					<h2>Development</h2>
					<p>Where the rubber meets the road, development is the backbone of Habari, and where you will find some of the most exciting and interesting problems to solve.</p>
					<p>At its heart Habari is an object oriented, publishing platform built on PHP5 and a belief that projects like ours should push the envelope of technology. To jump into the party and start hacking, follow these easy steps!</p>
					<ol>
						<li><a href="http://habariproject.org/en/download" title="Download and install Habari">Download and install Habari</a>.</li>
						<li>Marvel at its majesty.</li>
						<li>Take a read through our <a href="<?php Site::out_url('habari'); ?>/coding-standards" title="Coding Standards">Coding Standards</a>.</li>
						<li>Peruse our <a href="https://github.com/habari/habari/issues?state=open" title="Issue Tracker">issue tracker</a> on Github for issues that pique your interest.</li>
						<li><a href="https://help.github.com/articles/fork-a-repo" title="">Fork the project</a> into your own Github account and start making updates!</li>
						<li><a href="https://help.github.com/articles/using-pull-requests" title="Using Pull Requests">Make a Pull Request</a> so we can see your hard work and merge it into the project!</li>
					</ol>
					<p>Rinse and Repeat. As your contributions are seen and integrated your karma in the project will rise, and with it the authority you will have. All of our Committers started their journey this way. For more on our community policies, check out the <a href="<?php Site::out_url('habari'); ?>/community" title="Community Guidelines">Community Guidelines</a>.</p>
					<p>If you find yourself in a pinch and need some expert advice, someone is waiting to help on IRC at <a href="irc://irc.freenode.net/#habari">#habari</a> hosted by <a href="http://irc.freenode.net" title="Freenode">Freenode</a>, or on the project mailing lists.</p>
				</div>
				<hr>
			</div>
			<div id="translation" class="fourteen area columns">
				<div class="two columns">
					<i class="icon-code">g</i>
				</div>
				<div class="columns eleven body">
					<h2>Translations</h2>
					<p>One of the unsung heroes of any open source project are the translators. Without you we wouldn't know our <em>Moja pombe, tafadhali!</em> from our <em>Ein Bier, bitte!</em></p>
					<p>To step up to the microphone and start translating, follow these easy steps!</p>
					<ol>
						<li><a href="http://habariproject.org/en/download" title="Download and install Habari">Download and install Habari</a>.</li>
						<li>Marvel at its majesty.</li>
						<li>Read through <a href="http://help.transifex.com/intro/translating.html#translating" title="Transifex Documentation">the documentation</a> for <a href="http://transifex.com/" title="Transifex">Transifex</a> our translation platform.</li>
						<li><a href="https://www.transifex.com/signup/" title="Create an account">Create an account</a> at Transifex.</li>
						<li>Peruse our <a href="https://www.transifex.com/projects/p/habari/" title="translations">list of translations</a> and find the one(s) you can help with.</li>
						<li>Get to translating those strings!</li>
					</ol>
					<p>Rinse and Repeat. As your contributions are seen and integrated your karma in the project will rise, and with it the authority you will have. All of our Committers started their journey this way. For more on our community policies, check out the <a href="<?php Site::out_url('habari'); ?>/community" title="Community Guidelines">Community Guidelines</a>.</p>
					<p>If you find yourself in a pinch and need some expert advice, someone is waiting to help on IRC at <a href="irc://irc.freenode.net/#habari">#habari</a> hosted by <a href="http://irc.freenode.net" title="Freenode">Freenode</a>, or on the project mailing lists.</p>
				</div>
				<hr>
			</div>
			<div id="documentation" class="fourteen area columns">
				<div class="two columns">
					<i class="icon-code">d</i>
				</div>
				<div class="columns eleven body">
					<h2>Documentation</h2>
					<p>Whoa, this is the big one. The most important, and least loved part of any project is the documentation. Without good documentation you are dead in the water.</p>
					<p>Like all projects of our size, we are in need of dedicated people to write clear, concise documentation. Get your writing caps on and follow these easy steps!</p>
					<ol>
						<li><a href="http://habariproject.org/en/download" title="Download and install Habari">Download and install Habari</a>.</li>
						<li>Marvel at its majesty.</li>
						<li>Read through <a href="<?php Site::out_url('site'); ?>/developers/" title="Our Documentation">our documentation</a> and find the places you would like to improve it.</li>
						<li><a rhef="<?php URL::out('display_docs_registration'); ?>" title="Create an account!">Create an account</a> on the site.</li>
						<li>Click on the "suggest a change" link on the page you want to update and edit the page.</li>
						<li>Your change will go into a queue and will be approved or rejected by a documentation editor.</li>
					</ol>
					<p>Rinse and Repeat. As your contributions are seen and integrated your karma in the project will rise, and with it the authority you will have. All of our Documentation Editors started their journey this way.</p>
					<p>For more on our documentation process, see <a href="<?php Site::out_url('habari'); ?>/documentation-process" title="Documentation Guidelines">Documentation Guidelines</a>.</p>
					<p>If you find yourself in a pinch and need some expert advice, someone is waiting to help on IRC at <a href="irc://irc.freenode.net/#habari">#habari</a> hosted by <a href="http://irc.freenode.net" title="Freenode">Freenode</a>, or on the project mailing lists.</p>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>
<div id="ending">
<?php $theme->display('quicklinks'); ?>
<?php $theme->display('footer'); ?>
