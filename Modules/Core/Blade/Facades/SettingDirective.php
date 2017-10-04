<?php

namespace Modules\Core\Blade\Facades;

use Illuminate\Support\Facades\Facade;

final class SettingDirective extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'setting.setting.directive';
    }
}
