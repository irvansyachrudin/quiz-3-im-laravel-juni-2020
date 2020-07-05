@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-body">
        <form action="/artikel/{{$artikels->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Name">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{$artikels->judul}}">
            </div>
            <div class="form-group">
                <label for="Description">isi</label>
                <input type="text" class="form-control" id="isi" name="isi" value="{{$artikels->isi}}">
            </div>
            <div class="form-group">
                <label for="Description">tag</label>
                <input type="text" class="form-control" id="tag" name="tag" value="{{$artikels->tag}}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection