<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class AppController extends Controller
{
    /**
     * Show the task manager application (Vue).
     *
     * @return Renderable
     */
    public function vue()
    {
        return view('vue');
    }

    /**
     * Show the task manager application (React).
     *
     * @return Renderable
     */
    public function react()
    {
        return view('react');
    }

    /**
     * Show the headless Shopify example.
     *
     * @return Renderable
     */
    public function shop()
    {
        return view('shop');
    }
}
