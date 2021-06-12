<?php

namespace Yunseo\XePlugin\CorporationPlugin;

use illuminate\HTTP\Request;
use Route;
use Xpressengine\Plugin\AbstractPlugin;
use Yunseo\XePlugin\CorporationPlugin\Middlewares\LoginMiddleware;


class Plugin extends AbstractPlugin
{
    public function boot()
    {
        app('router')->pushMiddlewareToGroup('web',LoginMiddleware::class);


        \XeRegister::push('settings/menu', 'Yunseo.xe', [
            'title' => '공사중',
            'description' => '',
            'display' => true,
            'ordering' => 200
        ]);
        \XeRegister::push('settings/menu', 'Yunseo.xe.hub', [
            'title' => '에드온',
            'description' => '',
            'display' => true,
            'ordering' => 200
        ]);

//        // /plugin/corporation_plugin
//        Route::fixed(Plugin::getId(), function () {
//            Route::get('', [
//                'as' => 'ckeditor::xeicon_tool.popup',
//                'uses' => 'Yunseo\XePlugin\CorporationPlugin\Controllers\SettingsController@index'
//            ]);
//
//        }, ['namespace' => 'Xpressengine\\Plugins\\CkEditor\\Components\\EditorTools\\XeiconTool']);

//        Route::group([
//            'namespace' => '',
//            'prefix' => 'emoticon'
//        ], function () {
//            Route::get('', function () {
//                return "emoticon";
//            });
//        });


        Route::settings(static::getId(), function () {
            Route::get('', [
                'as' => "corporation_plugin::settings.config.index",  //메소드 재정의 힘드니까 쓰기
                'uses' => 'SettingsController@index'  // 메소드
            ]);

            Route::post('', [
                'as' => "corporation_plugin::settings.config.store",
                'uses' => 'SettingsController@store'
            ]);
            
        }, ["namespace" => 'Yunseo\\XePlugin\\CorporationPlugin\\Controllers']);

        // settings_menu 지정
        Route::settings('xe', function () {
            Route::get('hub', [
                'as' => 'settings.member.hub',
                'uses' => 'Yunseo\XePlugin\CorporationPlugin\Controllers\SettingsController@index',
                'settings_menu' => 'Yunseo.xe.hub'
            ]);
        });




    }
}
