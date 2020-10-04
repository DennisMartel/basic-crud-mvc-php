<div class="navbar-fixed">
    <nav class="blue darken-1">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><?php echo NAME_PROJECT ?></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo BASE_URL?>/Main/listarProductos">productos</a></li>
                </ul>
            </div>
    </nav>
</div>

<ul class="sidenav" id="mobile-demo">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="<?php echo BASE_URL . '/assets/img/bg.jpg'?>">
            </div>
            <a href="#user"><img class="circle" src="<?php echo BASE_URL . '/assets/img/profile.svg'?>"></a>
            <a href="#name"><span class="white-text name">Dennis Martel</span></a>
            <a href="#email"><span class="white-text email">marteldennis05@gmail.com</span></a>
        </div>
    </li>
    <li><a href="<?php echo BASE_URL?>/Main/listarProductos"><i class="material-icons">store</i>Productos</a></li>
</ul>