<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div>
        <img src="{{ asset('public') }}/admin/storage/g-tech-point.jpg" class="logo-icon" alt="logo icon">
      </div>
      <div>
        {{-- <h4 class="logo-text">GKTECH</h4> --}}
      </div>
      <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
      </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

      <li>


        <a href="{{ url('/') }}" target="_blank">
          <div class="parent-icon"><i class="bi bi-house-fill"></i>
          </div>
          <div class="menu-title">Visit Site</div>
        </a>
      </li>

      {{-- <li>
        <a href="#">
          <div class="parent-icon"><i class="bi bi-grid-fill"></i>
          </div>
          <div class="menu-title">Menu</div>
        </a>
      </li>



      <li>
        <a href="#" class="has-arrow">
          <div class="parent-icon"><i class="bi bi-grid-fill"></i>
          </div>
          <div class="menu-title">Home</div>
        </a>
        <ul>
          <li>
            <a href="{{ url('admin/slider/create') }}"><i class="bi bi-grid-fill"></i>Create Slider </a>
          </li>

          <li> <a href="#"><i class="bi bi-grid-fill"></i>view</a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#" class="has-arrow">
          <div class="parent-icon"><i class="bi bi-mortarboard-fill"></i>
          </div>
          <div class="menu-title">Study Abroad</div>
        </a>
        <ul>
          <li>
            <a href="{{ url('admin/study/create') }}"><i class="bi bi-grid-fill"></i>Create </a>
          </li>

          <li> <a href="{{ url('admin/study') }}"><i class="bi bi-grid-fill"></i>view</a>
          </li>

          <li>
              <a href="{{ url('admin/studysubcategory/create') }}"><i class="bi bi-grid-fill"></i>Subcategory Create</a>
          </li>

          <li>
              <a href="{{ url('admin/studysubcategory') }}"><i class="bi bi-grid-fill"></i>Subcategory View</a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#" class="has-arrow">
          <div class="parent-icon"><i class="bi bi-cpu"></i>
          </div>
          <div class="menu-title">Our Services</div>
        </a>
        <ul>
          <li>
            <a href="{{ url('admin/service/create')}}"><i class="bi bi-grid-fill"></i>Create </a>
          </li>

          <li> <a href="{{ url('admin/service')}}"><i class="bi bi-grid-fill"></i>view</a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#" class="has-arrow">
          <div class="parent-icon"><i class="bi bi-images"></i>
          </div>
          <div class="menu-title">Gallery</div>
        </a>
        <ul>
          <li>
            <a href="{{ url('admin/gallery/create')}}"><i class="bi bi-grid-fill"></i>Create </a>
          </li>

          <li> <a href="{{ url('admin/gallery')}}"><i class="bi bi-grid-fill"></i>view</a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#" class="has-arrow">
          <div class="parent-icon"><i class="bi bi-file-earmark-person"></i>
          </div>
          <div class="menu-title">About us</div>
        </a>
        <ul>
          <li>
            <a href="{{ url('admin/about/create')}}"><i class="bi bi-grid-fill"></i>Create </a>
          </li>

          <li> <a href="{{ url('admin/about')}}"><i class="bi bi-grid-fill"></i>view</a>
          </li>
        </ul>
      </li> --}}

      {{-- <li>
        <a href="#" class="has-arrow">
          <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
          </div>
          <div class="menu-title">Contact us</div>
        </a>
        <ul>

          <li>
            <a href="#"><i class="bi bi-grid-fill"></i>Create </a>
          </li>

          <li> <a href="#"><i class="bi bi-grid-fill"></i>view</a>
          </li>
        </ul>
      </li> --}}

      {{-- <li>
        <a href="#" class="has-arrow">
          <div class="parent-icon"><i class="bi bi-file-earmark-post"></i>
          </div>
          <div class="menu-title">Blog</div>
        </a>
        <ul>

          <li>
            <a href="{{ url('admin/blog/create')}}"><i class="bi bi-grid-fill"></i>Create </a>
          </li>

          <li> <a href="{{ url('admin/blog/')}}"><i class="bi bi-grid-fill"></i>view</a>
          </li>
        </ul>
      </li> --}}

      <li>
        <a href="#" class="has-arrow">
          <div class="parent-icon"><i class="bi bi-file-earmark-post"></i>
          </div>
          <div class="menu-title">Contact Details</div>
        </a>
        <ul>

          <li>
            <a href="{{ url('admin/contactdetails/index')}}"><i class="bi bi-grid-fill"></i>All Details </a>
          </li>

          {{-- <li> <a href="{{ url('admin/blog/')}}"><i class="bi bi-grid-fill"></i>view</a> --}}
          </li>
        </ul>
      </li>

      {{-- <li>
        <a href="#" class="has-arrow">
          <div class="parent-icon"><i class="bi bi-gear-fill"></i>
          </div>
          <div class="menu-title">SEO Setting</div>
        </a>
        <ul>

          <li>
            <a href="#"><i class="bi bi-grid-fill"></i>Create </a>
          </li>

          <li> <a href="#"><i class="bi bi-grid-fill"></i>view</a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#" class="has-arrow">
          <div class="parent-icon"><i class="bi bi-info-square"></i>
          </div>
          <div class="menu-title">Apply Now</div>
        </a>
        <ul>

          <li>
            <a href="#"><i class="bi bi-grid-fill"></i>Create </a>
          </li>

          <li> <a href="#"><i class="bi bi-grid-fill"></i>view</a>
          </li>
        </ul>
      </li> --}}



      <li class="menu-label">Administrator</li>
      <li>
        <a class="has-arrow" href="javascript:;">
          <div class="parent-icon"><i class="bi bi-lock-fill"></i>
          </div>
          <div class="menu-title">Authentication</div>
        </a>
        {{-- <ul>
          <li> <a href="#" target="_blank"><i class="bi bi-check-square"></i>Sign In</a>
          </li>
          <li> <a href="#" target="_blank"><i class="bi bi-exclamation-square"></i>Sign Up</a>
          </li>


          <li> <a href="#" target="_blank"><i class="bi bi-clipboard-check-fill"></i>Forgot Password</a>
          </li>
          <li> <a href="#" target="_blank"><i class="bi bi-x-square"></i>Reset Password</a>
          </li>
        </ul> --}}
      </li>
      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
          </div>
          <div class="menu-title">Logout</div>
        </a>
      </li>

    </ul>
    <!--end navigation-->
 </aside>
