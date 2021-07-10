<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\masterdata\models\Suku */
?>
<div class="suku-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_suku',
        ],
    ]) ?>

</div>
