
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
<div class="c-sidebar-brand d-lg-down-none">
<svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
    <use xlink:href="assets/brand/coreui.svg#full"></use>
</svg>
<svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
<use xlink:href="assets/brand/coreui.svg#signet"></use>
</svg>
</div>
<ul class="c-sidebar-nav ps ps--active-y">
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="index.html">
    <svg class="c-sidebar-nav-icon">
    </svg> Dashboard
    </a>
</li>
<li class="c-sidebar-nav-title">users</li>    
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="typography.html">
        <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
        </svg> 
        Registar Utilizador
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="typography.html">
        <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
        </svg> 
        Gerir Utilizadores
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">    
        
        <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
        </svg> 
        Logout
        </a>
    </li>
<li class="c-sidebar-nav-title">Books</li>


</ul>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
