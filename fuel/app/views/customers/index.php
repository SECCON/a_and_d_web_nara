<a class="create_button" href="/customers/edit">新規作成</a>
<div>
	<table class="normal-table">
		<tr>
			<th class="small">ID</th>
			<th>なまえ<br>名前</th>
			<th>メールアドレス<br>電話番号</th>
			<th>作成日</th>
			<th class="middle"></th>
			<th class="middle"></th>
		</tr>
		<?php foreach($customers as $customer): ?>
		<tr>
			<td><?= $customer->id; ?></td>
			<td><?= $customer->kana; ?><br><?= $customer->name; ?></td>
			<td><?= $customer->email; ?><br><?= $customer->tel; ?></td>
			<td><?= Date("Y/m/d H:i:s", $customer->created_at); ?></td>
			<td><a class="normal-button" href="/customers/edit/<?= $customer->id; ?>">編集</a></td>
			<td><a class="normal-button" href="/customers/?del_id=<?= $customer->id; ?>">削除</a></td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?= $pager; ?>
</div>