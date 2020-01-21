<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use App\Model\ManufacturePlace;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['only' => 'index','edit']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validate the data
        $this->validate($request, [
            'name'          => 'required',
            'email'         => 'required',
            'password'      => 'required'

        ]);

        // store in the database
        $admins = new Admin();
        $admins->name = $request->name;
        $admins->email = $request->email;
        $admins->password=bcrypt($request->password);

        $admins->save();


        return redirect()->route('admin.auth.login');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function products(){
        return view('pages.products');
    }
    public function addproducts(){
        $factories = ManufacturePlace::all();
        return view('pages.add-products')->with([
            'factories' => $factories
        ]);
    }
    public function allproducts(){
        $products = Product::all();
        return view('pages.all-products')->with([
            'products' => $products
        ]);
    }
    public function addproductsStore(Request $request){

        $addproductsStore = new Product();
        $addproductsStore->identity = $request->identity;
        $addproductsStore->name = $request->name;
        $addproductsStore->length = $request->length;
        $addproductsStore->width = $request->width;
        $addproductsStore->height = $request->height;
        $addproductsStore->price = $request->price;
        $addproductsStore->manufacturing_date = $request->manufacturing_date;
        $addproductsStore->manufacturing_place_id = $request->manufacturing_place_id;
//        $addproductsStore->sl_no = $request->sl_no;
        /*$serialno = */
        $addproductsStore->warranty_time = $request->warranty_time;
        $addproductsStore->save();
        return redirect()->route('allproducts');
    }
    public function deleteProduct(Request $request){
        Product::find($request->id)->delete();
        return redirect()->route('allproducts');
    }

    public function addManufactureStore(Request $request){
        $addManufacture = new ManufacturePlace();
        $addManufacture->name =$request->name;
        $addManufacture->short_name = $request->short_name;
        $addManufacture->address = $request->address;
        $addManufacture->phone = $request->phone;
        $addManufacture->email = $request->email;
        $addManufacture->save();
        return back();

    }
    public function allManufacture(){
        $factories = ManufacturePlace::all();
        return view('pages.all-manufacture')->with([
            'factories' => $factories
        ]);
    }
    public function addManufacture(){
        return view('pages.add-manufacture');
    }
    public function dropFactory(Request $request){
        ManufacturePlace::findOrFail($request->id)->delete();
        return back();
    }
}
