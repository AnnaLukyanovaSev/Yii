<?php

namespace common\models\Creators;

use common\models\Film\Film;
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

    public function getFilm()
    {
        return $this->hasMany(Film::className(), ['crid' => 'id'])->inverseOf('film');
    }

/*$customers = Customer::find()
->joinWith('orders')
->where(['order.status' => Order::STATUS_ACTIVE])
->all();*/
}
