<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/8/29
 * Time: 19:34
 */

namespace huijiewei\slick;

use yii\helpers\Json;
use yii\widgets\Block;

class SlickWidget extends Block
{
    public $clientOptions = [];

    public function init()
    {
        parent::init();

        SlickAsset::register($this->getView());

        $clientOptions = Json::encode($this->clientOptions);

        $js = <<<EOD
$('.slick').slick({$clientOptions});
EOD;
        $this->getView()->registerJs($js);
    }

    public function run()
    {
        if ($this->renderInPlace) {
            throw new \Exception('not implemented yet ! ');
        }

        $block = ob_get_clean();

        return '<div class="slick">' . $block . '</div>';
    }
}
