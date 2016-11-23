<?php

namespace app\controllers;

class TesteController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
	$request = \Yii::$app->request; // Pega a requisição
	// Esse \Yii serve pra você pegar muitas informações
	$xpto = $request->get('xpto'); // Pega o xpto da requisição
	// A diferença entre os dois é que o xpto será null ser não
	// for passado nada para ele.
        return $this->render('index', [
		'id' => $id,
		'xpto' => $xpto
	]); // Esse cara aqui passa as variáveis para a view
    }

}
