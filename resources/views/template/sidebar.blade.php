<div class="page-sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
        <div>
            {{-- <img class="img-50 rounded-circle" src="{{ asset('assets') }}/dashboard/images/user/1.jpg" alt="#"> --}}
        </div>
        <h6 class="mt-3 f-12">{{ Auth::guard('mentor')->user()->username }}</h6>
    </div>
    <ul class="sidebar-menu">
        <li class="active">
            <div class="sidebar-title">Dashboard</div>
        </li>
            @if (Auth::guard('mentor')->user()->role == 2)
        <li>
            <a href="#" class="sidebar-header">
                <i class="icon-blackboard"></i><span>Menu</span>
                <i class="fa fa-angle-right pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="/admin-daftar-course" class="{{ request()->is('admin-daftar-course') ? 'active' : '' }}"><i class="fa fa-angle-right"></i>Course</a></li>
                <li><a href="/admin-daftar-mentor" class="{{ request()->is('admin-daftar-mentor') ? 'active' : '' }}"><i class="fa fa-angle-right"></i>Mentor</a></li>
                <li><a href="/admin-daftar-jurusan" class="{{ request()->is('admin-daftar-jurusan') ? 'active' : '' }}"><i class="fa fa-angle-right"></i>Jurusan</a></li>
            </ul>
        </li>
        @else
        <li>
            <a href="#" class="sidebar-header">
                <i class="icon-blackboard"></i><span>Menu</span>
                <i class="fa fa-angle-right pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="/mentor-daftar-course" class="{{ request()->is('mentor-daftar-course') ? 'active' : '' }}"><i class="fa fa-angle-right"></i>Course</a></li>
                {{-- <li><a href="/admin-daftar-mentor" class="{{ request()->is('admin-daftar-mentor') ? 'active' : '' }}"><i class="fa fa-angle-right"></i>Mentor</a></li> --}}
            </ul>
        </li>
            @endif
            
        {{-- <li>
            <a href="/admin" class="sidebar-header {{ request()->is('admin') ? 'active' : '' }}">
                <i class="icon-anchor"></i><span> Starter kit</span>
            </a>
        </li> --}}
       
        
    </ul>
</div>