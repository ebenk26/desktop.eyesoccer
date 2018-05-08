<div class="mb-30">
    <b>Selamat datang di EyeSoccer.id</b>
    <span>Semua berita terlengkap tentang tim favoritmu ada disini</span>
</div>

<div class="log-reg m-0" style="margin-bottom:20px !important;">
    <span class="active" style="cursor:pointer;">Masuk</span>
    <span class="deactive" style="cursor:pointer;">Daftar</span>
</div>

<div class="container">
    <div class="form-login">
        <form class="form_basic">
            <div class="frm-login-data m-0">
                <input type="hidden" name="fn" value="loginact" name="cinput">
                <span>Email</span>
                <div>
                    <input name="email" type="text" placeholder="Ketik alamat email" required>
                    <span class='err msgemail'></span>
                </div>
                <span>Password</span>
                <div>
                    <input name="password" type="password" placeholder="Ketik password" required>
                    <span class='err msgpassword'></span>
                </div>
                <div class="container">
                    <a href="<?php echo base_url('member/forgot'); ?>">Lupa password?</a>
                </div>
                <button type="submit" class="btn-orange-3" style="width:100%; margin:20px 0 30px;">MASUK</button>
            </div>
        </form>
    </div>
    <div class="form-signup">
        <form class="form_basic">
            <div class="frm-login-data m-0">
                <input type="hidden" name="fn" value="regact" name="cinput">
                <span>Username</span>
                <div>
                    <input name="username" id="username" type="text" placeholder="Username (text and number, ex: Eyesoccer26)" required>
                    <span class='err msgusername'></span>
                </div>
                <span>Nama</span>
                <div>
                    <input name="name" id="name" type="text" placeholder="Ketik nama lengkap" required>
                    <span class='err msgname'></span>
                </div>
                <span>Email</span>
                <div>
                    <input name="email" id="email" type="email" placeholder="Ketik alamat email" required>
                    <span class='err msgemail'></span>
                </div>
                <span>Password</span>
                <div>
                    <input name="password" id="password" type="password" placeholder="Ketik password" value="" required>
                    <span class='err msgpassword'></span>
                </div>
                <span>Konfirmasi Password</span>
                <div>
                    <input name="passconfirm" id="passconfirm" type="password" placeholder="Ketik password" value="" required>
                    <span class='err msgpassconfirm'></span>
                </div>
                <div class="container fl-l">
                    <input name="term" id="term_regis" type="checkbox" class="icb" required>
                    <div class="container icb2 mb-10">
                        <ul>
                            <li><span>Saya telah membaca dan menyetujui</span></li>
                            <li><a href="">Ketentuan dan Kebijakan Privasi</a></li>
                            <li><span>EyeSoccer.id</span></li>
                        </ul>
                    </div>
                </div>
                <button type="submit" class="btn-orange-3" style="width:100%; margin:20px 0 30px;">DAFTAR</button>
            </div>
        </form>
    </div>
</div>

<script>
    $(function () {
        var active = document.getElementsByClassName("active")[0];
        var deactive = document.getElementsByClassName("deactive")[0];
        var f_login = document.getElementsByClassName("form-login")[0];
        var f_signup = document.getElementsByClassName("form-signup")[0];
        deactive.onclick = function () {
            active.style.backgroundColor = "unset";
            active.style.color = "black";
            deactive.style.backgroundColor = "orange";
            deactive.style.color = "white";
            f_login.style.display = "none";
            f_signup.style.display = "block";
        }
        active.onclick = function () {
            active.style.backgroundColor = "orange";
            active.style.color = "white";
            deactive.style.backgroundColor = "unset";
            deactive.style.color = "black";
            f_login.style.display = "block";
            f_signup.style.display = "none";

        }
    })
</script>