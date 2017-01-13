<?php

namespace hiqdev\yii2\modules\pages\models;

use Yii;
use yii\data\ArrayDataProvider;

class PagesIndex
{
    protected $pages = [];

    public static function getStorage()
    {
        /// TODO ...
        return Yii::$app->getModule('pages')->getStorage();
    }

    public static function createFromDir($path)
    {
        $list = static::getStorage()->listContents($path);
        var_dump($list);die();
        $index = new static();

        return $index;
    }

    public function getDataProvider()
    {
        return new ArrayDataProvider(['allModels' => $this->pages]);
    }
}