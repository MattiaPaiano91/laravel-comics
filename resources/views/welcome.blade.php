@extends('layouts.app')

@section('page-title', 'Home')


@section('main-content')
    <div class="container-fluid p-0 ">

                <div class="row">

                    <div class="col-12">

                        <div class="jumbo-section">
                        </div>

                    </div>
                    <div class="col-12 comics-container">
                        <div class="comics-section d-flex">
                            @foreach ($comics as $comic)
                            
                                <div class="comic-card">
                                    <div class="card-img-box">
                                        <img src="{{ $comic['thumb'] }}" alt="">
                                    </div>
                                    <div class="text-box">
                                        {{ $comic['series'] }}
                                    </div>
                                </div>

                            @endforeach
                            <button>LOAD MORE</button>
                        </div>
                    </div>

                </div>

            </div>
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

   