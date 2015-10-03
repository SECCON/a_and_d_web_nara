<div>
	<table class="normal-table">
		<tr>
			<th class="small">ID</th>
			<th>ログイン日</th>
			<th>UA</th>
			<th>IP</th>
		</tr>
		<?php foreach($logs as $log): ?>
		<tr>
			<td><?= $log->id; ?></td>
			<td><?= Date("Y/m/d H:i:s", $log->created_at); ?></td>
			<td><?= $log->ua; ?></td>
			<td><?= $log->ip; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?= $pager; ?>
</div>