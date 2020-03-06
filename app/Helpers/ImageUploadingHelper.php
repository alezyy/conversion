<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class ImageUploadingHelper
{
    public static function get_image($image_path, $width = 0, $height = 0,
                                     $default_image = '/admin_assets/no-image.png', $alt_title_txt = '')
    {
        $dimensions = '';
        if ($width > 0 && $height > 0) {
            $dimensions = 'style="max-width=' . $width . 'px; max-height:' . $height . 'px;"';
        } elseif ($width > 0 && $height == 0) {
            $dimensions = 'style="max-width=' . $width . 'px;"';
        } elseif ($width == 0 && $height > 0) {
            $dimensions = 'style="max-height:' . $height . 'px;"';
        }
        $image_src = self::print_image_src($image_path, $width, $height, $default_image, $alt_title_txt);
        return '<img src="' . $image_src . '" ' . $dimensions . ' alt="' . $alt_title_txt . '" title="' . $alt_title_txt . '">';
    }

    public static function print_image($image_path, $width = 0, $height = 0,
                                       $default_image = '/admin_assets/no-image.png', $alt_title_txt = '')
    {
        echo self::get_image($image_path, $width, $height, $default_image, $alt_title_txt);
    }

    public static function print_image_src($image_path, $width = 0, $height = 0,
                                           $default_image = '/admin_assets/no-image.png', $alt_title_txt = '')
    {

        if (!empty($image_path) && file_exists(ImageUploadingHelper::real_public_path() . $image_path)) {
            return ImageUploadingHelper::public_path() . $image_path;
        } else {
            return asset($default_image);
        }
    }

    public static function public_path()
    {
        return url('/') . DIRECTORY_SEPARATOR;
    }

    public static function real_public_path()
    {
        return public_path() . DIRECTORY_SEPARATOR;
    }

}
