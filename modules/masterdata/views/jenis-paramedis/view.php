<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\masterdata\models\JenisParamedis */
?>
<div class="jenis-paramedis-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'active',
        ],
    ]) ?>

</div>
