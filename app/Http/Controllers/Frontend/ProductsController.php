<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class ProductsController.
 */
class ProductsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function otherProducts()
    {
        return view('frontend.other_products');
    }

    public function kayakProducts()
    {
        return view('frontend.kayak_products');
    }
}
