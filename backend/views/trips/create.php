<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Trips */

$this->title = Yii::t('app', 'Create Trips');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Trips'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trips-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
