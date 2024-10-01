<template>
    <nav class="navbar navbar-expand-lg navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item d-block d-xl-none">
          <Link class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
            <i class="ti ti-menu-2"></i>
          </Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link nav-icon-hover" href="javascript:void(0)">
            <i class="ti ti-bell-ringing"></i>
            <div class="notification bg-primary rounded-circle"></div>
          </Link>
        </li>
      </ul>
      <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
          <Link href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</Link>
          <li class="nav-item dropdown">
            <Link class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
              <img :src="getAssetUrl('assets/images/profile/user-1.jpg')" alt="Profile Picture" width="35" height="35" class="rounded-circle">
            </Link>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
              <div class="message-body">
                <Link href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                  <i class="ti ti-user fs-6"></i>
                  <p class="mb-0 fs-3">My Profile</p>
                </Link>
                <Link href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                  <i class="ti ti-mail fs-6"></i>
                  <p class="mb-0 fs-3">My Account</p>
                </Link>
                <Link href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                  <i class="ti ti-list-check fs-6"></i>
                  <p class="mb-0 fs-3">My Task</p>
                </Link>
                <Link href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</Link>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </template>
  
  <script>
  import { Link } from '@inertiajs/vue3'; // Import Inertia Link
  
  export default {
    components: {
      Link,
    },
    methods: {
    getAssetUrl(path) {
      return '/' + path; // Jalur ke folder public di Laravel
    }
  }
  };
  </script>
  
  <style scoped>
  /* Tambahkan gaya khusus jika diperlukan */
  </style>
  