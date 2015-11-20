<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ItemsTR */
/* @var $form ActiveForm */
?>
<div class="forms-armForm">
        <?= $form->field($model, '[am]name') ?>
        <?= $form->field($model, '[am]type') ?>
        <?= Html::activeHiddenInput($model, '[am]lang', ['value'=> 'hy-HY']); ?>
</div><!-- forms-armForm -->
