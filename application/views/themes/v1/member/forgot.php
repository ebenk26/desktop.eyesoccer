<div class="mb-30">
    <b>Lupa Password</b>
    <span>Kami akan mengirimkan link untuk membuat password baru.</span>
</div>

<div class="frm-login-data m-0">
    <form class='form_basic' action="../member">
        <input type="hidden" name="fn" class="cinput" value="forgotact">
        <span>Email</span>
        <div>
            <input name="email" type="email" placeholder="Ketik alamat email" required>
            <span class='err msgemail'></span>
        </div>

        <div class="container mb-20">
            <button type="button" class="btn-abu-2" style="width:190px; margin:20px 0; float:left;" onclick="window.location.href = '../member';">Cancel</button>
            <button type="submit" class="btn-orange-3" style="width:190px; margin:20px 0; float:right;">Kirim</button>
        </div>
    </form>
</div>