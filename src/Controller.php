<?php
namespace Yunseo\XePlugin\CorporationPlugin;

use XeFrontend;
use XePresenter;
use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        $title = '컨트롤러 필요';

        // set browser title
        XeFrontend::title($title);

        // load css file
        XeFrontend::css(Plugin::asset('assets/style.css'))->load();
        
        // output
        return XePresenter::make('CorporationPlugin::views.index', ['title' => $title]);
    }
}
