<a class="create_button" href="/customers/edit"><?= __("create"); ?></a>
<div>
	<table class="normal-table">
		<tr>
			<th class="small">ID</th>
			<th><?= __("kana"); ?><br><?= __("name"); ?></th>
			<th><?= __("email"); ?><br>TEL</th>
			<th><?= __("created_datetime"); ?></th>
			<th class="middle"></th>
			<th class="middle"></th>
		</tr>
		<?php foreach($customers as $customer): ?>
		<tr>
			<td><?= $customer->id; ?></td>
			<td><?= $customer->kana; ?><br><?= $customer->name; ?></td>
			<td><?= $customer->email; ?><br><?= $customer->tel; ?></td>
			<td><?= Date(__("datetime_style"), $customer->created_at); ?></td>
			<td><a class="normal-button" href="/customers/edit/<?= $customer->id; ?>"><?= __("edit"); ?></a></td>
			<td><a class="normal-button" href="/customers/?del_id=<?= $customer->id; ?>"><?= __("delete"); ?></a></td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?= $pager; ?>
</div>