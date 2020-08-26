<?php

namespace app\gateways;

use yii\httpclient\Client;

class CurrencyDataGateway
{
    public static function get()
    {
        $url = 'http://www.cbr.ru/scripts/XML_daily.asp';

        $response = (new Client)->get($url)->send();
        $fetchedCurrencies = $response->getData()['Valute'];
        $selectedData = \array_map(function ($currency) {
            return [
                'code' => $currency['CharCode'],
                'name' => $currency['Name'],
                'rate' => $currency['Nominal'] / (float) $currency['Value'],
            ];
        }, $fetchedCurrencies);

        return $selectedData;
    }
}
