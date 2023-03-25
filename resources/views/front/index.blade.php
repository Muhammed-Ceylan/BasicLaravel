@extends('layouts.front')


@section('content')
    Gelen Yaş Değeri: {{ $age ?? $person->age }}
    <hr>
    Gelen 2. Değeri: {{ $name ?? 'değeri gönderilmedi.' }}
    <hr>
@endsection

@section('css')
@endsection

@section('js')
@endsection
