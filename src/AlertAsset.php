<?php ///[yii2-fontawesome-alert]

/**
 * Yii2 fontawesome alert widget
 *
 * @link        http://www.brainbook.cc
 * @see         https://github.com/yongtiger/yii2-fontawesome-alert
 * @author      Tiger Yong <tigeryang.brainbook@outlook.com>
 * @copyright   Copyright (c) 2017 BrainBook.CC
 * @license     http://opensource.org/licenses/MIT
 */

namespace yongtiger\fontawesomealert;

use yii\web\AssetBundle;

/**
 * Alert AssetBundle
 */
class AlertAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}
