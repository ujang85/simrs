<?php
use yii\helpers\Url;
use kartik\nav\NavX;
use johnitvn\ajaxcrud\CrudAsset; 
$this->title = 'Data Suku';
$this->params['breadcrumbs'][] = $this->title;
CrudAsset::register($this);

?>
<?php
echo NavX::widget([
    'options'=>['class'=>'nav nav-pills'],
    'items' => [
        ['label' => 'Data Suku', 'icon' => 'user-plus', 'url' => ['/masterdata/suku/index'],],
        ['label' => 'Data Bahasa', 'icon' => 'user-plus', 'url' => ['/masterdata/bahasa/index'],],
    ]
]);
?>