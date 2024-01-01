<nav>
    <a href="<?=site_url('/');?>">Home</a>
    <a href="<?=site_url('/artikel');?>">Artikel</a>
    <a href="<?=site_url('/artikel/tambah');?>">Tambah Artikel</a>
    <a href="<?=site_url('/about');?>">About</a>
    <?php if (!isset($_SESSION['isLogin'])): ?>
    <a href="<?=site_url('/user/login');?>">Login</a>
    <?php else: ?>
    <a href="<?=site_url('/user/logout');?>">Logout</a>
    <?php endif; ?>
</nav>