@extends('layouts.app')

@section('page-title', 'Home')

@section('jumbo')
<div class="jumbo-section">
</div>
    
@endsection

@section('icon-section')
    <div class="container-fluid icon-container">
        <div class="icon-section d-flex justify-content-between  align-items-center ">
            @foreach ( $icons as $icon)
                <div class="icon-card  d-flex">
                    <div class="icon-img">
                        <img src="{{ asset($icon['path']) }}" alt="">
                    </div>
                    <div class="icon-text">
                        {{ $icon['text'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
            
