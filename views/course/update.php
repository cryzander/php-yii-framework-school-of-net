<?php
	use yii\helpers\Url;
?>


<h1> Novo curso </h1>

<form name="form" method="post" action="<?php echo Url::to(['course/update', 'id' => $model->id]); ?>">
	<input type="hidden" name="<?php echo \Yii::$app->request->csrfParam; ?>"
		value="<?php echo \Yii::$app->request->csrfToken; ?>">
	<!-- 	Este campo é necessário para que o envio seja validado
		Esta explicado no arquivo de texto dicasImportantes.txt -->
	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" class="form-control" id="name" name="name" 
			placeholder="Curso" value="<?php echo $model->name; ?>">
	</div>
	<div class="form-group">
		<label for="hours">Hours:</label>
		<input type="text" class="form-control" id="hours" name="hours" 
			placeholder="horas" value="<?php echo $model->hours ?>">
	</div>

	<button type="submit" class="btn btn-success">Enviar</button>
</form>
