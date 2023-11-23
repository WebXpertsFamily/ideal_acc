<div class="sidebar-inner slimscrollleft">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link {{ Route::is('admin.user.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Users
                        <span class="badge badge-info right">{{$userCount}}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.role.index') }}" class="nav-link {{ Route::is('admin.role.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-tag"></i>
                    <p>Role
                        <span class="badge badge-success right">{{$RoleCount}}</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.permission.index') }}" class="nav-link {{ Route::is('admin.permission.index') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-hat-cowboy"></i>
                    <p>Permission
                        <span class="badge badge-danger right">{{$PermissionCount}}</span>
                    </p>
                </a>
            </li>
            {{-- <li class="nav-item">
            <a href="{{ route('admin.category.index') }}" class="nav-link {{ Route::is('admin.category.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>Categories
                    <span class="badge badge-warning right">{{$CategoryCount}}</span>
                </p>
            </a>
            </li> --}}
            {{-- <li class="nav-item">
            <a href="{{ route('admin.subcategory.index') }}" class="nav-link {{ Route::is('admin.subcategory.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-list"></i>
                <p>Sub Category
                    <span class="badge badge-secondary right">{{$SubCategoryCount}}</span>
                </p>
            </a>
            </li> --}}
            {{-- <li class="nav-item">
            <a href="{{ route('admin.collection.index') }}" class="nav-link {{ Route::is('admin.collection.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-pdf"></i>
                <p>Collection
                    <span class="badge badge-primary right">{{$CollectionCount}}</span>
                </p>
            </a>
            </li> --}}
            {{-- <li class="nav-item">
            <a href="{{ route('admin.product.index') }}" class="nav-link {{ Route::is('admin.product.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>Products
                    <span class="badge badge-warning right">{{$ProductCount}}</span>
                </p>
            </a>
            </li> --}}
            <li class="nav-item">
                <a href="{{ route('admin.profile.edit') }}" class="nav-link {{ Route::is('admin.profile.edit') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-id-card"></i>
                    <p>Profile</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('bank.list') }}" class="nav-link {{ Route::is('bank.create') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-id-card"></i>
                    <p>Bank Registration</p>
                </a>
            </li>
            <li class="sidenav">
                <a class=" dropdown-btn nav-link">
                    <i class="nav-icon fas fa-id-card"></i>
                    <p>Vouchers</p>
                    <i class="fas fa-angle-right dropdown   "></i>
                    {{-- <i class="fa fa-caret-down nav-icon fas"></i> --}}
                </a>
                <ul class="dropdown-container">
                    <li><a href="#">Bank</a></li>
                    <li><a href="#">BPV</a></li>
                    <li><a href="#">BRV</a></li>
                </ul>
                {{-- <script>
                    var dropdown = document.getElementsByClassName("dropdown-btn");
                    var i;
                    for (i = 0; i < dropdown.length; i++) {
                      dropdown[i].addEventListener("click", function() {
                          this.classList.toggle("active");
                          var dropdownContent = this.nextElementSibling;
                          if (dropdownContent.style.display === "block") {
                              dropdownContent.style.display = "none";
                          }
                          else
                          {
                              dropdownContent.style.display = "block";
                          }
                      });
                      }
                    </script> --}}
            </li>
        </ul>
    </nav>

</div>
