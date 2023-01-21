<section>
    <form id="data-{{ $id }}" action="{{url($link.'/'.$id)}}" method="post">
        @csrf
        @method('delete')
        </form>
    {{ $slot }}
    <button onclick="deleteRow( {{ $id }} )" class="btn btn-danger btn-sm">HAPUS</button>
</section>