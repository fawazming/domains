<?= $this->extend('admin/layout') ?>

<?= $this->section('main') ?>
                    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-xl px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="file"></i></div>
                                            Dashboard
                                        </h1>
                                    </div>
                                    <!-- <div class="col-12 col-xl-auto mb-3">Optional page header content</div> -->
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-4">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                          <div class="col">
                            <div class="card h-100">
                              <div class="card-body">
                                <h5 class="card-title">Domains</h5>
                                <p class="card-text">2 Domains</p>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card h-100">
                              <div class="card-body">
                                <h5 class="card-title">Billing</h5>
                                <p class="card-text">$400</p>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card h-100">
                              <div class="card-body">
                                <h5 class="card-title">Support</h5>
                                <p class="card-text">3 response Pending</p>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
<?= $this->endSection() ?>