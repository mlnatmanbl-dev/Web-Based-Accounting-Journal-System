
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="#" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="<?php echo base_url('assets/img/AdminLTELogo.png') ?>"
              alt="ASIA"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">ASIA</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href="<?php echo site_url('home'); ?>" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                    <i class="nav-arrow"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo site_url('rekening'); ?>" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Rekening</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo site_url('jurnal'); ?>" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Jurnal</p>
                    </a>
                  </li>
              
                </ul>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
