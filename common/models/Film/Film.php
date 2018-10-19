<?php

namespace common\models\Film;

use Yii;
use common\models\Creators\Creators as Creators;
use yii\behaviors\TimestampBehavior;
use common\behaviours\BlameableBehaviorAnn;

/**
 * This is the model class for table "film".
 *
 * @property int $id
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

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    parent::EVENT_BEFORE_INSERT => ['create_at', 'reduct_at'],
                    parent::EVENT_BEFORE_UPDATE => ['reduct_at'],
                ],
            ],
            [
                'class' => BlameableBehaviorAnn::className(),
                'attributes' => [
                    parent::EVENT_BEFORE_INSERT => ['creat_by'],

                ],
            ],

        ];
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
            // add by Ann
            [
                ['crid'],
                'exist',
                'targetClass' => Creators::className(),
                'targetAttribute' => ['crid' => 'id']
            ]
            // add by Ann
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
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
        return $this->hasMany(Fs::className(), ['films' => 'id']);
    }

    // add by Ann
    public function getCreators()
    {
        return $this->hasOne(Creators::className(), ['id' => 'crid']);
    }
}
// add by Ann