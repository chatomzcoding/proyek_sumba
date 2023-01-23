<x-cetak title="rekening">
    <header class="text-center">
        <h2>BUMDES HIDUP BERSAMA</h2>
        <p>Data Rekening</p>
        <p>{{ bulan_indo() }} - {{ ambil_tahun() }}</p>
    </header>
    <main>
        <table class="table1">
            <thead>
                <tr class="tr1">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Rekening</th>
                    <th>Posisi</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr class="tr1">
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->posisi }}</td>
                        <td>{{ rupiah($item->saldo) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</x-cetak>