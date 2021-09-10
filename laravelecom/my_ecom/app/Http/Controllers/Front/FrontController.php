<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class FrontController extends Controller
{
    public function index(Request $request)
    {
        $result['categories_display']=DB::table('categories')->where('category_price' ,'>', '300000')-> get();
        // foreach($result as $resu)
        // {
        //     print_r($resu);
        // }
        return view('Front.index',$result);
    }   
    
   
}
