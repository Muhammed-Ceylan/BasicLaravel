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
                    :placeholder="'Makale Adı'" :isDisabled="false" :type="'text'" :parentClass="''">
                    <x-slot:label>
                        Makale Adı
                    </x-slot:label>
                </x-admin.elements.input>

                @php
                    $options = [
                        '-1' => 'Kategori Seçin',
                        '1' => 'PHP',
                        '2' => 'C#',
                    ];
                @endphp
                <x-admin.elements.select :labelClasses="'mb-2'" :id="'category'" :name="'category'" :isDisabled="false"
                    :parentClass="'mt-3'" :options="$options" :defaultValue="''">
                    <x-slot:label>
                        Kategoriler
                    </x-slot:label>
                </x-admin.elements.select>

                <x-admin.elements.textarea 
                    :parentClass="'mt-3'" 
                    :name="'articleContent'" 
                    :id="'articleContent'" 
                    :isDisabled="false"
                    :placeholder="'Makale İçerik'">
                    
                    <x-slot:label>
                        Makale İçeriği
                    </x-slot:label>
                </x-admin.elements.textarea>

                <x-admin.elements.input :type="'checkbox'" :name="'status'" :id="'status'" :inputClasses="'mb-3'"
                    :defaultValue="'1'" :labelClasses="'mb-2'" :parentClass="'mt-3'" :isLabelAfter="true">
                    <x-slot name="label">
                        Makale Yayınlansın Mı?
                    </x-slot>
                </x-admin.elements.input>
                <hr>
                <x-admin.elements.input :id="'btnSave'" :inputClasses="'btn btn-success w-100'" :type="'submit'" :parentClass="'mt-3'"
                    :defaultValue="'Kaydet'">
                </x-admin.elements.input>

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
