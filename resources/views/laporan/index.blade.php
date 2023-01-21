<x-admin menu="rekening">
    <x-header halaman="Laporan"></x-header>
    <div class="card">
        <div class="card-body">
            <main>
                <form action="{{ url('/jurnal') }}" method="get">
                    <div class="row">
                        <div class="col-md-2">
                        Periode :
                        </div>
                        <div class="col-md-4">
                            <select name="tahun" id="" class="form-select">
                                @for ($i = 2010; $i < ambil_tahun(); $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
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
                                <th>Kode</th>
                                <th>Rekening</th>
                                <th>Debit</th>
                                <th>Kredit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jurnal as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->rekening->kode }}</td>
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
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="5">Modal Akhir</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</x-admin>