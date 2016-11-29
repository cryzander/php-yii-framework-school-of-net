<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>
<h1>Listar dados na Index</h1>

<h3><a href="<?php echo Url::to(['course/create']);  ?>"> Novo Curso</a></h3>
<!-- Isso serve para criar uma Url para a rota course/create -->

<table class="table">
	<thead>
		<tr>
			<td>#</td>
			<td>Name</td>
			<td>Hours</td>
			<td>Action</td>
	</thead>
	<tbody>
		<?php foreach ($courses as $course): ?>
		<tr>
			<td><?php echo $course->id; ?></td>
			<td><?php echo $course->name; ?></td>
			<td><?php echo $course->hours; ?></td>
			<td>
				<a href="<?php echo Url::to(['course/update','id' => $course->id]); ?>">
					Editar
				</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
