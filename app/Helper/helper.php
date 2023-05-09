<?php

use App\Models\BusinessSetting;
use Illuminate\Support\Facades\Cache;

function uploadImage($request, $update_image = null){
    return $request->hasFile('image')?$request->file('image')->store('/images', ['disk' =>'my_files']): $update_image->image ?? 'image/default.jpg';
}
if (!function_exists('get_setting')) {
    function get_setting($key, $default = null)
    {
//        $settings = Cache::remember('business_settings', 86400, function(){
//            return BusinessSetting::all();
//        });

        $setting = BusinessSetting::where('type', $key)->first();
        return $setting == null ? $default : $setting->value;
    }
}
