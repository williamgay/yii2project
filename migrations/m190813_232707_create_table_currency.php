<?php

use yii\db\Migration;

/**
 * Class m190813_232707_create_table_currency
 */
class m190813_232707_create_table_currency extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(currency, [
           'id' => $this->primaryKey()->unsigned(),
            'code' => $this->string(3)->unique(),
            'sign_format'=>$this->string(45)->notNull()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('currency');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190813_232707_create_table_currency cannot be reverted.\n";

        return false;
    }
    */
}
