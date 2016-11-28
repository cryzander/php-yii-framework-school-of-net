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
		$model->save();
		return $this->redirect(['course/index']);
		// Isso redireciona para a rota principal Index
	}
	return $this->render('create');
	// Se não for um post ele apenas renderiza a view create
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionIndex()
    {
	$courses = Course::find()->all();
        return $this->render('index',[
		'courses' => $courses
	]);
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

}
