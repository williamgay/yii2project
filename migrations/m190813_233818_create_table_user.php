<?php

use yii\db\Migration;

/**
 * Class m190813_233818_create_table_user
 */
class m190813_233818_create_table_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
           'id'=>$this->primaryKey()->unsigned(),
            'uid'=>$this->string(60)->notNull(),
            'username'=>$this->string(60)->notNull(),
            'email'=>$this->string(225)->notNull()->unique(),
            'password'=>$this->string(60)->notNull(),
            'status'=>$this->tinyInteger(4)->notNull(),
            'contact_email'=>$this->string(255)->notNull(),
            'contact_phone'=>$this->string(25)->notNull(),
            'created'=>$this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated'=>$this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP')
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190813_233818_create_table_user cannot be reverted.\n";

        return false;
    }
    */
}
