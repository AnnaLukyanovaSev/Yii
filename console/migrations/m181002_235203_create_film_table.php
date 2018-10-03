<?php

use yii\db\Migration;

/**
 * Handles the creation of table `film`.
 */
class m181002_235203_create_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('film', [
            'film-id' => $this->primaryKey(),
			'film' => $this->string()->notNull(),
			'year'=>$this->integer(),
			'crid'=>$this->integer(),
        ]);
		    $this->addForeignKey(
            'fk-film_id-id',
            'film',
			'crid',
			'creators',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('film');
    }
}
