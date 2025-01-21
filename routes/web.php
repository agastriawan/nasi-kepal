<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('artikel/{slug}', function ($slug) {
    if ($slug == 'menjadi-wirausaha-muda-bersama-mata-kuliah-kewirausahaan-nurul-fikri') {
        return view('artikel-1');
    }

    if ($slug == 'tantangan-dan-keseruan-di-mata-kuliah-kewirausahaan-nurul-fikri') {
        return view('artikel-2');
    }

    if ($slug == 'pengalaman-belajar-kewirausahaan-di-kampus-nurul-fikri') {
        return view('artikel-3');
    }

    if ($slug == 'membangun-jiwa-entrepreneur-bersama-kewirausahaan-nurul-fikri') {
        return view('artikel-4');
    }

    return view('artikel-1');
});

