<?php

use yii\db\Migration;

/**
 * Handles the creation of table `currency`.
 */
class m200826_031212_create_currency_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('currency', [
            'id' => $this->primaryKey(),
            'code' => $this->char(3)->notNull()->unique(),
            'name' => $this->string(),
            'rate' => $this->float(),
            'insert_dt' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('currency');
    }
}
