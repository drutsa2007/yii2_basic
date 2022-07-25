<?php

use yii\db\Migration;
use yii\db\Schema;


/**
 * Class m220627_134602_Urls
 */
class m220627_134603_UrlCodes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $tableOptions = null;
        $this->createTable('{{%code}}', [
            'id' => Schema::TYPE_PK,
            'url_id' => Schema::TYPE_INTEGER,
            'code' => Schema::TYPE_STRING,
            'date_check' => Schema::TYPE_DATETIME,
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%code}}');
        echo "m220627_134603_UrlCodess cannot be reverted.\n";
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
