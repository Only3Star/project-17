@extends('layouts.master_backend')
@section('contant')

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
              <div>
                  <h4 class="font-weight-bold mb-0">Dashboard</h4>
                </div>
                <div>      
      </div> 
        </div>
          </div>
            </div>

            
            <div class="container-xxl flex-grow-1 container-p-y">
                        
                        <div class="col-lg-12 col-md-4 order-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-3 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                                                </div>
                  
                                            </div>
                                            <span class="fw-semibold d-block mb-1"><b>USER</b></span>
                                            <h3 class="card-title mb-2"><b> {{ $u->count() }} คน</b></h3>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col-lg-4 col-md-12 col-3 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                                                </div>
                  
                                            </div>
                                            <span class="fw-semibold d-block mb-1"><b>CATEGORY</b></span>
                                            <h3 class="card-title mb-2"><b> {{ $c->count() }} ประเภท</b></h3>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col-lg-4 col-md-12 col-3 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>

                                                </div>
                  
                                            </div>
                                            <span class="fw-semibold d-block mb-1"><b>PRODUCT</b></span>
                                            <h3 class="card-title mb-2"><b> {{ $p->count() }} ชิ้น</b></h3>
                                        </div>
                                    </div>
                                    
                                </div>
                             
                            </div>
                            
                        </div>
                     
                        
                   
                    </div>
                 
                </div>


@endsection