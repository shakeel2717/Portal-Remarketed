  <!-- Modal -->
  <div id="updateOrderStatus{{ $loop->iteration }}" class="modal fade" tabindex="-1" role="dialog"
      aria-labelledby="updateOrderStatusTitle" aria-hidden="true">
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
                  <!-- Tab Content -->
                  <div class="tab-content">
                      <div class="tab-pane fade show active" id="nav-one-eg1{{ $loop->iteration }}" role="tabpanel"
                          aria-labelledby="nav-one-eg1{{ $loop->iteration }}-tab">
                          <div class="row">
                              <div class="col-md-12">
                                  <h2 class="card-title text-center">Update Status to Complete</h2>
                                  <hr>
                                  <form action="{{ route('orderStatusRequest') }}" method="POST">
                                      @csrf
                                      <div class="form-group">
                                          <input type="hidden" name="order_id" id="order_id" value="{{ $detail->id }}">
                                          <label for="status">Status</label>
                                          <select name="status" id="status" class="form-control">
                                              <option value="Shipped">Shipped</option>
                                          </select>
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
