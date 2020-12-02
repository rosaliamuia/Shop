<?php

use yii\db\Migration;

/**
 * Class m201201_213419_create_fulltext_index_on_products
 */
class m201201_213419_create_fulltext_index_on_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE {{%products}} ADD FULLTEXT(description)");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201201_213419_create_fulltext_index_on_products cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201201_213419_create_fulltext_index_on_products cannot be reverted.\n";

        return false;
    }
    */
}
