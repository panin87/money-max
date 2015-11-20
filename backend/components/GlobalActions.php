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
    $session = \Yii::$app->session;
    if (!$session->isActive){
      $session->open();
    }

    switch (\Yii::$app->request->get('lang')) {
    case 'am';
      $session->set('language', 'hy-HY');
      break;
    case 'en';
      $session->set('language', 'en_US');
      break;
    case 'ru';
      $session->set('language', 'ru_RU');
      break;
    }
     \Yii::$app->language = $session->get('language');
    parent::init();
  }

}
