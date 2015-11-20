<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Trips */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trips-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departureTime')->textInput() ?>

    <?= $form->field($model, 'arrive')->textInput() ?>

    <?= $form->field($model, 'spent_time')->textInput() ?>

    <?= $form->field($model, 'stops')->textInput() ?>

    <?= $form->field($model, 'stop_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
