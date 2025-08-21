@extends('layouts.app')

@section('title', 'Главная')
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Добро пожаловать в наш автосалон</h1>
        <p>Широкий выбор автомобилей и мототехники</p>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <h2>Автомобили</h2>
        <div class="row">
            @foreach($featuredVehicles as $vehicle)
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="{{ $vehicle->images[0] ?? '/placeholder.jpg' }}" class="card-img-top" alt="{{ $vehicle->brand }} {{ $vehicle->model }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $vehicle->brand }} {{ $vehicle->model }}</h5>
                        <p class="card-text">{{ number_format($vehicle->price, 0, ',', ' ') }} руб.</p>
                        <a href="{{ route('vehicles.show', $vehicle) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('vehicles.index') }}" class="btn btn-outline-primary mt-2">Все автомобили</a>
    </div>
    
    <div class="col-md-6">
        <h2>Мототехника</h2>
        <div class="row">
            @foreach($featuredMotorcycles as $motorcycle)
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="{{ $motorcycle->images[0] ?? '/placeholder.jpg' }}" class="card-img-top" alt="{{ $motorcycle->brand }} {{ $motorcycle->model }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $motorcycle->brand }} {{ $motorcycle->model }}</h5>
                        <p class="card-text">{{ number_format($motorcycle->price, 0, ',', ' ') }} руб.</p>
                        <a href="{{ route('motorcycles.show', $motorcycle) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('motorcycles.index') }}" class="btn btn-outline-primary mt-2">Вся мототехника</a>
    </div>
</div>
@endsection