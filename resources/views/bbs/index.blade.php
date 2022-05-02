@extends('layouts.base')

@section('title', 'main page')

@section('main')
    <div class="container">
        <h1 class="my-3 tехt-сеntеr">Объявления</h1>
        @if ( count($bbs) > 0 )
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Toвap</th>
                    <th>Цена, {{ $currency }}.</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            @php
                dump($reqa)
                @endphp
                @foreach($bbs as $bb)
                <tr>
                    <td>
                        <h3>{{ $bb->title }}</h3>
                    </td>
                    <td>{{ $bb->price }}</td>
                    <td><a href="/news/{{ $bb->id }}" >Подробнее ...</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <h1>No items</h1>
        @endif
    </div>
@endsection
