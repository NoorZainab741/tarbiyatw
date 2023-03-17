<!-- Page Sidebar Start-->
<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><a href="#"><img height="50px" width="50px" src="{{asset('assets/images/logo/tarbiyat.png')}}" alt=""></a>
        <a class="f-14 ml-4 mt-3" href="#"><h5>TARBIYAT</h5></a>

    </div>
  </div>
  <div class="sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
      <div><img class="img-60 rounded-circle" src="{{auth()->user()->getImagePath()}}" alt="#">
        <div class="profile-edit"><a href="{{route('profile')}}" target="_blank"><i data-feather="edit"></i></a></div>
      </div>
      <h6 class="mt-3 f-14">{{auth()->user()->name}}</h6>
      <p>{{auth()->user()->role}}</p>
    </div>
      <ul class="sidebar-menu">
          <li><a class="sidebar-header" href="{{route('todos.index')}}"><i data-feather="home"></i><span>Dashboard</span></a>
          </li>
          @if(auth()->user()->role=='admin')
              @if(auth()->user()->is_super_admin=='1')
          <li class="active"><a class="sidebar-header" href="#"><i
                      data-feather="shield"></i><span>Admins</span><i
                      class="fa fa-angle-right pull-right"></i></a>
              <ul class="sidebar-submenu">
                  <li class="active"><a href="{{route('admins.index')}}"><i class="fa fa-circle"></i>List</a></li>
                  <li><a class="active" href="{{route('admins.create')}}"><i class="fa fa-circle"></i>Add New</a></li>
              </ul>
          </li>
              @else
                  @endif
              <li class="active"><a class="sidebar-header" href="#"><i
                          data-feather="users"></i><span>Managers</span><i
                          class="fa fa-angle-right pull-right"></i></a>
                  <ul class="sidebar-submenu">
                      <li class="active"><a href="{{route('managers.index')}}"><i class="fa fa-circle"></i>List</a></li>
                      <li><a class="active" href="{{route('managers.create')}}"><i class="fa fa-circle"></i>Add New</a></li>
                  </ul>
              </li>
          @else
      @endif
          @if(auth()->user()->role=='admin' or auth()->user()->role=='mnager')
          <li class="active"><a class="sidebar-header" href="#"><i
                      data-feather="users"></i><span>Editors</span><i
                      class="fa fa-angle-right pull-right"></i></a>
              <ul class="sidebar-submenu">
                  <li class="active"><a href="{{route('editors.index')}}"><i class="fa fa-circle"></i>List</a></li>
                  <li><a class="active" href="{{route('editors.create')}}"><i class="fa fa-circle"></i>Add New</a></li>
              </ul>
          </li>
          @else
              @endif
          <li class="active"><a class="sidebar-header" href="#"><i
                      data-feather="menu"></i><span>Menus</span><i
                      class="fa fa-angle-right pull-right"></i></a>
              <ul class="sidebar-submenu">
                  <li class="active"><a href="{{route('modules.index')}}"><i class="fa fa-circle"></i>List</a></li>
                  <li><a class="active" href="{{route('modules.create')}}"><i class="fa fa-circle"></i>Add New</a></li>
              </ul>
          </li>
          <li class="active"><a class="sidebar-header" href="#"><i
                      data-feather="menu"></i><span>Sub Menus</span><i
                      class="fa fa-angle-right pull-right"></i></a>
              <ul class="sidebar-submenu">
                  <li class="active"><a href="{{route('sub_menus.index')}}"><i class="fa fa-circle"></i>List</a></li>
                  <li><a class="active" href="{{route('sub_menus.create')}}"><i class="fa fa-circle"></i>Add New</a></li>
              </ul>
          </li>
          <li class="active"><a class="sidebar-header" href="#"><i
                      data-feather="file"></i><span>Content Management</span><i
                      class="fa fa-angle-right pull-right"></i></a>
              <ul class="sidebar-submenu">
                  <li class="active"><a href="{{route('data_uploadings.index')}}"><i class="fa fa-circle"></i>List</a></li>
                  <li class="active"><a href="{{route('createwithoutsubmenu')}}"><i class="fa fa-circle"></i>Add New in Menu</a></li>
                  <li><a class="active" href="{{route('data_uploadings.create')}}"><i class="fa fa-circle"></i>Add New in Submenu</a></li>
              </ul>
          </li>
          <li class="active"><a class="sidebar-header" href="#"><i
                      data-feather="list"></i><span>Posts</span><i
                      class="fa fa-angle-right pull-right"></i></a>
              <ul class="sidebar-submenu">
                  <li class="active"><a href="{{route('posts.index')}}"><i class="fa fa-circle"></i>List</a></li>
                  <li><a class="active" href="{{route('posts.create')}}"><i class="fa fa-circle"></i>Add Post</a></li>
              </ul>
          </li>
          <li class="active"><a class="sidebar-header" href="#"><i
                      data-feather="message-square"></i><span>Feedback</span><i
                      class="fa fa-angle-right pull-right"></i></a>
              <ul class="sidebar-submenu">
                  <li class="active"><a href="{{route('feedbacks.index')}}"><i class="fa fa-circle"></i>List</a></li>
{{--                  <li><a class="active" href="#"><i class="fa fa-circle"></i>Add New</a></li>--}}
              </ul>
          </li>
          <li class="active"><a class="sidebar-header" href="#"><i
                      data-feather="user"></i><span>About Us</span><i
                      class="fa fa-angle-right pull-right"></i></a>
              <ul class="sidebar-submenu">
{{--                  <li class="active"><a href="#"><i class="fa fa-circle"></i>List</a></li>--}}
                  <li><a class="active" href="{{route('about_us.index')}}"><i class="fa fa-circle"></i>Add New</a></li>
              </ul>
          </li>
          <li class="active"><a class="sidebar-header" href="#"><i
                      data-feather="link"></i><span>Social Links</span><i
                      class="fa fa-angle-right pull-right"></i></a>
              <ul class="sidebar-submenu">
{{--                  <li class="active"><a href="#"><i class="fa fa-circle"></i>List</a></li>--}}
                  <li><a class="active" href="{{route('social_links.index')}}"><i class="fa fa-circle"></i>Add New</a></li>
              </ul>
          </li>
      </ul>
  </div>
</div>
<!-- Page Sidebar Ends-->

