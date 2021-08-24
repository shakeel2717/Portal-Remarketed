  <!-- Modal -->
  <div id="exampleModalTopCover{{ $loop->iteration }}" class="modal fade" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalTopCoverTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <!-- Header -->
              <div class="modal-top-cover bg-dark text-center">
                  <figure class="position-absolute right-0 bottom-0 left-0" style="margin-bottom: -1px;">
                      <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                          viewBox="0 0 1920 100.1">
                          <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z" />
                      </svg>
                  </figure>

                  <div class="modal-close">
                      <button type="button" class="btn btn-icon btn-sm btn-ghost-light" data-dismiss="modal"
                          aria-label="Close">
                          <svg width="16" height="16" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                              <path fill="currentColor"
                                  d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                          </svg>
                      </button>
                  </div>
              </div>
              <!-- End Header -->

              <div class="modal-top-cover-icon">
                  <span class="icon icon-lg icon-light icon-circle icon-centered shadow-soft">
                      <i class="tio-receipt-outlined"></i>
                  </span>
              </div>

              <div class="modal-body">
                  <!-- Nav -->
                  <div class="text-center">
                      <ul class="nav nav-segment nav-pills mb-7" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" id="nav-one-eg1{{ $loop->iteration }}-tab" data-toggle="pill" href="#nav-one-eg1{{ $loop->iteration }}"
                                  role="tab" aria-controls="nav-one-eg1{{ $loop->iteration }}" aria-selected="true">Existing order</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="nav-two-eg1{{ $loop->iteration }}1-tab" data-toggle="pill" href="#nav-two-eg1{{ $loop->iteration }}1" role="tab"
                                  aria-controls="nav-two-eg1{{ $loop->iteration }}1" aria-selected="false">New order</a>
                          </li>

                      </ul>
                  </div>
                  <!-- End Nav -->

                  <!-- Tab Content -->
                  <div class="tab-content">
                      <div class="tab-pane fade show active" id="nav-one-eg1{{ $loop->iteration }}" role="tabpanel"
                          aria-labelledby="nav-one-eg1{{ $loop->iteration }}-tab">
                          <div class="row">
                              <div class="col-md-12">
                                  <form action="{{ route('orderExistingReq') }}" method="POST">
                                      @csrf
                                      <div class="form-group">
                                          <label for="orderName">Select Order Name</label>
                                          <!-- Select2 -->
                                          <select class="js-select2-custom custom-select" name="orderId"> size="1" style="opacity: 0;"
                                              @forelse ($orders as $order)
                                                  <option value="{{ $order->id }}">{{ $order->name }}</option>
                                              @empty
                                                  <option value="">No Existing Order</option>
                                              @endforelse
                                          </select>
                                          <!-- End Select2 -->
                                          <input type="hidden" name="device_id" id="device_id"
                                              value="{{ $device->id }}">
                                      </div>
                                      <div class="form-group">
                                          <input type="submit" class="btn btn-primary btn-block" value="Submit">
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>

                      <div class="tab-pane fade" id="nav-two-eg1{{ $loop->iteration }}1" role="tabpanel" aria-labelledby="nav-two-eg1{{ $loop->iteration }}1-tab">
                          <div class="row">
                              <div class="col-md-12">
                                  <form action="{{ route('orderReq') }}" method="POST">
                                      @csrf
                                      <div class="form-group">
                                          <label for="orderName">Order Name</label>
                                          <input type="text" name="orderName" id="orderName" class="form-control"
                                              placeholder="Order Name">
                                          <input type="hidden" name="device_id" id="device_id"
                                              value="{{ $device->id }}">
                                      </div>
                                      <div class="form-group">
                                          <input type="submit" class="btn btn-primary btn-block" value="Submit">
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Tab Content -->
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>
  <!-- End Modal -->
