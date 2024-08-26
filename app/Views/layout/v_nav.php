<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <?php if (session()->get('Hak Akses') == "1") { ?>
            <li><a href="<?= base_url('teknisi') ?>">Dashboard</a></li>
            <li><a href="#">About</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?= base_url('data siswa')?>">Data Siswa</a></li>
                <li><a href="#">Data Peralatan</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
            </li>
            <?php } ?>
            
          </ul>
          <!--<form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form> -->
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <?php if (session()->get('user_username') == "") { ?>
              <li><a href="<?= base_url('auth') ?>"><i class="fa fa-sign-in"></i> Login</a></li>
            <?php } else { ?>
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?= base_url('foto/' . session()->get('user_foto')) ?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Rahma Larasati</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?= base_url('foto/' . session()->get('user_foto')) ?>" class="img-circle" alt="User Image">

                  <p>
                    <?php session()->get('nama') ?> - <?php if(session()->get('Hak Akses')==1){
                        echo 'Teknisi';
                      } elseif (session()->get('Hak Akses')==2) {
                        echo 'Guru';
                      } elseif (session()->get('Hak Akses')==3) {
                        echo 'Siswa';
                      }
                      ?>
                    <small><?= date('d M Y')?></small>
                  </p>
                </li>
               
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url('auth/logout') ?>" class="btn btn-default btn-flat">Log out</a>
                  </div>
                </li>
              </ul>
            </li>
            <?php } ?>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <!--
        <section class="content-header">  
        <h1>
          Top Navigation
          <small>Example 2.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section> -->

      <!-- Main content -->
      <section class="content">
