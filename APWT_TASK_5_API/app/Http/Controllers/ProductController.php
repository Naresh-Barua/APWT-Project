<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        return view('addprescription');
      }

      public function ViewDetails(Request $request){
        $rules =[
                "name"=>"required|min:4|max:20",
                'dob'=>'required|after_or_equal:1900-01-01|before:today',
                "weight"=>"required|min:2",
                'type' => 'required',
                'ins' => 'required',
                'sub' => 'required',
                "address"=>"required|min:5"
        ];
        ['name.required'=>"Required Field must be Filled-Up",
             'type.required'=>"Please! Choose a categoery",
             'weight.required'=>"Your weight should be atleast 15kg"
            
            ];
             $validator = Validator::make($request->all(),$rules);
            if ($validator->fails()) {
                return redirect('/')
                ->withInput()
                ->withErrors($validator);
            }
            else{
                $data = $request->input();
    
                    $product = new product;
                    $product->name = $data['name'];
                    $product->dob = $data['dob'];
                    $product->weight = $data['weight'];
                    $product->type = $data['type'];
                    $product->ins = $data['ins'];
                    $product->sub = $data['sub'];
                    $product->address = $data['address'];
                    
                    $product->save();
                    return redirect('/')->withSuccess('Prescription Added successfully!');
            }
    
        }
        
        public function APIList(){
            return Product::all();
        }

        public function APIPost(Request $req){
            $product = new Product();
            $product->name = $req->name;
            $product->dob = $req->dob;
            $product->weight = $req->weight;
            $product->type = $req->type;
            $product->ins = $req->ins;
            $product->sub = $req->sub;
            $product->address = $req->address;
            $product->save();
    
            return redirect('http://127.0.0.1:8000/');
        }
}
