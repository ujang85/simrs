<?php
use yii\helpers\Html;
use kartik\builder\Form;
use kartik\form\ActiveForm;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use app\modules\masterdata\models\DataSpesialis;
use kartik\date\DatePicker;
?>

<?php

$form = ActiveForm::begin(['type'=>ActiveForm::TYPE_VERTICAL]);
    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>2,
        'compactGrid'=>true,
        'attributes'=>[       // 2 column layout
     
            'nama'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'nama..']],
            'alamat'=>['type'=>Form::INPUT_TEXTAREA, 'options'=>['placeholder'=>'alamat..']],
            
        ]
    ]);

    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>3,
        'compactGrid'=>true,
        'attributes'=>[       // 2 column layout
            'spesialis_id'=>[
                'type'=>Form::INPUT_WIDGET, 
                'widgetClass'=>'\kartik\select2\Select2', 
                'options'=>[
                    'data'=> \yii\helpers\ArrayHelper::map(DataSpesialis::find()->all(),'id','name'),
                    ],
                    'hint'=>'pilih spesialis',
                    'pluginOptions' => [
                        'allowClear' => true,
                    ],
                ], 
            'no_hp'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'nomor HP..']],
            'sex'=>[
                'type'=>Form::INPUT_DROPDOWN_LIST, 
                'items'=>['LAKI-LAKI' => 'LAKI-LAKI','PEREMPUAN' => 'PEREMPUAN'],
                            ],
        ]
    ]);


    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>2,
        'compactGrid'=>true,
        'attributes'=>[       // 2 column layout
            'no_sip'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'NO SIP..']],
            'no_str'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'NO STR..']],
        ]
    ]);
    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>2,
        'compactGrid'=>true,
        'attributes'=>[       // 2 column layout
            'sip_ed'=>[
                'type'=>Form::INPUT_WIDGET,
                'widgetClass'=>\kartik\widgets\DatePicker::classname(),
                'hint'=>'masa berlaku SIP (tahun/bulan/tanggal)',
                'options' => ['pluginOptions' => ['format' => 'yyyy-mm-dd', 'autoclose'=>true, 'todayHighlight' => true]]
                
            ], 
            'str_ed'=>[
                'type'=>Form::INPUT_WIDGET,
                'widgetClass'=>\kartik\widgets\DatePicker::classname(),
                'hint'=>'masa berlaku STR (tahun/bulan/tanggal)',
                'options' => ['pluginOptions' => ['format' => 'yyyy-mm-dd', 'autoclose'=>true, 'todayHighlight' => true]]
                
            ], 
        ]
    ]);
?>
<?php ActiveForm::end(); ?>



 