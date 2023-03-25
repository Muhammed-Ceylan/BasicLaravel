@extends('layouts.front')


@section('content')
    <x-article>
        <x-slot:title2> Makale 2</x-slot>

        <x-slot name="title"> Makale 1</x-slot>
        <hr>
        
        <x-slot name="content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. In tenetur similique velit nostrum
            sunt. Esse dolore, deserunt cupiditate nobis atque voluptates ea impedit. Asperiores placeat incidunt dolorem
            cupiditate fugit corrupti.
        </x-slot>
        <hr>
    </x-article>
@endsection

@section('css')
@endsection

@section('js')
@endsection
