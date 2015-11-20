<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ItemsTR */
/* @var $form ActiveForm */
?>
<div class="forms-ruForm">
        <?= $form->field($model, '[ru]name'); ?>
        <?= $form->field($model, '[ru]type'); ?>
        <?= Html::activeHiddenInput($model, '[ru]lang', ['value'=> 'ru_RU']); ?>
</div><!-- forms-ruForm -->
