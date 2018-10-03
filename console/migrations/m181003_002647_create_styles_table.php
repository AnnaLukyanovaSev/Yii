<?php

use yii\db\Migration;

/**
 * Handles the creation of table `styles`.
 */
class m181003_002647_create_styles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('styles', [
            'id' => $this->primaryKey(),
			'styles'=> $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('styles');
    }
}
