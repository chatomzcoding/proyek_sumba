<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUMDES HIDUP BERSAMA</title>
    <link rel="shortcut icon" href="{{ url('public/img/icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('public/css/bs5.css') }}">

    <script src="{{ url('public/vendor/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{ url('public/vendor/sweetalert/sweetalert2.css')}}"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            
          <a class="navbar-brand" href="#">
            {{-- <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> --}}
            BumdesApp
        </a>
            <div class="text-end">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    
                    <a class="nav-link @if ($menu == 'home')
                       active 
                    @endif" aria-current="page" href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link @if ($menu == 'rekening')
                    active 
                 @endif" href="{{ url('/rekening') }}">Rekening</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link @if ($menu == 'jurnal')
                    active 
                 @endif" href="{{ url('/jurnal') }}">Jurnal Umum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link @if ($menu == 'laporan')
                    active 
                 @endif" href="{{ url('/laporan') }}">Laporan</a>
                  </li>
                  <li>
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"  class="nav-link"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <i class="bx bx-power-off me-2"></i><span>Logout</span></a>
                    </form>
                </li>
                </ul>
              </div>
          </div>
        </div>
      </nav>
    <div class="container-fluid mt-4">
        {{ $slot ?? '' }}
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="{{ url('public/js/bs5.js') }}"></script>
    {{ $kodejs ?? '' }}
    <script>
      function deleteRow(id)
        {
            swal({
                title: "Yakin akan menghapus data ini?",
                text: "Data yang terhapus tidak bisa dikembalikan lagi!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $('#data-'+id).submit();
                    }
                });
		}
    </script>
  </body>
</html>