@extends('layouts/layout-frontend')

@section('content')
    <!-- Section: Design Block -->
<section class="d-flex align-items-center justify-content-center px-4 py-5 vh-100">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start rounded-5" style="background-color: hsl(0, 0%, 96%)">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="my-5 display-3 fw-bold ls-tight">
              Lorem Ipsum dolor <br />
              <span class="text-primary">sit amet consectetur</span>
            </h1>
            <p style="color: hsl(217, 10%, 50.8%)">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Eveniet, itaque accusantium odio, soluta, corrupti aliquam
              quibusdam tempora at cupiditate quis eum maiores libero
              veritatis? Dicta facilis sint aliquid ipsum atque?
            </p>
          </div>
  
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-4 px-5">
                <form method="POST" action="/store"
                enctype="multipart//form-data"
                >
                @csrf

                <div class="row">
                    <div class="col-md-12 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="form3Example1">Name</label>
                        <input type="text" id="form3Example1" class="form-control" name="nama"  required/>
                      </div>
                    </div>
                  </div>
  
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email address</label>
                    <input type="email" id="form3Example3" class="form-control" name="email"  required/>
                  </div>
  
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Where you from?</label>
                    <input type="text" id="form3Example4" class="form-control" name="asal" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Phone Number</label>
                    <input type="text" id="form3Example4" class="form-control" name="no_hp"  required/>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Message</label>
                    <textarea type="text" id="form3Example4" class="form-control" name="kesan_pesan" required></textarea>
                  </div>
  
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block w-100">
                    Send 
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
@endsection


@section('footer')
    
@endsection