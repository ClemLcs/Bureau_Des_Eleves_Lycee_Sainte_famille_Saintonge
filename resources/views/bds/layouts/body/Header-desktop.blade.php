@yield('header-desktop-html')
<!-- HEADER DESKTOP-->
<header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Rechercher un article" />
                                <button class="au-btn--submit" type="submit">
                                    <em class="zmdi zmdi-search"></em>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        <?php if(Auth::check() === true){
                                            $users = Auth::user();
                                        ?>
                                            <img src="{{$users->img_profil }}" alt="{{$users->img_profil }}" />
                                        <?php } ?> 
                                        </div>
                                        <div class="content">
                                        <?php if(Auth::check() === true){
                                            $users = Auth::user();
                                        ?>
                                            <a class="js-acc-btn" href="">{{$users->prenom}}</a>
                                        <?php } ?>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                    <?php if(Auth::check() === true){
                                                        $users = Auth::user();
                                                    ?>
                                                        <img src="{{$users->img_profil }}" alt="{{$users->img_profil }}" />
                                                    <?php } ?>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                    <?php if(Auth::check() === true){
                                                        $users = Auth::user();
                                                    ?>
                                                        <a href="#">{{$users->prenom}}</a>
                                                    <?php } ?>
                                                    </h5>
                                                    <span class="email">
                                                    <?php
                                                        $users = Auth::user();
                                                    ?>
                                                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cda7a2a5a3a9a2a88da8b5aca0bda1a8e3aea2a0">
                                                            {{$users['email']}}
                                                    </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <em class="zmdi zmdi-account"></em>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <em class="zmdi zmdi-settings"></em>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <em class="zmdi zmdi-money-box"></em>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{}}">
                                                    <em class="zmdi zmdi-power"></em>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</header>