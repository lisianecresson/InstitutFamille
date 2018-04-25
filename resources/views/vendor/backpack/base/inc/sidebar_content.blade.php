<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{backpack_url('page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
<li><a href="{{ url('admin/formateur') }}"><i class="fa fa-address-card"></i> <span>Formateurs</span></a></li>
<li><a href="{{ url('admin/livre') }}"><i class="fa fa-book"></i> <span>Livres</span></a></li>
<li><a href="{{ url('admin/memoire') }}"><i class="fa fa-address-book"></i> <span>Mémoires d'étudiant</span></a></li>
<li><a href="{{ url('admin/dvd') }}"><i class="fa fa-video-camera"></i> <span>DVD</span></a></li>
<li><a href="{{ url('admin/vod') }}"><i class="fa fa-file-video-o"></i> <span>VOD</span></a></li>
<li><a href="{{ url('admin/coursenligne') }}"><i class="fa fa-laptop"></i> <span>Cours en ligne</span></a></li>
<li><a href="{{ url('admin/lieu') }}"><i class="fa fa-map-marker"></i> <span>Lieux</span></a></li>
<li><a href="{{ url('admin/conference') }}"><i class="fa fa-calendar-check-o"></i> <span>Congrès et conférences</span></a></li>
          <!--<li><a href="{{ url('admin/typeformation') }}"><i class="fa fa-folder"></i> <span>Types de formation</span></a></li>-->
<li><a href="{{ url('admin/formation') }}"><i class="fa fa-graduation-cap"></i> <span>Formations</span></a></li>
<li><a href="{{ url('admin/formationlieu') }}"><i class="fa fa-graduation-cap"></i> <span>Ajouter dates et lieux formations</span></a></li>
<li><a href="{{ url('admin/slider') }}"><i class="fa fa-arrows-h"></i> <span>Slider</span></a></li>

<!-- Users, Roles Permissions -->
  <li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
  </li>