<!-- - var navbarCustom = "navbar-fixed-top navbar-semi-dark navbar-shadow"-->
    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i>
                  <div class="bs-callout-info mt-1 p-1"></div></a></li>
            <li class="nav-item"><a href="index.html" class="navbar-brand nav-link"><img alt="branding logo" src="{{ asset('app-assets/images/logo/robust-logo-light.png') }}" data-expand="{{ asset('app-assets/images/logo/robust-logo-light.png') }}" data-collapse="{{ asset('app-assets/images/logo/robust-logo-small.png') }}" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x fa-rotate-90"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5"></i></a></li>
            </ul>
            <ul class="nav navbar-nav float-xs-right">
              <li class="nav-item"><a href="#" target="_blank" class="btn btn-success btn-doc-header"><i class="icon-bag3"></i>Notification</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>