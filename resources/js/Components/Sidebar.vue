<template>
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <Link href="/" class="text-nowrap logo-img">
            <img src="@/assets/images/logos/dark-logo.svg" width="180" alt="Logo" />
          </Link>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" @click="toggleSidebar">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <Link href="/" class="sidebar-link" aria-expanded="false">
                <span><i class="ti ti-layout-dashboard"></i></span>
                <span class="hide-menu">Dashboard</span>
              </Link>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">UI COMPONENTS</span>
            </li>
            <li class="sidebar-item">
              <Link href="/buttons" class="sidebar-link" aria-expanded="false">
                <span><i class="ti ti-article"></i></span>
                <span class="hide-menu">Buttons</span>
              </Link>
            </li>
            <li class="sidebar-item">
              <Link href="/alerts" class="sidebar-link" aria-expanded="false">
                <span><i class="ti ti-alert-circle"></i></span>
                <span class="hide-menu">Alerts</span>
              </Link>
            </li>
            <li class="sidebar-item">
              <Link href="/card" class="sidebar-link" aria-expanded="false">
                <span><i class="ti ti-cards"></i></span>
                <span class="hide-menu">Card</span>
              </Link>
            </li>
            <li class="sidebar-item">
              <Link href="/forms" class="sidebar-link" aria-expanded="false">
                <span><i class="ti ti-file-description"></i></span>
                <span class="hide-menu">Forms</span>
              </Link>
            </li>
            <li class="sidebar-item">
              <Link href="/typography" class="sidebar-link" aria-expanded="false">
                <span><i class="ti ti-typography"></i></span>
                <span class="hide-menu">Typography</span>
              </Link>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <Link href="/login" class="sidebar-link" aria-expanded="false">
                <span><i class="ti ti-login"></i></span>
                <span class="hide-menu">Login</span>
              </Link>
            </li>
            <li class="sidebar-item">
              <Link href="/register" class="sidebar-link" aria-expanded="false">
                <span><i class="ti ti-user-plus"></i></span>
                <span class="hide-menu">Register</span>
              </Link>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXTRA</span>
            </li>
            <li class="sidebar-item">
              <Link href="/icons" class="sidebar-link" aria-expanded="false">
                <span><i class="ti ti-mood-happy"></i></span>
                <span class="hide-menu">Icons</span>
              </Link>
            </li>
            <li class="sidebar-item">
              <Link href="/sample-page" class="sidebar-link" aria-expanded="false">
                <span><i class="ti ti-aperture"></i></span>
                <span class="hide-menu">Sample Page</span>
              </Link>
            </li>
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
              </div>
              <div class="unlimited-access-img">
                <img src="@/assets/images/backgrounds/rocket.png" alt="Rocket" class="img-fluid" />
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
  </template>
  
  <script>
  import { Link } from '@inertiajs/vue3'; // Import Inertia Link
  
  export default {
    components: {
      Link,
    },
    methods: {
      toggleSidebar() {
        // Add your logic to toggle sidebar visibility
      },
    },
  };
  </script>
  
  <style scoped>
  /* Tambahkan gaya khusus jika diperlukan */
  </style>
  