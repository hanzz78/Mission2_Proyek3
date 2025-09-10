<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
</head>
<body>
    <h2 style="text-align: center;">Login</h2>

    <!-- tampilkan error kalau ada -->
    <?php if(session()->getFlashdata('error')): ?>
        <p style="color:red;">
            <?= session()->getFlashdata('error') ?>
        </p>
    <?php endif; ?>

    <!-- form login -->
    <form action="<?= site_url('login/auth') ?>" method="post" style="text-align: center;">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>