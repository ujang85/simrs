<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset; 
use johnitvn\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\pendaftaran\models\PasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pasien';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<br>
    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus">  Daftar Pasien Baru</i>', ['create'],
                    ['role'=>'modal-remote','title'=> 'Daftar Pasien Baru','class'=>'btn btn-default']) ?>
    </p>
</br>
<div class="pasien-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns.php'),
            
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'panel' => [
                'type' => 'primary', 
                'heading' => '<i class="glyphicon glyphicon-list"></i>'.$this->title,
                'before'=>'<em>* Ketikkan Parameter Pencarian Pasien di TextBox dibawah</em>',
                             
                        '<div class="clearfix"></div>',
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "size"=>"modal-lg",
    "footer"=>"",// always need it for jquery plugin
    "options" => [
        "tabindex" => false, // important for Select2 to work properly
      //  "style"=>"overflow:hidden;"
      //  "style"=>"overflow:auto;"
    ], 
])?>
<?php Modal::end(); ?>
