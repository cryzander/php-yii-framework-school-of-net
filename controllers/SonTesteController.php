<?php

namespace app\controllers;

class SonTesteController extends \yii\web\Controller
{
	// Ele deve ser acessado da seguinte maneira index?r=son-teste
    public function actionIndex()
    {
        return $this->render('index');
    }

	public function actionTeste()
	{
		echo "Teste"; die();
	} // Esse die é como se fosse um exit(), simplesmente saí do script

	public function actionTesteComposto(){
		echo "Teste composto funcionando"; die();
	} // Esse cara é um nome composto então deverá ser acessado
	// da seguinte forma: son-teste/teste-composto

}
