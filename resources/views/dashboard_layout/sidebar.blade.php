<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="">pengaduan</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="">pengaduan</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown @if(Request::is('home')) {{ 'active' }} @endif">
          <a href=" {{ route('home.index') }} " class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Dashboard</li>
        <li class="dropdown @if(Request::is('user/bot-service')) {{ 'active' }} @endif">
          <a href=" {{ route('user.bot_service') }} " class="nav-link"><i class="icon-bubbles4"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Starter</li>
        <li class="dropdown @if(Request::is('user')) {{ 'active' }} @endif">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>Account</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href=" {{ route('user.index') }} ">akun saya</a></li>
          </ul>
        </li>
        <li class="dropdown @if(Request::is('pengaduan*')) {{ 'active' }} @endif">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-hand-holding-usd"></i> <span>Pengaduan</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href=" {{ route('pengaduan.pengaduan_user') }} ">pengaduan saya</a></li>
            
            <li><a class="nav-link" href=" {{ route('pengaduan.index') }} ">Daftar pengaduan</a></li>
            <li><a class="nav-link" href=" {{ route('pengaduan.trashed') }} ">Daftar pengaduan yang telah dihapus</a></li>
      
          </ul>
        </li>
        
        <li class="dropdown @if(Request::is('category')) {{ 'active' }} @endif">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tags"></i> <span>Category</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href=" {{ route('category.index') }} ">Daftar category</a></li>
          </ul>
        </li>
  
        
        <li class="menu-header">Dokumentasi</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-info"></i> <span>Penggunaan</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="">membuat donasi</a></li>                
            <li><a class="nav-link beep beep-sidebar" href="">menjadi relawan</a></li>                
          </ul>
        </li>
        
        
        <li class="menu-header">admin area</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>management user</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="  {{ route('user.index') }}  ">daftar user</a></li>                
            <li><a class="nav-link beep beep-sidebar" href="">permintaan relawan</a></li>                
          </ul>
        </li>
  

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-home"></i> Home
        </a>
      </div>        
    </aside>
  </div>