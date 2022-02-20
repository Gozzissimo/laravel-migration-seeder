@extends('layouts.base')

@section('title')
TrainTable
@endsection

@section('content')
<ul>
    @foreach ($trains as $train)
    <li>

        <div>{{ $train['Azienda'] }}</div>
        <div>{{ $train['Stazione di partenza'] }}</div>
        <div>{{ $train['Stazione di arrivo'] }}</div>
        <div>{{ $train['Data di partenza'] }}</div>
        <div>{{ $train['Orario di partenza'] }}</div>
        <div>{{ $train['Data di arrivo'] }}</div>
        <div>{{ $train['Orario di arrivo'] }}</div>
        <div>{{ $train['Codice Treno'] }}</div>
        <div>{{ $train['Numero Carrozze'] }}</div>
        <div>{{ $train['Binario'] }}</div>
        <div>{{ $train['In orario'] > 0 ? 'In Orario' : '' }}</div>
        <div>{{ $train['Cancellato'] > 0 ? 'Cancellato' : '' }}</div>
    </li>
    @endforeach
</ul>
@endsection