@extends('layouts.front')


@section('content')
    İletişim Sayfası
    <br>
    <div class="col-8 mx-auto">
        <form action="{{ route('contact') }}" method="POST">
            @csrf
            {{-- csrf token yönteminin farklı bir kullanımı --}}
            {{-- <input type="hidden" name="_token" value="{{ crsf_token() }}"> --}}
            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="email" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">Gönder</button>
        </form>
    </div>

    İletişim Sayfası 2
    <br>
    <div class="col-8 mx-auto">
        <form action="{{ route('user', ['id' => 5, 'name' => 'asda']) }}" method="POST">
            @csrf
            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="email" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">Gönder</button>
        </form>
    </div>

    Support Form
    <br>
    <div class="col-8 mx-auto">
        <form action="{{ route('support-form.support') }}">
            @csrf
            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="email" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">Gönder</button>
        </form>
    </div>
@endsection

@section('css')
@endsection

@section('js')
@endsection
