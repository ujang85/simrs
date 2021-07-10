<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\masterdata\models\DataParamedis */
?>
<div class="data-paramedis-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'alamat',
            'sex',
            'no_hp',
            'spesialis.name',
            'paramedis.nama_paramedis',
            'no_sip',
            'sip_ed',
            'no_str',
            'str_ed',
        ],
    ]) ?>

</div>
