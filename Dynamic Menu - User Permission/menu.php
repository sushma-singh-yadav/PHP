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
$url= basename($_SERVER['REQUEST_URI']);
///get the sub menu id 
$submenuqry="SELECT submenu_id from sub_menu where submenu_url='$url'";
$submenures=mysqli_query($con,$submenuqry);
$submenudata=mysqli_fetch_assoc($submenures);
$submenu_id=$submenudata['submenu_id'];

///check menu access
$accessqry="SELECT user_permission FROM menu_useraccess WHERE sub_menu_id='$submenu_id' AND user_id='1'";
$accessres=mysqli_query($con,$accessqry);
$accessdta=mysqli_fetch_assoc($accessres);
$user_permission=$accessdta['user_permission'];



$menulistqry="SELECT * FROM menu where menu_status='Enable'";
$menulistres=mysqli_query($con,$menulistqry);
while($menulistdata=mysqli_fetch_assoc($menulistres))
{
$menu_id=$menulistdata['menu_id'];

$menuaccessqry="SELECT * from menu_useraccess where menu_id='$menu_id' AND menu_useraccess.user_permission='True'";
$menuaccessres=mysqli_query($con,$menuaccessqry);
$menuaccessrow=mysqli_num_rows($menuaccessres);
if($menuaccessrow>0)
{
?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <span><i class="<?php echo $menulistdata['menu_icon'];?>"></i></span>  <?php echo $menulistdata['menu_name'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php
$login_user=1;
$submenulistqry="SELECT * FROM sub_menu 
                inner join menu_useraccess on menu_useraccess.sub_menu_id=sub_menu.submenu_id
where submenu_status='Enable' AND sub_menu.menu_id='$menu_id' AND submenu_display='Yes' AND menu_useraccess.user_permission='True' AND menu_useraccess.user_id='$login_user' order by submenu_order asc";
$submenulistres=mysqli_query($con,$submenulistqry);
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