<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Sky</b>Team</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sky</b> Team</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

        @include('admin.layouts.menu')
    </nav>
</header>

<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('/')}}/design/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Islam Adel</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header text-center">
          <i class="fa fa-cogs" aria-hidden="true"></i>
          {{trans('admin.control_panel')}}
      </li>

<!-- Start Links Main -->
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('dashboard')}}"><i class="fa fa-circle-o"></i> {{trans('admin.home-page')}}</a></li>
            <li><a href="{{url('settings')}}"><i class="fa fa-circle-o"></i> {{trans('admin.settings')}}</a></li>
          </ul>
        </li>
<!-- End Links Main -->

<!-- Start Memebers -->
<li class="active treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>{{trans('admin.members')}}</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('users')}}"><i class="fa fa-users"></i> {{trans('admin.members')}}</a></li>
            <li><a href="{{url('users/create')}}"><i class="fa fa-plus"></i> {{trans('admin.add_members')}}</a></li>
          </ul>
</li>
<!-- End Members -->

<!-- Start Departments -->
<li class="active treeview">
          <a href="#">
            <i class="fa fa-list"></i> <span>{{trans('admin.department')}}</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('departments')}}"><i class="fa fa-files-o" aria-hidden="true"></i> {{trans('admin.all_department')}}</a></li>
            <li><a href="{{url('departments/create')}}"><i class="fa fa-plus"></i> {{trans('admin.add_departments')}}</a></li>
            <li><a href="{{url('laptop')}}"><i class="fa fa-circle-o"></i> {{trans('admin.laptop')}}</a></li>
            <li><a href="{{url('tablet')}}"><i class="fa fa-circle-o"></i> {{trans('admin.tablet')}}</a></li>
            <li><a href="{{url('mobile')}}"><i class="fa fa-circle-o"></i> {{trans('admin.mobile')}}</a></li>
            <li><a href="{{url('admin/contact')}}"><i class="fa fa-circle-o"></i> {{trans('admin.contact')}}</a></li>
          </ul>
</li>
<!-- End Departments -->
 
      
       
       
      
     
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
