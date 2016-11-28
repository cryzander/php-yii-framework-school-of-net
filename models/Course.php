<?php

namespace app\models;

use yii\db\ActiveRecord;

class Course extends ActiveRecord
{
	// Por convenção do Yii, para trabalhar com essa tabela é necessário
	// fazer isso.
	public static function tableName()
	{
		return 'courses';
		// Aqui é o nome da tabela a qual esse model se refere.
	}
	
	public function rules()
	{
		return [
				[['name', 'hours'], 'safe']
			];
		// Isso faz com que o Yii permita a inserção de dados neste campos
		// Isso foi explicado no arquivo dicasImportantes.txt
	}
}
