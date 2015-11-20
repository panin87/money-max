<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Items */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
$form = ActiveForm::begin();
echo yii\bootstrap\Tabs::widget(['items' => [
['label' => 'English', 'content' =>
    $this->render('forms\enForm.php',
            array('model' => $model,'trips_array' => $trips_array,'form'=>$form)),'active' => true],
['label' => 'Հայերեն', 'content' =>
    $this->render('forms\armForm.php',
            array('model' => $model_tr,'form'=>$form))],
['label' => 'Russian', 'content' =>
    $this->render('forms\ruForm.php',
            array('model' => $model_tr,'form'=>$form))],

    ]])

?>

 <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>