<div>
	<table class="normal-table">
		<tr>
			<th class="small">ID</th>
			<th>登録ユーザ</th>
			<th>なまえ<br>名前</th>
			<th>メールアドレス<br>電話番号</th>
			<th>作成日</th>
			<th class="middle"></th>
		</tr>
		<?php foreach($customers as $customer): ?>
		<tr>
			<td><?= $customer->id; ?></td>
			<td><?= $customer->user->name; ?></td>
			<td><?= $customer->kana; ?><br><?= $customer->name; ?></td>
			<td><?= $customer->email; ?><br><?= $customer->tel; ?></td>
			<td><?= Date("Y/m/d H:i:s", $customer->created_at); ?></td>
			<td><a class="normal-button" href="/admin/customers/detail/<?= $customer->id; ?>">詳細</a></td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?= $pager; ?>
</div>