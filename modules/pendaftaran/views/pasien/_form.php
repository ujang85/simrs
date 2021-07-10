<?php
use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\pendaftaran\models\Pasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-row">
    <div class="form-group col-md-4">
      <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group col-md-4">
      <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group col-md-2">
    <?= $form->field($model, 'domisili')->textInput(['maxlength' => true]) ?>
    </div>
  </div>
 
  <div class="form-row">
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
        </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
