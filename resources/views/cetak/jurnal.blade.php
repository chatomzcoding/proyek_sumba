<x-cetak title="rekening">
    <header class="text-center">
        <h2>BUMDES HIDUP BERSAMA</h2>
        <p>Data Jurnal</p>
        <p>{{ bulan_indo() }} - {{ ambil_tahun() }}</p>
    </header>
    <main>
        <table class="table1">
            <thead>
                <tr class="tr1">
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Rekening</th>
                    <th>Debit</th>
                    <th>Kredit</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr class="tr1">
                        <td class="text-center">{{ $loop->iteration }}</td>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</x-cetak>