
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title; ?>　｜　エーアンドディー株式会社</title>
	<?= Asset::css('style.css'); ?>
</head>
<body>
<div class="container">
	<header>
		<a href="/admin"><?= Asset::img('s_ad.png', ["width" => 30, "height" => 30, "alt" => "a_and_d"]); ?></a>

		<ul>
			<?php if($user != null): ?>
				<li><a href="/admin/topics">お知らせ一覧</a></li>
				<li><a href="/admin/users">ユーザ一覧</a></li>
				<li><a href="/admin/customers">顧客一覧</a></li>
				<li><a href="/admin/inquiries">お問い合せ一覧</a></li>
				<li class="logout"><a href="/admin/?logout=1">ログアウト</a></li>
			<?php endif; ?>
		</ul>
	</header>
	<section>
		<h1><?= $title; ?></h1>
		<?= $content; ?>
	</section>
	<footer>
		<p>Copyright 2015 エーアンドディー株式会社 All rights reserved.</p>
	</footer>
</div>
</body>
</html>
