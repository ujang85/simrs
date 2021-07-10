<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>
                    <?php
                    if (Yii::$app->user->isGuest) {
                        echo "tamu";
                    } else {
                        echo Yii::$app->user->identity->username;
                    }
                    ?>
                </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>



        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [

                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Logout', 'url' => ['site/logout'], 'template' => '<a href="{url}" data-method="post"><i class="fa fa-sign-out"></i>{label}</a>'],
                    [
                        'label' => 'Pendaftaran Pasien',
                        'icon' => 'user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Pasien Rawat Jalan', 'icon' => 'user', 'url' => ['/pendaftaran/pasien/index']],
                            ['label' => 'Pasien Rawat Inap', 'icon' => 'key', 'url' => ['/mimin/user/index']],
                            ['label' => 'Pasien IGD', 'icon' => 'key', 'url' => ['/mimin/user/ubahpassword']],
                            ['label' => 'Cetak Kartu Pasien', 'icon' => 'certificate', 'url' => ['/site/signup']],
                        ],
                    ],

                    [
                        'label' => 'Master Data',
                        'icon' => 'server',
                        'url' => '#',
                        'items' => [

                            [
                                'label' => 'Data SDM',
                                'icon' => 'cube',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Data Dokter', 'icon' => 'user-plus', 'url' => ['/masterdata/data-dokter/index'],],
                                    ['label' => 'Data Paramedis', 'icon' => 'user', 'url' => ['/masterdata/data-paramedis/index'],],
                                ],
                            ],
                            ['label' => 'Data Klinik', 'icon' => 'building-o', 'url' => ['/masterdata/data-klinik/index'],],
                            ['label' => 'Data Suku', 'icon' => 'user-plus', 'url' => ['/masterdata/suku/index'],],
                            ['label' => 'Data Bahasa', 'icon' => 'user-plus', 'url' => ['/masterdata/bahasa/index'],],  
                        ],
                    ],
                    [
                        'label' => 'Administrator',
                        'icon' => 'dashboard',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Data User', 'icon' => 'user', 'url' => '#'],
                            ['label' => 'Setting Hak Akses User', 'icon' => 'key', 'url' => ['/mimin/user/index']],
                            ['label' => 'Ubah Password User', 'icon' => 'key', 'url' => ['/mimin/user/ubahpassword']],
                            ['label' => 'Buat Akun User', 'icon' => 'certificate', 'url' => ['/site/signup']],
                        ],
                    ],

                ],

            ]
        ) ?>

    </section>

</aside>