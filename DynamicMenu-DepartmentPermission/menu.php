<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Dynamic Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     <!--  <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li> -->
<?php
include 'database.php';
$login_user=3;
///fetch the department of user
$userdeptqry="SELECT user_department FROM users where user_id='$login_user'";
$userdeptres=mysqli_query($con,$userdeptqry);
$userdeptdata=mysqli_fetch_assoc($userdeptres);
$userdepartment=$userdeptdata['user_department'];

$menulistqry="SELECT * FROM menu where menu_status='Enable'";
$menulistres=mysqli_query($con,$menulistqry);
while($menulistdata=mysqli_fetch_assoc($menulistres))
{
$menu_id=$menulistdata['menu_id'];

$submenulistqry="SELECT * FROM sub_menu                
where submenu_status='Enable' AND sub_menu.menu_id='$menu_id' AND submenu_display='Yes' AND sub_menu.submenu_department='$userdepartment' order by submenu_order asc";
$submenulistres=mysqli_query($con,$submenulistqry);
$submenutotal=mysqli_num_rows($submenulistres);
if($submenutotal>0)
{
?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <span><i class="<?php echo $menulistdata['menu_icon'];?>"></i></span>  <?php echo $menulistdata['menu_name'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php

while($submenulistdata=mysqli_fetch_assoc($submenulistres))
{?>
          <a class="dropdown-item" href="<?php echo $submenulistdata['submenu_url'];?>"><?php echo $submenulistdata['submenu_name'];?></a>
        <?php }?>
        </div>
      </li>
<?php }} ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Setting
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="menu_add.php">Add Menu</a>
          <a class="dropdown-item" href="submenu_add.php">Add Sub Menu</a>
          <a class="dropdown-item" href="user_permission.php">Permission</a>
        </div>
      </li>
    </ul>
  </div>
</nav>