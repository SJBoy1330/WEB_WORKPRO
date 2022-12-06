    <?php if ($result) : ?>
        <div class="container workpro px-3">
            <div class="judul">
                <h6 class="pt-3"><?= $result->judul; ?></h6>
            </div>

            <div class="content d-flex flex-column">
                <span class="text-dark fw-normal" style="font-size: 15px;">
                    <?php if (!is_array(json_decode($result->keterangan))) : ?>
                        <?= $result->keterangan; ?>
                    <?php else : ?>
                        <?php foreach (json_decode($result->keterangan) as $key) : ?>
                            <?= $key; ?>
                        <?php endforeach ?>
                    <?php endif; ?>
                </span>
            </div>
        </div>
    <?php else : ?>
        <div class="container workpro d-flex justify-content-center align-items-center flex-column px-3">
            <img src="<?= data_url(FALSE, 'img_default/' . base64url_encode('vector') . '/' . base64url_encode('vector_pengumuman_kosong.gif')); ?>" width="275">
            <span class="mt-3 text-center" style="color: #FFB600; font-size: 22px; font-weight: 700;">BANTUAN KOSONG</span>
            <span class="text-center mt-1" style="color: #9F9F9F; font-size: 13px;">Bantuan tidak tersedia, silahkan kembali ke beranda</span>
        </div>
    <?php endif ?>