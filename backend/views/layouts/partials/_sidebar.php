<?php
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;
?>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">


        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="<?= Yii::$app->controller->id == 'items' ? 'active' : '';?>">
                  <a href="<?php echo Url::to(['items/index'],true); ?>"><i class="fa fa-fw fa-dashboard"></i> <?php echo Yii::t('app','Items');?></a>
                </li>
                <li  class="<?= Yii::$app->controller->id == 'user' ? 'active' : '';?>">
                    <a href="<?php echo Url::to(['user/index'],true); ?>"><i class="fa fa-fw fa-bar-chart-o"></i><?php echo Yii::t('app','Users');?>  </a>
                </li>
                <li  class="<?= Yii::$app->controller->id == 'trips' ? 'active' : '';?>">
                    <a href="<?php echo Url::to(['trips/index'],true); ?>"><i class="fa fa-fw fa-bar-chart-o"></i><?php echo Yii::t('app','Trips');?></a>
                </li>
                <li  class="<?= Yii::$app->controller->id == 'price' ? 'active' : '';?>">
                    <a href="<?php echo Url::to(['price/index'],true); ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?php echo Yii::t('app','Prices');?></a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li>
                            <a href="#">Dropdown Item</a>
                        </li>
                        <li>
                            <a href="#">Dropdown Item</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div class="container white">
        <?=
        Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
<?= Alert::widget() ?>
<?= $content ?>
    </div>
</div>