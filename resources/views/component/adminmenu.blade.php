<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">

          <!--edit this-->
          <img src="/dist/img/pp.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{session('karyawan')->nama_karyawan}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li>
            <a href="/karyawan">
              <i class="fa fa-user"></i> <span>Karyawan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>
      
        <li>
          <a href="/jabatan">
            <i class="fa fa-address-card"></i> <span>Jabatan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li>
          <a href="/departemen">
            <i class="fa fa-building"></i> <span>Departemen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li>
            <a href="/arsip">
              <i class="fa fa-archive"></i> <span>Arsip</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>

        <li>
            <a href="/inventory">
              <i class="fa fa-tasks"></i> <span>Inventory</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>

        <li>
            <a href="/location">
              <i class="glyphicon glyphicon-map-marker"></i> <span>Location</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li> 

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  