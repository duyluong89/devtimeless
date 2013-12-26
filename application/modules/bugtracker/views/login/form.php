<div id="login-form">
    <?php
    echo form_open('login/index', 'role="form"');
    echo form_label($this->lang->line('lbl_username'), 'username') . form_input('username', '', 'placeholder="username" class="form-control" autocomplete="off"');
    echo form_label($this->lang->line('lbl_password'), 'password') . form_password('password', '', 'placeholder="password" class="form-control" autocomplete="off"');
    echo form_submit('submit', 'Login', 'class="btn btn-default"');
    echo form_close();
    ?>
</div>