<div class="menu">
    <a href="<?= base_url('home') ?>">Home</a>
    <?php if(session()->get('logged_in')): ?>
        <a href="<?= base_url('login/logout') ?>">Logout</a>
    <?php endif; ?>
</div>
