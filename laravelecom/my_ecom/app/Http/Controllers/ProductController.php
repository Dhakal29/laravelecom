<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
class ProductController extends Controller
{
    public $timestamps = false;
    public function index()
    {
        $result['data']=Product::all();
       return view('admin/product',$result);
    }
    public function manage_product(Request $request, $id='')
    {  
        if($id>0){
            $arr=Product::where(['id'=>$id])->get();
            // $result['category_id']=$arr['0']->category_id;
            $result['name']=$arr['0']->name;
            $result['image']=$arr['0']->image;
            // $result['slug']=$arr['0']->slug;
            $result['brand']=$arr['0']->brand;
            $result['model']=$arr['0']->model;
            $result['short_desc']=$arr['0']->short_desc;
            $result['desc']=$arr['0']->desc;
            $result['keywords']=$arr['0']->keywords;
            $result['technical_specification']=$arr['0']->technical_specification;
            $result['uses']=$arr['0']->uses;
            $result['warranty']=$arr['0']->warranty;
            $result['id']=$arr['0']->id;
        } 
        else{
            // $result['category_id']='';
            $result['name']='';
            $result['image']='';
            // $result['slug']='';
            $result['brand']='';
            $result['model']='';
            $result['short_desc']='';
            $result['desc']='';
            $result['keywords']='';
            $result['technical_specification']='';
            $result['uses']='';
            $result['warranty']='';
            $result['id']=0;
        }
        $result['category']=DB::table('categories')->get();
        return view('admin/manage_product',$result);
    }
    public function manage_product_process(Request $request)
    {      
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            // 'slug' => 'required|unique:products,slug,'.$request->post('id'),
        ]);
        $model = new Product();
        if($request->post('id') > 0){
            $model=Product::find($request->post('id'));
            $msg="Product Updated";

        }else{
            $model=new Product();
            $msg="Product Inserted";
        }
        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
            $model->image=$image_name;
        }
        // $model->category_id=1;
        $model->name=$request->post('name');
        $model->brand=$request->post('brand');
        $model->image=$request->post('image');
        $model->model=$request->post('model');
        $model->short_desc=$request->post('short_desc');
        $model->desc=$request->post('desc');
        $model->keywords=$request->post('keywords');
        $model->technical_specification=$request->post('technical_specification');
        $model->uses=$request->post('uses');
        $model->warranty=$request->post('warranty');
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/product');
    }
    public function delete(Request $request,$id )
    {
        $model=Product::find($id);
        $model->delete();
        $request->session()->flash('message','Product deleted');
        return redirect('admin/product');
    }
}