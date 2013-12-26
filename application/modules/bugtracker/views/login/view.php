<?php
/**
 * Created by JetBrains PhpStorm.
 * User: duyluong
 * Date: 12/26/13
 * Time: 10:59 AM
 * To change this template use File | Settings | File Templates.
 */
?>
<div class="login-view text-larg">
    <h3><?php echo  $this->lang->line('lbl_system_bug_tracking');?></h3>
</div>
<?php
echo $this->load->view('login/form', TRUE);
?>