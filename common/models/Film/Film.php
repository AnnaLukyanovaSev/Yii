<?php

namespace common\models\Film;

use Yii;

/**
 * This is the model class for table "film".
 *
 * @property int $film-id
 * @property string $film
 * @property int $year
 * @property int $crid
 *
 * @property Fs[] $fs
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['film'], 'required'],
            [['year', 'crid'], 'integer'],
            [['film'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'film-id' => 'Film ID',
            'film' => 'Film',
            'year' => 'Year',
            'crid' => 'Crid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFs()
    {
        return $this->hasMany(Fs::className(), ['films' => 'film-id']);
    }
}
