<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

  <div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
      <!-- Left Menu Start -->
      <ul class="metismenu list-unstyled" id="side-menu">
        @auth
          <li class="menu-title">Menu</li>

          <li>
            <a href="#">
              <i data-feather="users"></i>
              <span>Data Pasien</span>
            </a>
          </li>

          <li>
            <a href="#">
              <i data-feather="activity"></i>
              <span>Rekapitulasi</span>
            </a>
          </li>

          <li class="menu-title">Bantuan</li>

          <li>
            <a href="#">
              <i data-feather="help-circle"></i>
              <span>Petunjuk</span>
            </a>
          </li>
        @else
          <li>
            <a href="#">
              <i data-feather="help-circle"></i>
              <span>Bantuan</span>
            </a>
          </li>
          <li>
            <a href="{{ route('masuk.tampil') }}">
              <i data-feather="log-in"></i>
              <span>Masuk</span>
            </a>
          </li>
        @endauth

        {{-- <div class="card mx-4 mb-0 mt-5 bg-transparent shadow-none">
          <div class="card-body">
            <div class="text-muted">Released v0.8</div>
          </div>
        </div> --}}

      </ul>

    </div>
    <!-- Sidebar -->
  </div>
</div>
<!-- Left Sidebar End -->
