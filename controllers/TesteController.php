<?php

namespace app\controllers;

class TesteController extends \yii\web\Controller
{
    public function actionIndex()
    {
	$request = \Yii::$app->request; 
	// Pega a requisição
	// Esse \Yii serve pra você pegar muitas informações
	$xpto = $request->get('xpto'); // Pega o xpto da requisição
	$id = $request->get('id');
        return $this->render('index', [
		'id' => $id,
		'xpto' => $xpto
	]); // Esse cara aqui passa as variáveis para a view
    }
	
	public function actionMaisParametros($id,$name)
	{
		echo "$id - $name"; die();
		// Olhar o arquivo config/web.php na parte de 
		// URLs amigáveis.
	}

}
