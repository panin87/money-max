<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of globalActions
 *
 * @author Levon
 */

namespace app\components;


class GlobalActions extends \yii\base\Component {

  public function init() {

    switch (\Yii::$app->request->get('lang')) {
    case 'am';
      \Yii::$app->language = 'hy_HY';
      break;
    case 'en';
      \Yii::$app->language = 'en_US';
      break;
    case 'ru';
      \Yii::$app->language = 'ru_RU';
      break;
    }
    parent::init();
  }

}
