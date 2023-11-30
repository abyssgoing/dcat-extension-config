<?php

namespace Ll\DcatConfig;

use Dcat\Admin\Extend\ServiceProvider;

class DcatConfigServiceProvider extends ServiceProvider
{
	protected $js = [
//        'js/index.js',
    ];
	protected $css = [
//		'css/index.css',
	];

    protected $menu = [
        [
            'title' => 'Config',
            'uri'   => 'llconfig',
            'icon'  => 'fa-gear', // 图标可以留空
        ],
    ];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//
		$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/'. $this->getName()),
        ]);

	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
