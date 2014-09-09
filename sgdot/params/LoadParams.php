<?php
namespace sgdot\params;

use yii\base\Component;
use yii\helpers\ArrayHelper;

class LoadParams extends Component {
    public $modelClass;
    public $attributeKey;
    public $attributeValue;
    public function init() {
        $class     = $this->modelClass;
        $attrKey   = $this->attributeKey;
        $attrValue = $this->attributeValue;
        
        $data = $class::find()->all();
        $settings = ArrayHelper::map($data, $attrKey,$attrValue);
        \Yii::$app->params = array_merge($settings, \Yii::$app->params);    

    }
}
