@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-header">
        Artikel Detail
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$artikels->judul}}</h5>
        <p class="card-text">{{$artikels->slug}}</p>
        <p class="card-text">{{$artikels->isi}}</p>



        @if ($artikels->tag != "")
        @foreach(explode(',', $artikels->tag) as $tag)
        <a href="#" class="btn btn-primary">{{$tag}}</a>
        @endforeach
        @endif
    </div>
</div>


@endsection