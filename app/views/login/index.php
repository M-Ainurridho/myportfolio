<section id="login">
    <div class="container mt-5 py-5">
        <div class="row pt-5">
            <div class="col-lg text-center">
                <h1>Login</h1>
            </div>
        </div>
    
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="<?= BASEURL ?>/login/verification" method="post">
                    <div class="mb-3">
                        <?php if (isset($_COOKIE['error'])) : ?>
                            <p class="text-danger fst-italic text-center">Mohon maaf, Untuk saat ini hanya admin yang bisa menggunakan fitur login</p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" autocomplete="off" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-eye show-pw"></i></span>
                        </div>
                    </div>
                    <div class="mb-3 d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>