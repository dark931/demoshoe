@extends('layout.master')
@section('content')
	<div id='wrapper'>
		<div id='new-product' class='block-content'>
		<div class="row">
			<div class='title-heading col-12'>
				<h5>Tìm kiếm</h5>
			</div>
			<div class="abc">
			<p class="pull-left">Tìm thấy {{ count($product) }} sản phẩm</p>
			
			
			<div class="clearfix"></div>
			</div>
			
			<div class="block_wrap row">
				@if(count($product) > 0) 
					@foreach($product as $sp)
						<div class="product-item">
							<div class="thumbnail">
								<br>
								<br>
								
						      	<a href="san-pham/{{$sp->id}}/{{$sp->slug_name}}.html"><img src="uploaded/product/{{$sp->image_product}}" alt="..."></a>
						     	<div class="product-caption text-left">
						        	<p class='product-title'><a href="">{{$sp->name}}</a></p>
						        	<p class='product-price'>
					        		@if($sp->promotion_price > 0 )
							        	<span class="product__price-on-sale">{{number_format($sp->promotion_price)}} </span>
										<s class="product__price--compare">{{number_format($sp->unit_price)}}</s> vnđ
									@else
										<span> {{number_format($sp->unit_price)}} vnđ</span>
									@endif
						        	</p>
						        <p><a href="san-pham/{{$sp->id}}/{{$sp->slug_name}}.html" class="product-btn__a" role="button"><span class="glyphicon glyphicon-search"></span> Chi tiết</a></p>
						      	</div>
						    </div>
					  	</div>
					@endforeach
				@endif
			
			</div>
			<!--end-block-wrap-->
			</div>
			<!--end-row -->
		</div>
@endsection