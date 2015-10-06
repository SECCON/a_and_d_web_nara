<form method="post" action="" class="normal-form">
	<fieldset>
		<label for="email">登録ユーザ:</label>
		<?= $customer->user->name; ?>
	</fieldset>
	<fieldset>
		<label for="email">メールアドレス:</label>
		<?= $customer->email; ?>
	</fieldset>
	<fieldset>
		<label for="name">名前:</label>
		<?= $customer->name; ?>
	</fieldset>
	<fieldset>
		<label for="kana">カナ:</label>
		<?= $customer->kana; ?>
	</fieldset>
	<fieldset>
		<label for="zip_code">郵便番号:</label>
		<?= $customer->zip_code; ?>
	</fieldset>
	<fieldset>
		<label for="prefecture_id">都道府県:</label>
		<?= $prefectures[$customer->prefecture_id]; ?>
	</fieldset>
	<fieldset>
		<label for="address">住所:</label>
		<?= $customer->address; ?>
	</fieldset>
	<fieldset>
		<label for="tel">TEL:</label>
		<?= $customer->tel; ?>
	</fieldset>
</form>