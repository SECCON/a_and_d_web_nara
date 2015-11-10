<form method="post" action="" class="normal-form">
	<fieldset>
		<label for="email"><?= __("user"); ?>:</label>
		<?= $customer->user->name; ?>
	</fieldset>
	<fieldset>
		<label for="email"><?= __("email"); ?>:</label>
		<?= $customer->email; ?>
	</fieldset>
	<fieldset>
		<label for="name"><?= __("name"); ?>:</label>
		<?= $customer->name; ?>
	</fieldset>
	<fieldset>
		<label for="kana"><?= __("kana"); ?>:</label>
		<?= $customer->kana; ?>
	</fieldset>
	<fieldset>
		<label for="zip_code"><?= __("zip_code"); ?>:</label>
		<?= $customer->zip_code; ?>
	</fieldset>
	<fieldset>
		<label for="prefecture_id"><?= __("prefecture"); ?>:</label>
		<?= $prefectures[$customer->prefecture_id]; ?>
	</fieldset>
	<fieldset>
		<label for="address"><?= __("address"); ?>:</label>
		<?= $customer->address; ?>
	</fieldset>
	<fieldset>
		<label for="tel">TEL:</label>
		<?= $customer->tel; ?>
	</fieldset>
</form>