<?php

use yii\db\Migration;

/**
 * Class m181003_002847_fill_styles_table
 */
class m181003_002847_fill_styles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
   $this->insert('styles',array(
         'id'=>'1',
         'styles' =>'comedy',
		 ));
		 $this->insert('styles',array(
         'styles' =>'drama',
		 ));
		 $this->insert('styles',array(
         'styles' =>'horror',
		 ));
		 $this->insert('styles',array(
         'styles' =>'documental',
		 ));
		 $this->insert('styles',array(
         'styles' =>'melodrama',
		 ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181003_002847_fill_styles_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181003_002847_fill_styles_table cannot be reverted.\n";

        return false;
    }
    */
}
