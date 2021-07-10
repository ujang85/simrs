<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\masterdata\models\DataKlinik */
?>
<div class="data-klinik-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_klinik',
            'active',
            'visible',
            'type',
        ],
    ]) ?>

</div>
