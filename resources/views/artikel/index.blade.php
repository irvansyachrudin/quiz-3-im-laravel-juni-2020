@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-body">
        <a href="/artikel/create">Tambah artikel</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Tag</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artikels as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->isi }}</td>
                    <td>{{ $data->slug }}</td>
                    <td>{{ $data->tag }}</td>
                    <td><a href="/artikel/{{ $data->id }}">Lihat </a></td>

                    <td><a href="/artikel/{{ $data->id }}/edit">Edit</a> |
                        <form action="/artikel/{{$data->id}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush