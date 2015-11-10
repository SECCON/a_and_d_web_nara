
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
		<a href="/admin"><?= Asset::img('s_ad.png', ["width" => 30, "height" => 30, "alt" => "a_and_d"]); ?></a>

		<ul>
			<?php if($user != null): ?>
				<li><a href="/admin/topics"><?= __("topics"); ?></a></li>
				<li><a href="/admin/users"><?= __("users"); ?></a></li>
				<li><a href="/admin/customers"><?= __("customers"); ?></a></li>
				<li><a href="/admin/inquiries"><?= __("inquiry"); ?></a></li>
				<li class="logout"><a href="/admin/?logout=1"><?= __("signout"); ?></a></li>
			<?php endif; ?>
		</ul>
	</header>
	<section>
		<h1><?= $title; ?></h1>
		<?= $content; ?>
	</section>
	<footer>
		<p>Copyright 2015 <?= __("com_name"); ?> All rights reserved.</p>
	</footer>
</div>
</body>
</html>
