
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title; ?>　｜　<?= __("com_name"); ?></title>
	<?= Asset::css('style.css'); ?>
</head>
<body>
<div class="container">
	<header>
		<a href="/">
		<?php if($user != null && $user->logo != ""): ?>
			<img src="/files/<?= $user->logo; ?>" width="30" height="30" >
		<?php else: ?>
			<?= Asset::img('s_ad.png', ["width" => 30, "height" => 30, "alt" => "a_and_d"]); ?>
		<?php endif;?>
		</a>

		<ul>
			<?php if($user != null): ?>
				<li><a href="/top"><?= __("top"); ?></a></li>
				<li><a href="/topics"><?= __("topics"); ?></a></li>
				<li><a href="/customers"><?= __("customers"); ?></a></li>
				<li><a href="/log"><?= __("access_log"); ?></a></li>
				<li class="logout"><a href="/?logout=1"><?= __("signout"); ?></a></li>
				<li class="header_user"><a href="/setting"><?= $user->name; ?></a></li>
			<?php else: ?>
				<li class="logout">
					<a href="/signin"><?= __("signin"); ?></a>
				</li>
				<li class="logout">
					<a href="/signup"><?= __("signup"); ?></a>
				</li>
			<?php endif; ?>
		</ul>
	</header>
	<section>
		<h1><?= $title; ?></h1>
		<?= $content; ?>
	</section>
	<footer>
		<div><a href="/policy"><?= __("policy"); ?></a> | <a href="/term"><?= __("term"); ?></a> | <a href="/company"><?= __("company"); ?></a> | <a href="/inquiry"><?= __("inquiry"); ?></a></div>
		<p>Copyright 2015 <?= __("com_name"); ?> All rights reserved.</p>
	</footer>
</div>
</body>
</html>
