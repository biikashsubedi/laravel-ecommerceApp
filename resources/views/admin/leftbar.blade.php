<!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{'dashboard'}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-building"></i>
            <span>Products</span>
          </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{'addproject'}}">Add Product</a>
            <a class="dropdown-item" href="{{'blog'}}">Manage Product</a>
          </div>
          </li>

          <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-newspaper"></i>
            <span>News</span>
          </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{'addnews'}}">Add News</a>
            <a class="dropdown-item" href="{{'managenews'}}">Manage News</a>
          </div>
          </li> -->
        <li class="nav-item active">
          <a class="nav-link " href="{{route('admindetail')}}">
            <i class="fas fa-users"></i>
            <span>Admins</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link " href="{{route('userdetail')}}">
            <i class="fas fa-users"></i>
            <span>Users</span>
          </a>
        </li>


          
      </ul>