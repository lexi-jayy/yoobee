<h1> Pokemon Theme Options </h1>
<h3 class="title"> Manage Options </h3>
<p> Customize Sidebar Options </p>


<!-- registar_settings in function-admin.php  -->


<form method="post" action=" ">
 <?php settings_fields('yoobee-settings-group'); //function-admin.php line 25 ?>
 <?php do_settings_sections('Yoobee_page'); ?>
 <?php submit_button(); ?>

</form>