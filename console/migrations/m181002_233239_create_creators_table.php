<?php

use yii\db\Migration;

/**
 * Handles the creation of table `creators`.
 */
class m181002_233239_create_creators_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('creators', [
            'id' => $this->primaryKey(),
			'surname'=> $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('creators');
    }
}
