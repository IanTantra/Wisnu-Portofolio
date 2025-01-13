<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
  http-equiv="Content-Security-Policy"
  content="upgrade-insecure-requests" />
    <title>Portofolio {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    
    
    
    @include('navbar')


    <main style="min-height: calc(100vh - 190px)">


      <div class="container-fluid">
        
        @yield('container')
        
      </div>

    </main>

      <section class="">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #0a4275;">
          <!-- Grid container -->
          <div class="container p-4 pb-0">
            <!-- Section: CTA -->
            <section class="">
              <p class="d-flex justify-content-center align-items-center">
                <span class="me-3">Register for free</span>
                <button data-mdb-ripple-init type="button" class="btn btn-outline-light btn-rounded">
                  Sign up!
                </button>
              </p>
            </section>
            <!-- Section: CTA -->
          </div>
          <!-- Grid container -->
      
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Wisnu Dharmasatria Tantra
            {{-- <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a> --}}
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </section>

      

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>