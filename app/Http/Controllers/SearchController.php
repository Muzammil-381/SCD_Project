<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
   public function search(Request $request)
{
    $query = $request->query('query');
    $results = Product::where('name', 'like', "%$query%")
        // ->orWhere('category', 'like', "%$query%")
        ->get();
    return response()->json($results);
}

}
