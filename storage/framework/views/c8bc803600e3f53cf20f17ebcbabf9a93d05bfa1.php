<?php echo $__env->yieldContent('menu-sidebar-html'); ?>
<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo" style="position: relative;top: 20%;">
                <a href="">
                    <img src="<?php echo e(asset('images/Sans titre.png')); ?>" alt="Cool Admin" class="img_haut_a_gauche" height="70px" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1" style="position: relative;top: 20%;">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="/index.html">
                                <em class="fas fa-tachometer-alt"></em>Page d'accueil</a>
                        </li>
                        <li>
                                <a href="/dashboard">Tableau de Bord</a>
                        </li> 
                        <li><a href="/dashboard">Espace Elève</a></li>
                        <li><a href="/bda">Le BDA</a></li>
                        <li><a href="/bds">Le BDS</a></li>
                        <li><a href="/bdc">Le BDC</a></li>
                        <!--<li><a href="/activity">Activités</a></li>  -->
                        <li>
                            
                        </li> 
                                              
                    </ul>
                </nav>
            </div>
        </aside><?php /**PATH /home/site/bde/resources/views/layouts/body/HTML/Menu-sidebar.blade.php ENDPATH**/ ?>