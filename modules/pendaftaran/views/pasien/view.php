<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\pendaftaran\models\Pasien */
?>
<div class="pasien-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'rm_lama',
            'lama_baru',
            'nik',
            'nama',
            'sex',
            'tempat_lahir',
            'tanggal_lahir',
            'golongan_darah',
            'address',
            'email:email',
            'suku',
            'bahasa',
            'buta_huruf',
            'bahasa_ibu',
            'agama',
            'desa_id',
            'sub_district_id',
            'district_id',
            'province_id',
            'pendidikan',
            'pekerjaan',
            'user_id',
            'status_kawin',
            'tgl_daftar',
            'phone',
            'penanggungjawab_nama',
            'penanggungjawab_ktp',
            'penanggungjawab_alamat',
            'penanggungjawab_telp',
            'hub_saudara',
            'suami',
            'istri',
            'ayah',
            'ibu',
            'jenis_bayar',
            'no_asuransi',
            'desa',
            'sub_district',
            'district',
            'cetak_kartu',
            'dead',
            'dead_date',
            'ada_alergi_obat',
            'alergi_obat:ntext',
            'ada_alergi_makanan',
            'alergi_makanan:ntext',
            'riwayat_makanan:ntext',
            'riwayat_penyakit:ntext',
            'riwayat_obat:ntext',
            'penyakit_menular_id',
            'covid19_status',
            'covid19_date',
            'covid19_data:ntext',
            'domisili',
            'catatan_pasien:ntext',
        ],
    ]) ?>

</div>
