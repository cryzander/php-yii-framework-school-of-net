<?php

use yii\db\Migration;

/**
 * Handles the creation of table `courses`.
 */
class m161123_233607_create_courses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('courses', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'hours' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('courses');
    }
}
