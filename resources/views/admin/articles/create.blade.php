{{-- Article için create işlemlerinin olcağı yer --}}

@extends('layouts.admin')


@section('content')
    <x-admin.layouts.card class="w-50 mx-auto">
        <x-slot name="title">
            Makale Ekle
        </x-slot>
        <x-slot name="content">
            <form action="" class="w-100 text-start">
                <x-admin.elements.input :labelClasses="''" :id="'name'" :name="'name'" :inputClasses="''"
                    :placeholder="'Makale Adı'" :isDisabled="false" :type="'text'" :parrentClass="''">
                    <x-slot:label>
                        Makale Adı
                    </x-slot:label>
                </x-admin.elements.input>
                <div class="mt-3">
                    <label for="category" class="mb-2">Kategoriler</label>
                    <select name="category" id="category" class="form-control">
                        <option value="-1">Kategori Seçin</option>
                        <option value="1">PHP</option>
                        <option value="2">C#</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="articleContent" class="mb-2">Makale İçeriği</label>
                    <textarea name="articleContent" id="articleContent" cols="30" rows="10" class="form-control"
                        placeholder="Makale İçeriği"></textarea>
                </div>
                <div class="mt-3">
                    <input type="checkbox" name="status" id="status" />
                    <label for="status" class="mb-2">Makale Yayınlansın Mı?</label>
                </div>
                <hr>
                <div class="mt-3">
                    {{-- <input type="submit" name="btnSave" id="btnSave" class="btn btn-success w-100" value="Kaydet" /> --}}
                    <x-admin.elements.input :id="'btnSave'" :inputClasses="'btn btn-success w-100'" :type="'submit'" :parrentClass="'mt-3'"
                        :defaultValue="'Kaydet'">
                    </x-admin.elements.input>
                </div>
            </form>
        </x-slot>
        <x-slot name="footer">
            Lorem, ipsum dolor.
        </x-slot>

    </x-admin.layouts.card>
@endsection

@section('css')
@endsection

@section('js')
@endsection
