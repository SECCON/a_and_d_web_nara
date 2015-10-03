
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
		<a href="/">
		<?php if($user != null && $user->logo != ""): ?>
			<img src="/files/<?= $user->logo; ?>" width="30" height="30" >
		<?php else: ?>
			<?= Asset::img('s_ad.png', ["width" => 30, "height" => 30, "alt" => "a_and_d"]); ?>
		<?php endif;?>
		</a>

		<ul>
			<?php if($user != null): ?>
				<li><a href="/top">トップ</a></li>
				<li><a href="/topics">お知らせ一覧</a></li>
				<li><a href="/customers">顧客一覧</a></li>
				<li><a href="/log">アクセスログ</a></li>
				<li class="logout"><a href="/?logout=1">ログアウト</a></li>
				<li class="header_user"><a href="/setting"><?= $user->name; ?></a></li>
			<?php else: ?>
				<li class="logout">
					<a href="/signin">ログイン</a>
				</li>
				<li class="logout">
					<a href="/signup">ユーザ登録</a>
				</li>
			<?php endif; ?>
		</ul>
	</header>
	<section>
		<h1><?= $title; ?></h1>
		<?= $content; ?>
	</section>
	<footer>
		<div><a href="/policy">プライバシーポリシー</a> | <a href="/term">利用規約</a> | <a href="/company">会社概要</a> | <a href="/inquiry">お問い合わせ</a></div>
		<p>Copyright 2015 エーアンドディー株式会社 All rights reserved.</p>
	</footer>
</div>
</body>
</html>
