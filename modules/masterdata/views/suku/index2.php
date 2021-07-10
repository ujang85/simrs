<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset; 
use johnitvn\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\masterdata\models\SukuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Suku';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<br>
    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus">  Tambah Data Baru</i>', ['create'],
                    ['role'=>'modal-remote','title'=> 'Tambah Data Baru','class'=>'btn btn-default']) ?>
    </p>
</br>
<div class="suku-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider2,
        //    'filterModel' => $searchModel2,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns2.php'),
            
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'panel' => [
                'type' => 'primary', 
                'heading' => '<i class="glyphicon glyphicon-list"></i> '.$this->title,
                'before'=>'<em>*Ketikkan Parameter Pencarian Data Dokter pada TextBox dibawah.</em>',
                                    
                        '<div class="clearfix"></div>',
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>
