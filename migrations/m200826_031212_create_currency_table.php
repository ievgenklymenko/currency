<?php

use app\models\Currency;
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
        $this->createTable(Currency::tableName(), [
            'id' => $this->primaryKey(),
            'code' => $this->char(3)->notNull()->unique(),
            'name' => $this->string(),
            'rate' => $this->float(),
            'insert_dt' => $this->dateTime()->defaultExpression('NOW()'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(Currency::tableName());
    }
}
