<div>
	<table class="normal-table">
		<tr>
			<th class="small">ID</th>
			<th><?= __("login_date"); ?></th>
			<th>UA</th>
			<th>IP</th>
		</tr>
		<?php foreach($logs as $log): ?>
		<tr>
			<td><?= $log->id; ?></td>
			<td><?= Date(__("datetime_style"), $log->created_at); ?></td>
			<td><?= $log->ua; ?></td>
			<td><?= $log->ip; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?= $pager; ?>
</div>