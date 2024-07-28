<?php

    $admin = new Admin(); 
    $id = $_SESSION['admin'];

    $stmt = $admin->get_userinfo($id);
    $userprofile = $stmt->fetch(PDO::FETCH_ASSOC);

?>


<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="index.php"><img src="../assets/img/Logo/Anganawadi_Logo_009.png" style="width:70px;height:70px" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../assets/img/Logo/Anganawadi_Logo_009.png" style="width:50px;height:50px" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    
  <ul class="navbar-nav navbar-nav-right">
    <li class="nav-item nav-profile dropdown">
      <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
        <div class="nav-profile-img">
          <img src="../assets/img/<?php echo $userprofile['image'];?>" onerror="this.src='../assets/img/default-dp-2.png'">
          <span class="availability-status online"></span>
        </div>
        <div class="nav-profile-text">
          <p class="mb-1 text-black"><?php echo $userprofile['A_name']; ?></p>
        </div>
      </a>
      <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
        <a class="dropdown-item" href="adminprofile.php">
        <i class="mdi mdi-cached mr-2 text-success"></i> Profile </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" id="logoutTop">
        <i class="mdi mdi-logout mr-2 text-primary"></i> Logout </a>
      </div>
      </li>
  </ul>
        
</nav>