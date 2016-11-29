<?php

namespace app\controllers;
use app\models\Course;

class CourseController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $request = \Yii::$app->request;
	// Usa o helper do Yii para pegar a request
	if ($request->isPost)
	// Verifica se a request foi feita via POST
	{
		$model = new Course();
		$model->attributes = $request->post();
		// Isso já pega todos os dados do post e colocar no attributes do model
		// O nome disso é Massive Assignment
		// Eu poderia colocar assim: 
		// $data = $request->post();
		// $model->name = $data['name'];
		// Desta maneira não precisaria criar aquele metodo rules em models/Course.php
		// Porém é bem mais lento
		$model->save();
		return $this->redirect(['course/index']);
		// Isso redireciona para a rota principal Index
	}
	return $this->render('create');
	// Se não for um post ele apenas renderiza a view create
    }

    public function actionDelete($id)
    {
        $model = Course::findOne($id);
	if (!$model)
	{
		throw new NotFoundHttpException("Pagina não encontrada!!");
	}
	$model->delete();
	return $this->redirect(['course/index']);
    }

    public function actionIndex()
    {
	$courses = Course::find()->all();
        return $this->render('index',[
		'courses' => $courses
	]);
    }

    public function actionUpdate($id)
    {
        
	$model = Course::findOne($id);
	if (!$model)
	{
		throw new NotFoundHttpException("Pagina não encontrada");
	}
	$request = \Yii::$app->request;
	// Usa o helper do Yii para pegar a request
	if ($request->isPost)
	{
		// Ele só entrará aqui quando for um Post
		// Isso quer dizer que entrará na hora que ele for atualizar somente
		$model->attributes = $request->post();
		$model->save();
		return $this->redirect(['course/index']);
	}
	
	// Ele chegará aqui se for um redirecionamento normal
	// Pois se for um Post ele entrará no IF anterior e irá para a index
	return $this->render('update', [
		'model' => $model
	]);
    }

}
