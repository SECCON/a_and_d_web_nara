<h3><?= __("new_topics"); ?></h3>
<div>
	<ul class="topic_list">
		<?php foreach($topics as $topic): ?>
			<li>
				<a href="/topics/detail/<?= $topic->id; ?>"><?= $topic->title; ?> (<?= date(__("date_style"), $topic->created_at); ?>)</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
<h3><?= __("new_inquiries"); ?></h3>
<div>
	<table class="normal-table">
		<tr>
			<th class="small">ID</th>
			<th><?= __("title"); ?></th>
			<th><?= __("created_datetime"); ?></th>
		</tr>
		<?php foreach($inquiries as $inquiry): ?>
			<tr id="inquiry_<?= $inquiry->id; ?>">
				<td><?= $inquiry->id; ?></td>
				<td><?= $inquiry->title; ?></td>
				<td><?= Date(__("datetime_style"), $inquiry->created_at); ?></td>
			</tr>
			<tr id="inquiry_body_<?= $inquiry->id; ?>">
				<td colspan="4"><?= $inquiry->body; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>