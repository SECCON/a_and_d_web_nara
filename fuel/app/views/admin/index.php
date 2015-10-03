<h3>最新のお知らせ</h3>
<div>
	<ul class="topic_list">
		<?php foreach($topics as $topic): ?>
			<li>
				<a href="/topics/detail/<?= $topic->id; ?>"><?= $topic->title; ?> (<?= date("Y/m/d", $topic->created_at); ?>)</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
<h3>最新のお問い合わせ</h3>
<div>
	<table class="normal-table">
		<tr>
			<th class="small">ID</th>
			<th>タイトル</th>
			<th>作成日</th>
		</tr>
		<?php foreach($inquiries as $inquiry): ?>
			<tr id="inquiry_<?= $inquiry->id; ?>">
				<td><?= $inquiry->id; ?></td>
				<td><?= $inquiry->title; ?></td>
				<td><?= Date("Y/m/d H:i", $inquiry->created_at); ?></td>
			</tr>
			<tr id="inquiry_body_<?= $inquiry->id; ?>">
				<td colspan="4"><?= $inquiry->body; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>