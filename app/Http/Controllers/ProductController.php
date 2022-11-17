<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('here');

       $product= Product::all();
        return view('view',compact('product'));
        /// return view('view_product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        if($request->hasFile('image'))
        {
            $new_name = rand().'.'.$request->image->getClientOriginalExtension();
            $path=Storage::disk('uploads')->putFileAs('/images',$request->image,$new_name);
           // $request->merge(['image'=>$path]);
           // dd($request->image);
        }

            $product= new Product;
            $product->name=$request->name;
            $product->price=$request->price;
            $product->description=$request->description;
            $product->image= $path;
            $product->save();

            return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $destroy= Product::find($id);
       $destroy->delete();

       return redirect(route('product.index'))->with('deleted');


    }

    public function addtoCart()
    {
        $products=Product::all();
      return view('addCart_product',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $find= Product::findOrFail($id);
        return view('edit',compact('find'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        //dd('here');
       // dd($request->all());

       $data=request()->except(['_token','_method']);
        Product::whereId($id)->update($data);
        return redirect(route('product.index'))->with('Data Edited Successfully');
       //return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


    }


    public function products()

    {

        $products = Product::all();

        return view('products', compact('products'));

    }

    public function Cart()
    {
        return view('cart');
    }

    public function addcart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

        } else {

            $cart[$id] = [

                "name" => $product->name,

                "quantity" => 1,

                "price" => $product->price,

                "image" => $product->image

            ];

    }
    session()->put('cart', $cart);

    return redirect()->back()->with('success', 'Product added to cart successfully!');

}

public function updateCart(Request $request)

{

    if($request->id && $request->quantity){

        $cart = session()->get('cart');

        $cart[$request->id]["quantity"] = $request->quantity;

        session()->put('cart', $cart);

        session()->flash('success', 'Cart updated successfully');

    }

}

        public function removeCart(Request $request)

        {

            if($request->id) {

                $cart = session()->get('cart');

                if(isset($cart[$request->id])) {

                    unset($cart[$request->id]);

                    session()->put('cart', $cart);

                }

                session()->flash('success', 'Product removed successfully');

            }

        }


}
