<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/8/29
 * Time: 19:32
 */

namespace huijiewei\slick;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class SlickAsset extends AssetBundle
{
    public $sourcePath = '@npm/slick-carousel/slick';

    public $js = [
        'slick.min.js',
    ];

    public $css = [
        'slick.css',
        'slick-theme.css',
    ];

    public $depends = [
        JqueryAsset::class,
    ];
}
