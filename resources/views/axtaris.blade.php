@extends('layouts.master')
@section('title', 'Axtar')
@section('container')

<div class="container">
	<div class="breadcrumb">\
		<ol>
			<li><a href="/">AnaSehife</a></li>
			<li>Axtaris</li>
		</ol>
	</div>
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

        {{ $mehsullar->appends(['axtar' => old('axtar')])->links() }}
@endsection

