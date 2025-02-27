<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Http\Request;

use function Termwind\render;

class CategorieController extends Controller
{
    use HasUuids ;
    public function create(Request $request)
    {
        Categorie::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
      return   redirect('admin/categories');
    }
    public function getall(){
        return  Categorie::all();

    }
    public function getOne($id)
    {
        return  Categorie::find($id);
    }
    public function fetchAll()
    {

        return view('categories')
                    ->with('categories',$this->getall());
    }
    public function delete(Request $request)
    {
        $categorie = $this->getOne($request->id);
        $categorie->delete();
        return  redirect('/admin/categories');
    }
}
