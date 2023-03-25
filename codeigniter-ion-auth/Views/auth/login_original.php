<h1><?php echo lang('Auth.login_heading');?></h1>
<p><?php echo lang('Auth.login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/login');?>

  <p>
    <?php echo form_label(lang('Auth.login_identity_label'), 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo form_label(lang('Auth.login_password_label'), 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo form_label(lang('Auth.login_remember_label'), 'remember');?>
    <?php echo form_checkbox('remember', '1', false, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('Auth.login_submit_btn'));?></p>

<?php echo form_close();?>
<div id="ip" class="alert alert-danger" role="alert">

</div>
<p><a href="forgot_password"><?php echo lang('Auth.login_forgot_password');?></a></p>
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
<script>
	$.get("https://ipinfo.io", function(response) {
            $('#ip').text(response.ip);
        }, "json")
</script>

