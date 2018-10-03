<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Creators\Creators */

$this->title = 'Create Creators';
$this->params['breadcrumbs'][] = ['label' => 'Creators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="creators-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
