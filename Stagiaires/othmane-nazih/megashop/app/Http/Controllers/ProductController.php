<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Page d'une catégorie (informatique, petit-electromenager, grand-electromenager)
     */
    public function categorie(string $slug)
    {
        require app_path('Data/data.php');

        $GLOBALS['products'] = $products;
        $GLOBALS['categories'] = $categories;

        $category = getCategoryBySlug($slug);

        if (!$category) {
            abort(404);
        }

        $products = getProductsByCategory($slug);

        return view('categories.show', compact('category', 'products', 'slug'));
    }

    /**
     * Page détail d'un produit
     */
    public function show(int $id)
    {
        require app_path('Data/data.php');

        $GLOBALS['products'] = $products;
        $GLOBALS['categories'] = $categories;

        $product = getProductById($id);

        if (!$product) {
            abort(404);
        }

        $allSimilar = getProductsByCategory($product['category']);
        $similarProducts = array_slice(
            array_values(array_filter($allSimilar, fn($p) => $p['id'] !== $product['id'])),
            0,
            3
        );

        $category = getCategoryBySlug($product['category']);

        return view('produit.show', compact('product', 'similarProducts', 'category'));
    }
}
