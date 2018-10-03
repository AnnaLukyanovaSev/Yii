<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Styles\Styles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="styles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'styles')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
