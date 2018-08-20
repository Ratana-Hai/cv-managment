<!-- Sidebar menu-->
<aside class="app-sidebar">
  <div class="app-sidebar__user">
    <div>
      <p class="app-sidebar__user-name">John Doe</p>
      <p class="app-sidebar__user-designation">Frontend Developer</p>
    </div>
  </div>
  <ul class="app-menu">
    <li class="app-menu__item {{ request()->is('home') ? 'active' : '' }}"><a class="app-menu__item" href="{{url('home')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">ទំរង់ចុះបញ្ជីទាហាន</span></a></li>
    <li class="app-menu__item {{ request()->is('armies') ? 'active' : '' }}"><a class="app-menu__item" href="{{url('armies')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">បញ្ជីទាហាន</span></a></li>
    <li class="app-menu__item {{ request()->is('grade') ? 'active' : '' }}"><a class="app-menu__item" href="{{url('grade')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">ដំឡើងឋានន្ដរសក្កិ</span></a></li>



  </ul>
</aside>




        </ul>
    </div>
</div>
