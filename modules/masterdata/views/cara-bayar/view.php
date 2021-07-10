<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\masterdata\models\CaraBayar */
?>
<div class="cara-bayar-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'jaminan',
            'active',
        ],
    ]) ?>

</div>
