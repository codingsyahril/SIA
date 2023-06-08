<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <img src="dist/img/icon_akun.png" class="img-square elevation-2" alt="User Image">
          <div><span></span>      </div>
          <div collspan="3"><a> Sistem informasi Akuntansi</a> </div>
         
        </div>
        <!-- <div class="info">
          <a href="#" class="d-block"><?php session_start(); echo $_SESSION['nama'];?></a>
        </div> -->
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          
          <li class="nav-header" >Menu </li>
          <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
            <ion-icon name="albums-sharp"></ion-icon>
              <p class="text">Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
              <a href="index.php?page=kas-masuk" class="nav-link">
              <ion-icon name="documents-sharp"></ion-icon>
              <p>Kas Masuk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=kas-keluar" class="nav-link">
            <ion-icon name="document-text-sharp"></ion-icon>
              <p>Kas Keluar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=rekap" class="nav-link">
            <ion-icon name="document-attach-sharp"></ion-icon>
              <p>Rekap Data</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
 