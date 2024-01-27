@extends('layouts.layouts')

@section('content')
    <div>
        @include('layouts.panel.breadcumb', [
            'items' => [
                [
                    'label' => 'Rekapitulasi',
                    'link' => '',
                ],
                [
                    'label' => 'Buku Kas Umum',
                ],
            ],
        ])
        <section>
            <div class="relative p-4 overflow-x-auto shadow-md sm:rounded-lg bg-white dark:bg-gray-800">

            </div>
            <section>
    </div>
@endsection

@section('style')
    <!-- Datatable Custom Style -->
    @vite('resources/css/externals/elements/table/dataTable.css')
@endsection
