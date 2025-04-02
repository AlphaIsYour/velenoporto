<?php

if (!function_exists('isActive')) {
    function isActive($path) {
        return request()->is($path) ? 'text-white bg-gradient-to-r from-indigo-600 to-blue-600 shadow-lg shadow-indigo-500/20' : 'text-gray-400 hover:bg-white/5';
    }
}