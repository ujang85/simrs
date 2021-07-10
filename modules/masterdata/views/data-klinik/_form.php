<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\masterdata\models\DataKlinik */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-klinik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_klinik')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'type')->dropDownList([ 'rawat jalan' => 'Rawat jalan', 'rawat inap' => 'Rawat inap', 'apotek' => 'Apotek', 'farmasi' => 'Farmasi', 'laboratorium' => 'Laboratorium', 'radiologi' => 'Radiologi', 'ruang tindakan' => 'Ruang tindakan', 'unit lain' => 'Unit lain', ], ['prompt' => '']) ?>
    <?= $form->field($model, 'active')->dropDownList([ 'yes' => 'Ya', 'no' => 'Tidak', ], ['prompt' => '']) ?>
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
