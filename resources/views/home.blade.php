@extends('layouts.base')

@section('title')
TrainTable
@endsection

@section('content')
<ul>
    @foreach ($trains as $train)
    <li>

        <div>{{ $train['azienda'] }}</div>
        <div>{{ $train['stazione_di_partenza'] }}</div>
        <div>{{ $train['stazione_di_arrivo'] }}</div>
        <div>{{ $train['data_di_partenza'] }}</div>
        <div>{{ $train['orario_di_partenza'] }}</div>
        <div>{{ $train['data_di_arrivo'] }}</div>
        <div>{{ $train['orario_di_arrivo'] }}</div>
        <div>{{ $train['codice_treno'] }}</div>
        <div>{{ $train['numero_carrozze'] }}</div>
        <div>{{ $train['binario'] }}</div>
        <div>{{ $train['in_orario'] > 0 ? 'In Orario' : '' }}</div>
        <div>{{ $train['cancellato'] > 0 ? 'Cancellato' : '' }}</div>
    </li>
    @endforeach
</ul>
@endsection