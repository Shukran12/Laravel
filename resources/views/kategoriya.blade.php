@extends('layouts.master')
@section('title', $kategoriya->kategory_ad)
@section('container')

<div class="container">
         <ol class="breadcrumb">
            <li><a href="/">Anasayfa</a></li>
            @if(count($alt_kategori) > 0)
            <li class="active">{{ $kategoriya->kategory_ad }}</li>
            @else
            <li class="active">{{ $kategoriya->kategory_ad }}</li>
            <li><a href="#">Alt Kategoriyani Goster</a></li>
            @endif
        </ol>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$kategoriya->kategory_ad}}</div>
                    <div class="panel-body">
                        <h3>Alt Kategoriler</h3>
                        <div class="list-group categories">
                        	@foreach($alt_kategori as $alt)
                            <a href="{{ route('kategori', $alt->kategory_ad) }}" class="list-group-item"><i class="fa fa-television"></i> {{ $alt->kategory_ad }}</a>
                            @endforeach
                        </div>
                        <h3>Fiyat Aralığı</h3>
                        <form>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 100-200
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 200-300
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="products bg-content">
                    Sırala
                    <a href="#" class="btn btn-default">Çok Satanlar</a>
                    <a href="#" class="btn btn-default">Yeni Ürünler</a>
                    <hr>
                    <div class="row">
                        @foreach($mehsullar as $mehsul)
                        <div class="col-md-3 product">
                            <a href="{{ route('mehsul', $mehsul->mehsul_ad) }}"><img src="http://lorempixel.com/400/400/food/1"></a>
                            <p><a href="#">{{ $mehsul->mehsul_ad }}</a></p>
                            <p class="price">{{ $mehsul->qiymet }} ₺</p>
                            <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                        </div>
                        @endforeach

                        
                        
                    </div>
                </div>
                {{ $mehsullar->links() }}
            </div>
        </div>
    </div>

@endsection