<div class="c-sidebar-brand">
            <img class="c-sidebar-brand-full" src="{{ url('/assets/brand/coreui-base-white.svg') }}" width="118" height="46" alt="CoreUI Logo">
            <img class="c-sidebar-brand-minimized" src="{{ url('assets/brand/coreui-signet-white.svg') }}" width="118" height="46" alt="CoreUI Logo">
        </div>

        <ul class="c-sidebar-nav">
          <li class="c-sidebar-nav-title">
            GEstao de Livros
          </li>
          <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
              Livros
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
              
              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/livros">
                  Livros
                </a>
              </li>
              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/reglivro">
                  registar Livro
                </a>
              </li>
              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/generolist"> 
                  Generos
                </a>
              </li>
              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/genero">
                  novo Genero
                </a>
              </li>
              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/idiomalist"> 
                  Idiomas
                </a>
              </li>
              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/idioma">
                  novo idioma
                </a>
              </li>
              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/editoralist"> 
                  Editoras
                </a>
              </li>
              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/editora">
                  nova editora
                </a>
              </li>
              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/autorlist"> 
                  Autores
                </a>
              </li>
              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/autor">
                  novo autor
                </a>
              </li>
            </ul>
          </li>
          
          <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
              utilizadores
            </a>
            
            <ul class="c-sidebar-nav-dropdown-items">
              @if(Auth::check() === false)
              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/login">
                  Login</a>
              </li>
              @endif
              <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/regfuncionarrio" target="_top">
                Register</a></li>
                <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/userslist">
                  Listar</a>
              </li>
            </ul>
          </li>
          <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
              Compras
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
            </ul>
          </li>
        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>