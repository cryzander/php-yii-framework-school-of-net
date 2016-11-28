<?php
/* @var $this yii\web\View */
?>
<h1>Listar dados na Index</h1>

<table class="table">
	<thead>
		<tr>
			<td>#</td>
			<td>Name</td>
			<td>Hours</td>
	</thead>
	<tbody>
		<?php foreach ($courses as $course): ?>
		<tr>
			<td><?php echo $course->id; ?></td>
			<td><?php echo $course->name; ?></td>
			<td><?php echo $course->hours; ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
