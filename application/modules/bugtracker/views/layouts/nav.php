<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-bootsnipp-collapse">
                <span class="sr-only"><?php echo $this->lang->line('lbl_toggle_navigation'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo create_url('home'); ?>"><?php echo $this->lang->line('lbl_bugtracker'); ?></a>
        </div>

        <div class="collapse navbar-collapse navbar-bootsnipp-collapse">

            <ul class="nav navbar-nav">
                <li class="dropdown2 <?php echo $this->router->class == 'user' ? 'active' : ''; ?>">
                    <a href="<?php echo create_url('sys/user'); ?>" class="dropdown-toggle" data-toggle="dropdown">
                        Dashboards&nbsp;
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo create_url('sys/user'); ?>">View all project</a></li>
                    </ul>
                </li>

                <li class="dropdown2 <?php echo $this->router->class == 'city' ? 'active' : ''; ?>">
                    <a href="<?php echo create_url('sys/city'); ?>" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-th-list"></span>&nbsp;
                        Projects&nbsp;
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo create_url('sys/city'); ?>">Project 01</a></li>
                        <li><a href="<?php echo create_url('sys/city/add'); ?>">Project 02</a></li>
                    </ul>
                </li>

                <li class="dropdown <?php echo $this->router->class == 'company' ? 'active' : ''; ?>">
                    <a href="<?php echo create_url('about'); ?>" class="dropdown-toggle2" data-toggle="dropdown2">
                        <span class="glyphicon glyphicon-hdd"></span>&nbsp;
                        Issues&nbsp;
                        <b class="caret"></b>
                    </a>
                    
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php if (!session_login()) : ?>
                <li id="nav-register-btn"><a href="/register"><?php echo $this->lang->line('lbl_register'); ?></a></li>
                <li id="nav-login-btn"><a href="<?php echo create_url('login'); ?>"><i class="icon-login"></i><?php echo $this->lang->line('lbl_login'); ?></a></li>
                <?php else: ?>
                <li class="dropdown2 <?php echo $this->router->class == '/<?' ? 'active' : ''; ?>">
                    <a href="<?php echo create_url('sys/<?'); ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-globe"></span> <?php echo current_language() ? current_language() : $this->lang->line('lbl_language'); ?> <b class2="caret"></b></a2>
                    <ul class="dropdown-menu">
                        <?php foreach (config_item('language_array') as $key => $value) : ?>
                        <li><a href="<?php echo current_url_with_params(array('language' => $key)); ?>"><?php echo $value;?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="dropdown2 <?php echo $this->router->class == '/<' ? 'active' : ''; ?>">
                    <a href="<?php echo create_url('sys/<'); ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo session_login(false)->username; ?> <b class2="caret"></b></a2>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-tasks"></span>&nbsp;<?php echo $this->lang->line('lbl_profile');?></a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo create_url('logout'); ?>"><span class="glyphicon glyphicon-edit"></span>&nbsp;<?php echo $this->lang->line('lbl_logout'); ?></a></li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>