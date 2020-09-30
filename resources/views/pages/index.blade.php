@extends('layouts.default')

@section('title', '首页')

@section('content')
    <b>总共找到 {{ $resp->total_results }} 件宝贝</b>
    <div class="row">
        @if ($resp->total_results > 0) 
        @foreach ($resp->result_list->map_data as $key => $item)
        <div class="col-6 col-md-3 my-2 col-custom-padding">
            <div class="card">
                <a href="{{ $item->coupon_share_url ?? $item->url }}" target="_blank">
                    <img src="{{ $item->pict_url }}" class="card-img-top">
                </a>
                <div class="card-body">
                    <div class="goods_detail">
                        <a href="{{ $item->coupon_share_url ?? $item->url }}" title="{{ $item->title }}" alt="{{ $item->title }}" style="display: inline-block; min-height: 50px;">
                            <h5 class="card-title">{{ mb_substr($item->title, 0, 15) }}...</h5>
                        </a>
                        <p class="card-text mb-1">原价:￥{{ $item->reserve_price }}</p>
                        <p class="card-text mb-1 text-danger">活动价:￥{{ $item->zk_final_price }}</p>
                    </div>
                    @if ($item->coupon_total_count > 0)
                    <a href="{{ $item->coupon_share_url }}" class="btn btn-sm float-left coupon">
	                    <span style="border-right: 1px dashed #8513cf; display: inline-block; padding-right: 4px;">券</span>
	                    <span>￥{{ $item->coupon_amount }}</span>
                    </a>
                    @endif
                    <a href="{{ $item->coupon_share_url ?? $item->url }}" class="btn btn-primary btn-sm float-right share">分享赚{{ round($item->zk_final_price * $item->commission_rate / 10000, 2) }}</a>
                </div>
            </div>
        </div>
        @endforeach
        @else 
        <h3>Sorry，没有找到你想要的宝贝...</h3>
        @endif
    </div>
@stop