<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\pendaftaran\models\PasienSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'rm_lama') ?>

    <?= $form->field($model, 'lama_baru') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'golongan_darah') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'suku') ?>

    <?php // echo $form->field($model, 'bahasa') ?>

    <?php // echo $form->field($model, 'buta_huruf') ?>

    <?php // echo $form->field($model, 'bahasa_ibu') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'desa_id') ?>

    <?php // echo $form->field($model, 'sub_district_id') ?>

    <?php // echo $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'province_id') ?>

    <?php // echo $form->field($model, 'pendidikan') ?>

    <?php // echo $form->field($model, 'pekerjaan') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'status_kawin') ?>

    <?php // echo $form->field($model, 'tgl_daftar') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'penanggungjawab_nama') ?>

    <?php // echo $form->field($model, 'penanggungjawab_ktp') ?>

    <?php // echo $form->field($model, 'penanggungjawab_alamat') ?>

    <?php // echo $form->field($model, 'penanggungjawab_telp') ?>

    <?php // echo $form->field($model, 'hub_saudara') ?>

    <?php // echo $form->field($model, 'suami') ?>

    <?php // echo $form->field($model, 'istri') ?>

    <?php // echo $form->field($model, 'ayah') ?>

    <?php // echo $form->field($model, 'ibu') ?>

    <?php // echo $form->field($model, 'jenis_bayar') ?>

    <?php // echo $form->field($model, 'no_asuransi') ?>

    <?php // echo $form->field($model, 'desa') ?>

    <?php // echo $form->field($model, 'sub_district') ?>

    <?php // echo $form->field($model, 'district') ?>

    <?php // echo $form->field($model, 'cetak_kartu') ?>

    <?php // echo $form->field($model, 'dead') ?>

    <?php // echo $form->field($model, 'dead_date') ?>

    <?php // echo $form->field($model, 'ada_alergi_obat') ?>

    <?php // echo $form->field($model, 'alergi_obat') ?>

    <?php // echo $form->field($model, 'ada_alergi_makanan') ?>

    <?php // echo $form->field($model, 'alergi_makanan') ?>

    <?php // echo $form->field($model, 'riwayat_makanan') ?>

    <?php // echo $form->field($model, 'riwayat_penyakit') ?>

    <?php // echo $form->field($model, 'riwayat_obat') ?>

    <?php // echo $form->field($model, 'penyakit_menular_id') ?>

    <?php // echo $form->field($model, 'covid19_status') ?>

    <?php // echo $form->field($model, 'covid19_date') ?>

    <?php // echo $form->field($model, 'covid19_data') ?>

    <?php // echo $form->field($model, 'domisili') ?>

    <?php // echo $form->field($model, 'catatan_pasien') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
