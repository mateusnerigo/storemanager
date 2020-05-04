<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Supplier;

use Illuminate\Http\Request;

class ProductController extends Controller
{ 
	protected $msg = [
        'name.required' => 'Preencha este campo para continuar',
        'name.min' => 'Este campo deve ter, pelo menos, 2 caracteres',
        'name.max' => 'Este campo deve ter, no máximo, 50 caracteres',
        'category_id.required' => 'Preencha este campo para continuar',
        'supplier.required' => 'Preencha este campo para continuar',
    ];

    public function index()
    {
        $products = Product::all();
        return view('products.products', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('products.newProduct', compact(['categories',  'suppliers']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50',
            'category_id' => 'required',
        ], $this->msg);

        Product::create([
            'name' => $request->name,
            'stock' => $request->stock,
		    'extra_code' => $request->extra_code,
		    'manufacturer' => $request->manufacturer,
		    'buy_price' => $request->buy_price,
		    'sell_price' => $request->sell_price,
		    'promo_price' => $request->promo_price,
		    'description' => $request->description,
		    'obs' => $request->obs,
		    'category_id' => $request->category_id,
		    'supplier_id' => $request->supplier_id
        ]);

        return redirect('/products');

    }

    public function show($id)
    {
        $product = Product::find($id);
        $category = Category::find($product->category_id);
        $supplier = Supplier::find($product->supplier_id);

        return view('products.showProduct', compact(['product', 'category', 'supplier']));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('products.editProduct', compact(['product', 'categories', 'suppliers']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:2|max:50',
            'category_id' => 'required',
        ], $this->msg);

        $product = Product::find($id);

        if (isset($product)) {
            $product->name = $request->name;
            $product->stock = $request->stock;
		    $product->extra_code = $request->extra_code;
		    $product->manufacturer = $request->manufacturer;
		    $product->buy_price = $request->buy_price;
		    $product->sell_price = $request->sell_price;
		    $product->promo_price = $request->promo_price;
		    $product->description = $request->description;
		    $product->obs = $request->obs;
		    $product->category_id = $request->category_id;
		    $product->supplier_id = $request->supplier_id;
            $product->save();

            return redirect("/products/${id}");
        }
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/products');
    }
}
