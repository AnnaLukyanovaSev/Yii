<?php

use yii\db\Migration;

/**
 * Class m181003_001721_fill_film_table
 */
class m181003_001721_fill_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
     $this->insert('film',array(
         'film-id'=>'1',
		 'film'=>'sad_film',
         'year' =>'1996',
		 'crid'=>'4',
  ));
    $this->insert('film',array(
		 'film'=>'good_film',
         'year' =>'2018',
		 'crid'=>'2',
  ));
    $this->insert('film',array(
		 'film'=>'horror_film',
         'year' =>'2004',
		 'crid'=>'3',
  ));
    $this->insert('film',array(
		 'film'=>'a_fantastic_film',
         'year' =>'2008',
		 'crid'=>'1',
  ));
    $this->insert('film',array(
		 'film'=>'documental_film',
         'year' =>'1985',
		 'crid'=>'5',
  ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181003_001721_fill_film_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181003_001721_fill_film_table cannot be reverted.\n";

        return false;
    }
    */
}
