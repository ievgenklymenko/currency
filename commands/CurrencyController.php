<?php

namespace app\commands;

use app\models\Currency;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * Currency data management.
 */
class CurrencyController extends Controller
{
    public $defaultAction = 'sync';

    /**
     * Synchronize currency rates data with external data source.
     * @return int Exit code
     */
    public function actionSync()
    {
        Currency::sync();

        echo 'Currency rates data synchronized successfully!';

        return ExitCode::OK;
    }
}
