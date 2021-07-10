<?php
use kartik\tabs\TabsX;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset; 
use johnitvn\ajaxcrud\BulkButtonWidget;


/* @var $this yii\web\View */

$this->title = 'Test';
?> 
<?php $this->beginBlock('suku'); ?>
<?php
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
            'dataProvider' => $dataProvider,
        //    'filterModel' => $searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns.php'),
            
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
<?php $this->endBlock(); ?>   

<?php $this->beginBlock('bahasa'); ?>
<?php
$this->title = 'Data Bahasa';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<br>
    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus">  Tambah Data Baru</i>', ['/masterdata/bahasa/create'],
                    ['role'=>'modal-remote','title'=> 'Tambah Data Baru','class'=>'btn btn-default']) ?>
    </p>
</br>
<div class="bahasa-index">
    <div id="ajaxCrudDatatable2">
        <?=GridView::widget([
            'id'=>'crud-datatable2',
            'dataProvider' => $dataProvider2,
            'filterModel' => $searchModel2,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns2.php'),
            
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'panel' => [
                'type' => 'primary', 
                'heading' => '<i class="glyphicon glyphicon-list"></i> '.$this->title,
                'before'=>'<em>*Ketikkan Parameter Pencarian Data Bahasa pada TextBox dibawah.</em>',
                                    
                        '<div class="clearfix"></div>',
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal2",
    "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>
<?php $this->endBlock(); ?>   



<?php    
        $items = [

            [
                'label'=>'<i class="fa fa-fw fa-user"></i>Suku',
                 'content' => $this->blocks['suku'],
                'icon' => 'cube',
                'active'=>true
            ],
            [
                'label'=>'<i class="fa fa-fw fa-user"></i> Bahasa',
                'content' => $this->blocks['bahasa'],
             
            ],
            
        ];

        echo TabsX::widget([
            'items'=>$items,
            'position'=>TabsX::POS_ABOVE,
            'encodeLabels'=>false
        ]);
?>

