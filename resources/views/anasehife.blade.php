@extends('layouts.master')
@section('title', 'AnaSehife -- Domain.com')
@section('container')
@if(session()->has('mesaj'))

 <div class="alert alert-success text-center">
     {{ session('mesaj') }}
 </div>

@endif
<div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Kategoriler</div>
                    <div class="list-group categories">
                        @foreach($kategoriyalar as $kategori)
                        <a href="{{ route('kategori', $kategori->kategory_ad) }}" class="list-group-item"><i class="fa fa-television"></i> {{ $kategori->kategory_ad }}</a>

                        @endforeach
                       
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @for($i=0; $i< count($slider); $i++)
                        <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}" class="{{ $i==0 ? 'active' : '' }}"></li>
                        @endfor
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        @foreach($slider as $index=> $slide)
                        <div class="item {{ $index==0 ? 'active' : '' }}">
                            <img src="http://lorempixel.com/640/400/food/1" alt="...">
                            <div class="carousel-caption">
                                {{ $slide->mehsul_ad }}
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" id="sidebar-product">
                    <div class="panel-heading">Günün Fırsatı</div>
                    <div class="panel-body">
                        <a href="">
                            <img src="http://lorempixel.com/400/485/food/1" class="img-responsive">
                        </a>
                    </div>

                   
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Öne Çıkan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/2"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/3"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/4"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Çok Satan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/2"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/3"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/4"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">İndirimli Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/2"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/3"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/4"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection