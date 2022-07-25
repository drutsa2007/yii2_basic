<?php

use yii\db\Migration;
use yii\db\Schema;


/**
 * Class m220627_134602_Urls
 */
class m220627_134602_Urls extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $tableOptions = null;
        $this->createTable('{{%url}}', [
            'id' => Schema::TYPE_PK,
            'url' => Schema::TYPE_STRING,
            'frequency' => Schema::TYPE_INTEGER,
            'repeat' => Schema::TYPE_INTEGER,
            'date_add' => Schema::TYPE_DATETIME,
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%url}}');
        echo "m220627_134602_Urls cannot be reverted.\n";
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220627_134602_Baskets cannot be reverted.\n";

        return false;
    }
    */
}
