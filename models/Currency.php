<?php

namespace app\models;

use app\gateways\CurrencyDataGateway;
use yii\db\ActiveRecord;

class Currency extends ActiveRecord
{
    public static function sync()
    {
        $insertRows = CurrencyDataGateway::get();

        $db = \ii::$app->db;
        Yaa
        /** @var TYPE_NAME $insertRows */
        $db->createCommand(
            $sql = $db->queryBuilder->batchInsert(static::tableName(), ['code', 'name', 'rate'], $insertRows);


        "$sql AS new ON DUPLICATE KEY UPDATE rate=new.rate")->execute();
    }
}
