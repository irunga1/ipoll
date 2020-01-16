<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="index.html" class="logo">I-POLL <span class="lite">Admin</span></a>
    <!--logo end-->



    <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->

        <!-- notificatoin dropdown end-->
    </div>
</header>

<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <?php foreach($menu as $it){?>
                <li class="">
                    <a href ="<?php echo base_url($it->url) ?>">    
                        <i class="<?php echo $it->icon;?>"></i>
                        <span>                            
                            
                                <?php echo $it->descripcion;?>
                            
                        </span>
                    </a>
                </li>

            <?php }?>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>

