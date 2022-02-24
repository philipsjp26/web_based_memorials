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
                      <li class="nav-item dropdown pe-2 d-flex align-items-center">
                          <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              @auth
                                  <span>Welcome, {{ auth()->user()->username }}</span>
                              @endauth
                          </a>
                          <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                              aria-labelledby="dropdownMenuButton">
                              <li class="mb-2">
                                  <form action="/auth/logout" method="post">
                                      @csrf
                                      <a class="dropdown-item border-radius-md" href="javascript:;">
                                          <div class="d-flex flex-column d-flex justify-content-center">
                                              <button type="submit"
                                                  class="btn btn-primary justify-content-center">logout</button>
                                          </div>
                                      </a>
                                  </form>
                              </li>
                          </ul>
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
      <!-- End Navbar -->
