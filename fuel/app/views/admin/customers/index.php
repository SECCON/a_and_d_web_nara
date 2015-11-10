<div>
	<table class="normal-table">
		<tr>
			<th class="small">ID</th>
			<th><?= __("user"); ?></th>
			<th><?= __("kana"); ?><br><?= __("name"); ?></th>
			<th><?= __("email"); ?><br>TEL</th>
			<th><?= __("created_datetime"); ?></th>
			<th class="middle"></th>
		</tr>
		<?php foreach($customers as $customer): ?>
		<tr>
			<td><?= $customer->id; ?></td>
			<td><?= $customer->user->name; ?></td>
			<td><?= $customer->kana; ?><br><?= $customer->name; ?></td>
			<td><?= $customer->email; ?><br><?= $customer->tel; ?></td>
			<td><?= Date(__("datetime_style"), $customer->created_at); ?></td>
			<td><a class="normal-button" href="/admin/customers/detail/<?= $customer->id; ?>"><?= __("detail"); ?></a></td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?= $pager; ?>
</div>