<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $request, $product;

    public function __construct(Request $request, Product $product){
        $this->request = $request;
        $this->product = $product;
    }

    public function index(){
        return view('cms.pages.products')->with([
            "data" => $this->product->paginate(5)
        ]);
    }

    public function productAdd(){
        return  view('cms.pages.products_add');
    }

    private function _createFilename($ext){
        return rand(11111, 99999).'_'.strtotime(date('Y-m-d')).'.'.$ext;
    }

    private function _storeImage($file){
        if($this->request->$file){
            return Storage::disk('public')->putFileAs(
                'product',
                $this->request->$file,
                $this->_createFilename(
                    $this->request->$file->extension()
                )
            );
        }

        return null;
    }

    private function _data(){
        return  $this->request->merge([
            "image1" => $this->_storeImage('file1'),
            "image2" => $this->_storeImage('file2'),
            "image3" => $this->_storeImage('file3'),
        ])->except('_token', 'file1', 'file2', 'file3');
    }

    public function productStore(){
        $this->product->create($this->_data());

        return Redirect::route('cms.products')->with([
            "success" => "Product Successfully Added!"
        ]);
    }

    public function productEdit($id){
        return  view('cms.pages.products_edit')->with([
            "data" => $this->product->find($id)
        ]);
    }

    public function productUpdate($id){
        $this->product->whereId($id)->update($this->_data());

        return Redirect::route('cms.products')->with([
            "success" => "Product Successfully Updated!"
        ]);
    }

    public function productDestroy($id){
        $this->product->destroy($id);

        return Redirect::route('cms.products')->with([
            "success" => "Product Successfully Deleted!"
        ]);
    }
}
