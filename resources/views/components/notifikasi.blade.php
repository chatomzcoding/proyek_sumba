@if (session('danger'))
<div class="alert alert-danger">
    <p>{!! session('danger') !!}</p>
  </div>
@endif
@if (session('success'))
<div class="alert alert-success">
    <p>{!! session('success') !!}</p>
  </div>
@endif
@if (session('info'))
<div class="alert alert-info">
    <p>{!! session('info') !!}</p>
  </div>
@endif
@if (session('warning'))
<div class="alert alert-warning">
    <p>{!! session('warning') !!}</p>
  </div>
@endif
@if (session('secondary'))
<div class="alert alert-secondary">
    <p>{!! session('secondary') !!}</p>
  </div>
@endif

{{-- notifikasi data berhasil di simpan --}}
@if (session('ds'))
<div class="alert alert-success">
    <p>Data {{ session('ds') }} telah ditambahkan.</p>
  </div>
@endif
@if (session('dsc'))
<div class="alert alert-success">
    <p>{{ session('dsc') }}</p>
  </div>
@endif

{{-- notifikasi data berhasil di update --}}
@if (session('du'))
<div class="alert alert-info">
    <p>Data {{ session('du') }} telah diperbaharui.</p>
  </div>
@endif
@if (session('duc'))
<div class="alert alert-info">
    <p>{{ session('duc') }}</p>
  </div>
@endif

{{-- notifikasi data berhasil di hapus --}}
@if (session('dd'))
<div class="alert alert-danger">
    <h5>Berhasil!</h5>
    <p>Data {{ session('dd') }} telah dihapus.</p>
  </div>
@endif
@if (session('ddc'))
<div class="alert alert-danger">
    <h5>Berhasil!</h5>
    <p>{{ session('ddc') }}</p>
  </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ custom_notif($error) }}</li>
            @endforeach
        </ul>
    </div>
@endif