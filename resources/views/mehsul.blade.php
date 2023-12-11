@extends('layouts.master')
@section('title', $mehsul->mehsul_ad)
@section('container')

<div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Anasayfa</a></li>

            <li class="active">{{ $mehsul->mehsul_ad }}</li>
        </ol>
        <div class="bg-content">
            <div class="row">
                <div class="col-md-5">
                    <img src="http://lorempixel.com/400/200/food/1">
                    <hr>
                    <div class="row">
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://lorempixel.com/60/60/food/2"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://lorempixel.com/60/60/food/3"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://lorempixel.com/60/60/food/4"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h1>{{ $mehsul->mehsul_ad }}</h1>
                    <p class="price">{{ $mehsul->qiymet }} ₺</p>
                    <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                </div>
            </div>

            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#t1" data-toggle="tab">Ürün Açıklaması</a></li>
                    <li role="presentation"><a href="#t2" data-toggle="tab">Yorumlar</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="t1">Aciqlama</div>
                    <div role="tabpanel" class="tab-pane" id="t2">Yorum</div>
                </div>
            </div>

        </div>
    </div>


@endsection