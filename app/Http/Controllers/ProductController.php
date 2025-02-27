<?php

namespace App\Http\Controllers;

use App\Core\FillObject;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
            'admin' => 1
        ]);
        return redirect('/products');
    }
    public function update(Request $request) {
        $product  = new Product ;
        $product = FillObject::filled($request,  $product->fille , $product );
        $product->save();
    }
    public function fetchAll()
    {
        $products = Product::where('admin','=',1)->get();
        return view('products')->with('products',$products);
    }
    public function findOne($id)
    {
        return  Product::find($id);
    }
    public function delete( $id)
    {
        $product = $this->findOne($id);
        $product->delete();
        return redirect('/products');
    }
    public function getAll()
    {
        return Product::all();
    }


    public function filled(Request $request)
    {
        // foreach ($fill as $attribute) {
        //     $table->{$attribute} = $request->$attribute;
        // }
        $htmlContent = '<section>';
        for ($i = 0; $i < 10; $i++) {
            $htmlContent .= "<p>test $i</p>";
        }
        $htmlContent .= '</section>';
        return view('welcome')->with('testes', $htmlContent);
        // return $table;
    }
}
