<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ItemsTR */
/* @var $form ActiveForm */
?>

<div class="items-form">


    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alowed_size')->textInput() ?>
    <?= $form->field($model, 'trip_id')->dropDownList($trips_array, ['prompt' => '---- Select Trip ----'])->label('Trip') ?>


</div>