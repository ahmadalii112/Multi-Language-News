<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('backend/assets/images/logo.svg')}}"
                                                                   alt="logo"/></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img
                    src="{{asset('backend/assets/images/logo-mini.svg')}}" alt="logo"/></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{asset('backend/assets/images/faces/face15.jpg')}}"
                             alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
                        <span>{{\Illuminate\Support\Facades\Auth::user()->email}}</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                     aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>


        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
                <span class="menu-title">Categories</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('categories.index')}}">Category</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('sub_categories.index')}}">Sub-Category</a></li>
                </ul>
            </div>
        </li>


        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-google-earth"></i>
              </span>
                <span class="menu-title">District</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('district.index')}}"> District </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('sub_district.index')}}"> Sub District </a></li>
                </ul>
            </div>
        </li>



        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false" aria-controls="post">
              <span class="menu-icon">
                <i class="mdi mdi-note-text"></i>
              </span>
                <span class="menu-title">Posts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="post">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('posts.create')}}"> Add Posts </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('posts.index')}}"> All Posts </a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#links" aria-expanded="false" aria-controls="links">
              <span class="menu-icon">
                <i class="mdi mdi-web"></i>
              </span>
                <span class="menu-title">Website Links</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="links">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('weblinks.create')}}"> Add Website links </a>
                    <li class="nav-item"><a class="nav-link" href="{{route('weblinks.index')}}"> All Website links  </a></li>
                </ul>
            </div>
        </li>


        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="setting">
              <span class="menu-icon">
                <i class="mdi mdi-settings"></i>
              </span>
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="setting">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('social_setting')}}"> Social Setting </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('seo_setting')}}"> Seo Setting </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('prayer_setting')}}"> Prayers Setting </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('liveTV_setting')}}"> Live TV Setting </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('notice.setting')}}"> Notice Setting </a>
                    </li>
                </ul>
            </div>
        </li>






        <li class="nav-item menu-items">
            <a class="nav-link"  data-toggle="collapse" href="#photo"  aria-expanded="false" aria-controls="photo">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                <span class="menu-title">Gallery</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="photo">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('photo.index')}}"> Photo Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('video.index')}}"> Video Gallery</a></li>
                </ul>
            </div>
        </li>

</nav>