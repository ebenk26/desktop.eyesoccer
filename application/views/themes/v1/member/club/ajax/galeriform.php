<?php $galeri = ($galeri) ? $galeri->data[0] : ''; ?>
<a href="<?php echo base_url('member/galeri/?view='.$view); ?>" class="btn-white-orange fl-r mg-t15"><i class="fas fa-chevron-left mg-r5"></i>Kembali</a>

<form class='form_multi' action="<?php echo base_url('member'); ?>" enctype="multipart/form-data">
    <div class="container data-profil">
        <input type="hidden" name="fn" class="cinput" value="uploadgalericlub">
        <input type="hidden" name="view" class="cinput" value="<?php echo $view; ?>">
        <input type="hidden" name="tab" class="cinput" value="<?php echo $tab; ?>">
        <input type="hidden" name="act" class="cinput" value="<?php echo ($galeri) ? 1 : 0; ?>">
        <input type="hidden" name="id" class="cinput" value="<?php echo ($galeri) ? $galeri->slug : ''; ?>">
        <div class="container mt20">
            <div class="pp-profil">
                <img src="<?php echo(!empty($galeri->url_pic) ? $galeri->url_pic : base_url() . "assets/themes/v1/img/fav.png") ?>" alt="" class="viewimg">
            </div>
            <div class="full-width">
                <label class="btn-blue">
                    Upload Gambar
                    <input id="file_pic" name="photo" type="file" style="display: none;">
                </label>
            </div>
        </div>
        <div class="container data-profil mg-t15">
            <div class="ff-12 mg-b15" style="font-weight:bold"><span class="cl-red">*</span> harus diisi</div>
            <table>
                <?php
                    if ($tab == 'video') {
                        ?>
                        <tr>
                            <td>Upload Video <span class="cl-red">*</span></td>
                            <td>
                                <input type="file" name="video">
                                <span class="err msgvideo"></span>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
                <tr>
                    <td>Album <span class="cl-red">*</span></td>
                    <td>
                        <select name="album">
                            <option value="">- Pilih Album -</option>
                            <?php
                                if ($album) {
                                    foreach ($album->data as $a) {
                                        if ($galeri->id_folder == $a->id_folder OR $a->slug == $view) {
                                            echo "<option value='$a->slug' selected>$a->title</option>";
                                        } else {
                                            echo "<option value='$a->slug'>$a->title</option>";
                                        }
                                    }
                                }
                            ?>
                        </select>
                        <span class="err msgname"></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="tx-c">
                        <button class="klik-dsn">Simpan</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>

<script>
    $(document).ready(function () {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.viewimg').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#file_pic").change(function () {
            readURL(this);
        });
    });
</script>
