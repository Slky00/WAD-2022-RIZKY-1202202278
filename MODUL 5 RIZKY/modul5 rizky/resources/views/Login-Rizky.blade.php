<!DOCTYPE html>
<html lang="en">
    @include('partial.head')
    <body>
        <section class="login">
            <form action="/login" method="post" class="login__form auth-form">
                <h1 class="login__title auth-title">Login</h1>
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control bg-light" id="email" value="" placeholder="Masukkan email" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" name="password" class="form-control bg-light" id="password" value="" placeholder="Masukkan kata sandi" required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="remembered" id="rememberMe" name="remember" >
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <input type="submit" class="regis__btn auth-btn" name="login" value="Login">
                <!-- <button type="submit" class="login__btn auth-btn">Login</button> -->
                <p class="auth-redirect">Anda belum punya akun? <a href="/register">Daftar</a></p>
            </form>
        </section>
    </body>
</html>