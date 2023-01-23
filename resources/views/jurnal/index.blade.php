<x-admin menu="rekening">
    <x-header halaman="Jurnal"></x-header>
    <div class="card">
        <div class="card-body">
            <header class="mb-2">
                <button data-bs-toggle="modal" data-bs-target="#tambah" class="btn btn-primary">Tambah Jurnal</button>
                <a href="{{ url('cetak/jurnal') }}" target="_blank" class="btn btn-info float-end"><i class="bx bx-print"></i> CETAK DATA</a>

            </header>
            <main>
                <form action="{{ url('/jurnal') }}" method="get">
                    <div class="row">
                        <div class="col-md-2">
                        Periode :
                        </div>
                        <div class="col-md-4">
                            <input type="date" name="awal" value="{{ $awal }}" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <input type="date" name="akhir"  value="{{ $akhir }}" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">LIHAT</button>
                            <a href="{{ url('jurnal') }}" class="btn btn-secondary">Bersihkan Filter</a>
                        </div>
                    </div>
                </form>
                <div class="table-responsive mt-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Rekening</th>
                                <th>Debit</th>
                                <th>Kredit</th>
                                <th>Deskripsi</th>
                                {{-- <th width="10%">Opsi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jurnal as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ date_indo($item->tanggal) }}</td>
                                    <td>{{ $item->rekening->nama }}</td>
                                    <td>
                                        @if ($item->rekening->posisi == 'debit')
                                            {{ rupiah($item->nominal) }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->rekening->posisi == 'kredit')
                                        {{ rupiah($item->nominal) }}
                                        @endif
                                    </td>
                                    <td>
                                        {{ $item->deskripsi }}
                                    </td>
                                    {{-- <td>
                                        <x-aksi :id="$item->id" link="jurnal">
                                            <button type="button" data-bs-toggle="modal" data-no_transaksi="{{ $item->no_transaksi }}"  data-posisi="{{ $item->posisi }}"  data-saldo="{{ $item->saldo }}" data-id="{{ $item->id }}" data-bs-target="#ubah" class="btn btn-success btn-sm"> EDIT</button>
                                        </x-aksi>
                                    </td> --}}
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
            <form action="{{ url('jurnal') }}" method="post">
            @csrf
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Jurnal</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    <label for="" class="form-label">Nomor Transaksi</label>
                    <input type="text" name="no_transaksi" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Rekening</label>
                    <select name="rekening_id" id="" class="form-select" required>
                        <option value="">-- Pilih Rekening --</option>
                        @foreach ($rekening as $item)
                            <option value="{{ $item->id }}">{{ ucwords($item->nama) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Nominal</label>
                    <input type="text" name="nominal" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control">
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
</x-admin>