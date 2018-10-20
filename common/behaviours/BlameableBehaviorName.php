<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace common\behaviours;

use Yii;
use yii\behaviors\BlameableBehavior;

class BlameableBehaviorName extends BlameableBehavior
{

    protected function getValue($event)
    {
        if ($this->value === null && Yii::$app->has('user')) {
            $userId = Yii::$app->get('user')->identity->username;
            if ($userId === null) {
                return $this->getDefaultValue($event);
            }

            return $userId;
        }

        return parent::getValue($event);
    }

}
