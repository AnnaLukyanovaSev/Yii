<?php

namespace common\models\Creators;

use Yii;

/**
 * This is the model class for table "creators".
 *
 * @property int $id
 * @property string $surname
 */
class Creators extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'creators';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname'], 'required'],
            [['surname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'surname' => 'Surname',
        ];
    }
}
