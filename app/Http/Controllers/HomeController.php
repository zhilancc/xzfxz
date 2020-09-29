<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('home');
    }

    public function test(Request $request)
    {
        $keyword = $request->input('keyword');
        $c = new \TopClient;
        $c->appkey = env('PUB_ALIMAMA_APPKEY', 29437588);
        $c->secretKey = env('PUB_ALIMAMA_APPSECRET');
        $c->format = 'json';
        $req = new \TbkDgMaterialOptionalRequest;
        // $req->setStartDsr("10"); // 商品筛选(特定媒体支持)-店铺dsr评分。筛选大于等于当前设置的店铺dsr评分的商品0-50000之间
        // $req->setPageSize("20"); // 页大小，默认20，1~100
        // $req->setPageNo("1"); // 第几页，默认：１
        // $req->setPlatform("1"); // 链接形式：1：PC，2：无线，默认：１
        // $req->setEndTkRate("1234"); // 商品筛选-淘客佣金比率上限。如：1234表示12.34%
        // $req->setStartTkRate("1234"); // 商品筛选-淘客佣金比率下限。如：1234表示12.34%
        // $req->setEndPrice("10"); // 商品筛选-折扣价范围上限。单位：元
        // $req->setStartPrice("10"); // 商品筛选-折扣价范围下限。单位：元
        // $req->setIsOverseas("false"); // 商品筛选-是否海外商品。true表示属于海外商品，false或不设置表示不限
        // $req->setIsTmall("false"); // 商品筛选-是否天猫商品。true表示属于天猫商品，false或不设置表示不限
        // $req->setSort("tk_rate_des"); // 排序_des（降序），排序_asc（升序），销量（total_sales），淘客佣金比率（tk_rate）， 累计推广量（tk_total_sales），总支出佣金（tk_total_commi），价格（price）
        // $req->setItemloc("杭州"); // 商品筛选-所在地
        // $req->setCat("16,18"); // 商品筛选-后台类目ID。用,分割，最大10个，该ID可以通过taobao.itemcats.get接口获取到
        $req->setQ($keyword); // 商品筛选-查询词
        // $req->setMaterialId("2836"); // 不传时默认物料id=2836；如果直接对消费者投放，可使用官方个性化算法优化的搜索物料id=17004
        // $req->setHasCoupon("false"); // 优惠券筛选-是否有优惠券。true表示该商品有优惠券，false或不设置表示不限
        // $req->setIp("13.2.33.4"); // ip参数影响邮费获取，如果不传或者传入不准确，邮费无法精准提供
        $req->setAdzoneId("110902250117"); // mm_xxx_xxx_12345678三段式的最后一段数字
        // $req->setNeedFreeShipment("true"); // 商品筛选-是否包邮。true表示包邮，false或不设置表示不限
        // $req->setNeedPrepay("true"); // 商品筛选-是否加入消费者保障。true表示加入，false或不设置表示不限
        // $req->setIncludePayRate30("true"); // 商品筛选(特定媒体支持)-成交转化是否高于行业均值。True表示大于等于，false或不设置表示不限
        // $req->setIncludeGoodRate("true"); // 商品筛选-好评率是否高于行业均值。True表示大于等于，false或不设置表示不限
        // $req->setIncludeRfdRate("true"); // 商品筛选(特定媒体支持)-退款率是否低于行业均值。True表示大于等于，false或不设置表示不限
        // $req->setNpxLevel("2"); // 商品筛选-牛皮癣程度。取值：1不限，2无，3轻微
        // $req->setEndKaTkRate("1234"); // 商品筛选-KA媒体淘客佣金比率上限。如：1234表示12.34%
        // $req->setStartKaTkRate("1234"); // 商品筛选-KA媒体淘客佣金比率下限。如：1234表示12.34%
        // $req->setDeviceEncrypt("MD5"); // 智能匹配-设备号加密类型：MD5
        // $req->setDeviceValue("xxx"); // 智能匹配-设备号加密后的值（MD5加密需32位小写）
        // $req->setDeviceType("IMEI"); // 智能匹配-设备号类型：IMEI，或者IDFA，或者UTDID（UTDID不支持MD5加密），或者OAID
        // $req->setLockRateEndTime("1567440000000"); // 锁佣结束时间
        // $req->setLockRateStartTime("1567440000000"); // 锁佣开始时间
        // $req->setLongitude("121.473701"); // 本地化业务入参-LBS信息-经度
        // $req->setLatitude("31.230370"); // 本地化业务入参-LBS信息-纬度
        // $req->setCityCode("310000"); // 本地化业务入参-LBS信息-国标城市码，仅支持单个请求，请求饿了么卡券物料时，该字段必填。 （详细城市ID见：https://mo.m.taobao.com/page_2020010315120200508）
        // $req->setSellerIds("1,2,3,4"); // 商家id，仅支持饿了么卡券商家ID，支持批量请求1-100以内，多个商家ID使用英文逗号分隔
        // $req->setSpecialId("2323"); // 会员运营ID
        // $req->setRelationId("3243"); // 渠道关系ID，仅适用于渠道推广场景
        $resp = $c->execute($req);
        dd($resp);
    }
}
