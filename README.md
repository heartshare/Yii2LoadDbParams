Yii2LoadDbParams
================

yii2 load params from db 

frontend/config/main.php
``` php
  'bootstrap' => ['log', 'loadParams'],
... 

  'components' => [
      'loadParams'=>[
          'class' => LoadParams::className(),
          'modelClass' => Config::className(),
          'attributeKey'=>'name',
          'attributeValue'=>'value',       
      ],
  ],

```
