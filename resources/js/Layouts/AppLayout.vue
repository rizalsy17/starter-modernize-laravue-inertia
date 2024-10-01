<template>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <Sidebar />
    <!-- Sidebar End -->

    <!-- Main wrapper -->
    <div class="body-wrapper">
      <!-- Header Start -->
      <Header />
      <!-- Header End -->

      <div class="container-fluid">
        <slot></slot> <!-- Content from child components will be rendered here -->
      </div>
    </div>
  </div>
</template>

<script>
import Sidebar from '../Components/Sidebar.vue'; 
import Header from '../Components/Navbar.vue'; // Import Navbar component

export default {
  components: {
    Sidebar,
    Header,
  },
};
</script>

<style scoped>
/* Tambahkan gaya khusus jika diperlukan */
</style>
