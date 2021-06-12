<?php

namespace Yunseo\XePlugin\CorporationPlugin\Controllers;

use XeConfig;
use XePresenter;
use Xpressengine\Config\ConfigEntity;
use Xpressengine\Http\Request;

class SettingsController
{
    public function index()
    {
        $title = 'asdsadsadstt';
        $wwwConfig = XeConfig::get('www');

        if ($wwwConfig instanceof ConfigEntity) {
//            dd($wwwConfig);
        }

//        dd($wwwConfig);

//
//        $wwwConfig['name'] ?? "ㄴㄴㄴ";
//        array_get($wwwConfig, 'name', 'ㄴㄴㄴ');

        return XePresenter::make("CorporationPlugin::views.index", compact('title', 'wwwConfig'));
    }

    public function store(Request $request)
    {
    //   dd($request->all());
  //      dd($request->get('w'));     //w의 값만 보냅니다.
 //      dd($request->only(['w', 'w2']));
 //       dd($request->except(['_token']));  //토큰제외


        XeConfig::set('www', $request->only('w','w2','w3'));
        return redirect()->back();
    }
}
