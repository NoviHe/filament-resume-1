<?php

use App\Models\MenuNavbar;
use App\Models\Setting;

function get_setting_value($key)
{
    $data = Setting::where('key', $key)->first();
    if (isset($data->value)) {
        return $data->value;
    } else {
        return "empty";
    }
}

function get_visibility_section($key)
{
    $data = MenuNavbar::where('key', $key)->first();
    if (isset($data->name)) {
        return $data->visibility_section;
    } else {
        return false;
    }
}
