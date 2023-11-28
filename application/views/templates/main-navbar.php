<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
  <div class="container-xxl">
    <div class="navbar-brand app-brand demo d-xl-flex py-0 me-4">
      <?php if ($logged_in == TRUE){ ?>
        <a href="<?php echo base_url(); ?>main" class="app-brand-link gap-2">
          <span class="app-brand-text demo menu-text fw-bold">kadboard.</span>
        </a>
      <?php }else { ?>
        <a href="<?php echo base_url(); ?>" class="app-brand-link gap-2">
          <span class="app-brand-text demo menu-text fw-bold">kadboard.</span>
        </a>
      <?php } ?>
    </div>

    <?php if ($logged_in == TRUE): ?>
      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <ul class="navbar-nav flex-row align-items-center ms-auto">
          <li class="nav-item navbar-search-wrapper me-2 me-xl-0">
            <a href="<?php echo base_url(); ?>logout">
              LOGOUT
            </a>
          </li>
        </ul>
      </div>
    <?php endif; ?>

  </div>
</nav>
