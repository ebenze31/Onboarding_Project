<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Product_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class Product_typesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $product_types = Product_type::where('name_type', 'LIKE', "%$keyword%")
                ->orWhere('number_menu', 'LIKE', "%$keyword%")
                ->orWhere('check_highlight', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $product_types = Product_type::latest()->paginate($perPage);
        }

        return view('product_types.index', compact('product_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('product_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Product_type::create($requestData);

        return redirect('product_types')->with('flash_message', 'Product_type added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product_type = Product_type::findOrFail($id);

        return view('product_types.show', compact('product_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $product_type = Product_type::findOrFail($id);

        return view('product_types.edit', compact('product_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $product_type = Product_type::findOrFail($id);
        $product_type->update($requestData);

        return redirect('product_types')->with('flash_message', 'Product_type updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Product_type::destroy($id);

        return redirect('product_types')->with('flash_message', 'Product_type deleted!');
    }

    function add_product_type(Request $request)
    {
        $requestData = $request->all();

        $data_old = Product_type::get();
        // หาค่าที่มากที่สุดในคอลัมน์ number_menu
        $max_number_menu = $data_old->max('number_menu');
        // หาค่าเรคคอร์ดที่มี number_menu มากที่สุด
        $max_number_menu_record = $data_old->sortByDesc('number_menu')->first();

        if( !empty($max_number_menu_record->number_menu) ){
            $max_number_menu_value = $max_number_menu_record->number_menu;
        }else{
            $max_number_menu_value = 0 ;
        }

        $data = [];
        $data['name_type'] = $requestData['add_product_type'];
        $data['icon'] = $requestData['downloadURL'];
        $data['color_code'] = $requestData['add_product_color_code'];
        $data['number_menu'] = (int)$max_number_menu_value + 1;
        
        $data = Product_type::create($data);

        return $data ;
    }

    function get_data_type_product(){
        $data_product_types = Product_type::orderByRaw("CASE 
            WHEN number_menu IS NOT NULL THEN 1
            ELSE 2
            END, 
            number_menu ASC, 
            id DESC")
        ->get();

        return $data_product_types ;
    }

    function get_data_product_type(){
        $data = Product_type::orderBy('number_menu', 'ASC')->get();
        return $data ;
    }

    function change_number_menu_type_product($type_id, $number){

        $number_old = Product_type::where('number_menu', $number)->first();
        $number_select = Product_type::where('id', $type_id)->first();

        $data = [];

        if( !empty($number_select->id) ){
            $data['old_change_to'] = $number_select->number_menu;
        }
        else{
            $data['old_change_to'] = null;
        }

        if( !empty($number_old->id) ){
            $data['old_id'] = $number_old->id;

            DB::table('product_types')
                ->where([ 
                        ['id', $data['old_id']],
                    ])
                ->update([
                        'number_menu' => $data['old_change_to'],
                    ]);
        }

        DB::table('product_types')
            ->where([ 
                    ['id', $type_id],
                ])
            ->update([
                    'number_menu' => $number,
                ]);

        return 'success';

    }

    function delete_product_type($product_type_id){
        $data = Product_type::where('id', $product_type_id)->first();
        Product::where('product_type_id', $product_type_id)->delete();

        if( !empty($data->id) ){
            $data->delete();
        }

        return 'success';

    }

}
