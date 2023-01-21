<x-admin menu="rekening">
    <x-header halaman="Rekening"></x-header>
    <div class="card">
        <div class="card-body">
            <header>
                <button data-bs-toggle="modal" data-bs-target="#tambah" class="btn btn-primary">Tambah</button>
            </header>
            <main>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama Rekening</th>
                                <th>Posisi</th>
                                <th>Saldo Nomor</th>
                                <th width="10%">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rekening as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->kode }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->posisi }}</td>
                                    <td>{{ rupiah($item->saldo) }}</td>
                                    <td>
                                        <x-aksi :id="$item->id" link="rekening">
                                            <button type="button" data-bs-toggle="modal" data-kode="{{ $item->kode }}" data-nama="{{ $item->nama }}"  data-posisi="{{ $item->posisi }}"  data-saldo="{{ $item->saldo }}" data-id="{{ $item->id }}" data-bs-target="#ubah" class="btn btn-success btn-sm"> EDIT</button>
                                        </x-aksi>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
  <!-- Modal -->
  <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
            <form action="{{ url('rekening') }}" method="post">
            @csrf
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Rekening</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    <label for="" class="form-label">Kode Rekening</label>
                    <input type="text" name="kode" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Nama Rekening</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">POSISI</label>
                    <select name="posisi" id="" class="form-control">
                        <option value="debit">DEBIT</option>
                        <option value="kredit">KREDIT</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Saldo</label>
                    <input type="text" name="saldo" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TUTUP</button>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ubah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
            <form action="{{ url('rekening/1') }}" method="post">
            @csrf
            @method('patch')
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Rekening</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" id="id">
                <div class="mb-2">
                    <label for="" class="form-label">Kode Rekening</label>
                    <input type="text" name="kode" id="kode" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Nama Rekening</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">POSISI</label>
                    <select name="posisi" id="posisi" class="form-control">
                        <option value="debit">DEBIT</option>
                        <option value="kredit">KREDIT</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Saldo</label>
                    <input type="text" name="saldo" id="saldo" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TUTUP</button>
                <button type="submit" class="btn btn-success">SIMPAN PERUBAHAN</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <x-slot name="kodejs">
    <script>
        $('#ubah').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var kode = button.data('kode')
            var nama = button.data('nama')
            var posisi = button.data('posisi')
            var saldo = button.data('saldo')
            var id = button.data('id')
    
            var modal = $(this)
    
            modal.find('.modal-body #kode').val(kode);
            modal.find('.modal-body #nama').val(nama);
            modal.find('.modal-body #posisi').val(posisi);
            modal.find('.modal-body #saldo').val(saldo);
            modal.find('.modal-body #id').val(id);
        })
    </script>
  </x-slot>
</x-admin>