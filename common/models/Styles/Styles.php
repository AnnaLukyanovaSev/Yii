<?php

namespace common\models\Styles;

use Yii;

/**
 * This is the model class for table "styles".
 *
 * @property int $id
 * @property string $styles
 *
 * @property Fs[] $fs
 */
class Styles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'styles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['styles'], 'required'],
            [['styles'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'styles' => 'Styles',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFs()
    {
        return $this->hasMany(Fs::className(), ['styles' => 'id']);
    }
}
