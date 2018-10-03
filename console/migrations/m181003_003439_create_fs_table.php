<?php

use yii\db\Migration;

/**
 * Handles the creation of table `fs`.
 */
class m181003_003439_create_fs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('fs', [
            'films' => $this->integer(),
			'styles' => $this->integer(),
        ]);
		 $this->addForeignKey(
            'fk-from-film',
            'fs',
			'films',
			'film',
            'film-id',
            'CASCADE'
			);
			 $this->addForeignKey(
            'fk-from-styles',
            'fs',
			'styles',
			'styles',
            'id',
            'CASCADE'
			);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('fs');
    }
}
