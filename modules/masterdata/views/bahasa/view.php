<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\masterdata\models\Bahasa */
?>
<div class="bahasa-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_bahasa',
        ],
    ]) ?>

</div>
