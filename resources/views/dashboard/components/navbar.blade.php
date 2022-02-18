      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
          data-scroll="false">
          <div class="container-fluid py-1 px-3">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                      <li class="breadcrumb-item text-sm">
                          <a class="opacity-5 text-white" href="javascript:;">Pages</a>
                      </li>
                      <li class="breadcrumb-item text-sm text-white active" aria-current="page">
                          index
                      </li>
                  </ol>
                  <h6 class="font-weight-bolder text-white mb-0">Home</h6>
              </nav>
              <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                  <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                      <div class="input-group">
                          <span class="input-group-text text-body"><i class="fas fa-search"
                                  aria-hidden="true"></i></span>
                          <input type="text" class="form-control" placeholder="Type here..." onfocus="focused(this)"
                              onfocusout="defocused(this)">
                      </div>
                  </div>
                  <ul class="navbar-nav justify-content-end">
                      <li class="nav-item d-flex align-items-center">
                          <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                              <i class="fa fa-user me-sm-1"></i>

                              <span class="d-sm-inline d-none">Sign In</span>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
      <div class="container-fluid py-4">
          <div class="row">
              <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-body p-3">
                          <div class="row">
                              <div class="col-8">
                                  <div class="numbers">
                                      <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                          Total Transactions
                                      </p>
                                      <h5 class="font-weight-bolder">10</h5>
                                      <p class="mb-6"></p>
                                  </div>
                              </div>
                              <div class="col-4 text-end">
                                  <div
                                      class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                      <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-body p-3">
                          <div class="row">
                              <div class="col-8">
                                  <div class="numbers">
                                      <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                          Total Accounts
                                      </p>
                                      <h5 class="font-weight-bolder">10</h5>
                                      <p class="mb-6"></p>
                                  </div>
                              </div>
                              <div class="col-4 text-end">
                                  <div
                                      class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                      <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-body p-3">
                          <div class="row">
                              <div class="col-8">
                                  <div class="numbers">
                                      <p class="text-sm mb-0 text-uppercase font-weight-bold">
                                          Total Memorials
                                      </p>
                                      <h5 class="font-weight-bolder">10</h5>
                                      <p class="mb-6"></p>
                                  </div>
                              </div>
                              <div class="col-4 text-end">
                                  <div
                                      class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                      <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container-fluid py-4">
          <div class="col-12">
              <div class="card mb-4">
                  <div class="card-header pb-0">
                      <h6>Dashboard Table</h6>
                  </div>
                  <div class="card-body px-0 pt-0 pb-2">
                      <div class="table-responsive p-0">
                          <table class="table align-items-center mb-0">
                              <thead>
                                  <tr>
                                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                          Account username</th>
                                      <th
                                          class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                          Status</th>
                                      <th
                                          class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                          Created At</th>
                                      <th
                                          class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                          Action</th>
                                      <th class="text-secondary opacity-7"></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>
                                          <div class="d-flex px-2 py-1">
                                              <div>
                                                  <img src="{{ asset('dashboard/assets/img/team-2.jpg') }}"
                                                      class="avatar avatar-sm me-3" alt="user1">
                                              </div>
                                              <div class="d-flex flex-column justify-content-center">
                                                  <h6 class="mb-0 text-sm">John Michael</h6>
                                                  <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <span class="badge badge-sm bg-gradient-success">Premium</span>
                                      </td>
                                      <td class="align-middle text-center">
                                          <span class="text-secondary text-sm font-weight-bold">2022-02-22</span>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Navbar -->
