@extends('layouts/master')

@section('title', 'Idolaku')

@section('css')
<style>
    .main {
        height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
@endsection

@section('content')
<div class="container main">
    <div class="wrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alasan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $idola)
                <tr>
                    <th scope="row">{{ $idola->id }}</th>
                    <td>{{$idola->nama}}</td>
                    <td>{{$idola->alasan}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection