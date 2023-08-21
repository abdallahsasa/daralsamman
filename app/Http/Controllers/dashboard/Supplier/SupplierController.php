<?php

namespace App\Http\Controllers\dashboard\Supplier;

use App\Http\Controllers\Controller;
use App\Models\Supplier\country;
use App\Models\Supplier\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{

    private $index_view;
    private $create_view;
    private $show_view;
    private $edit_view;


//    private $edit_variation_view;

//    private $index_route;
//    private $model_instance;
    private $success_message;
    private $error_message;
//    private $update_success_message;
//    private $update_error_message;
    public function __construct()
    {
        $this->model_instance = Supplier::class;
        $this->index_view = 'dashboard.suppliers.index';
        $this->create_view = 'dashboard.suppliers.create';
        $this->show_view = 'dashboard.suppliers.show';
        $this->edit_view = 'dashboard.suppliers.edit';

        $this->create_route = 'dashboard.suppliers.create';
        $this->edit_route = 'dashboard.suppliers.edit';


        $this->success_message = 'Supplier created successfully';
        $this->error_message = "Failed to create supplier.";

        $this->update_success_message = 'Supplier updated successfully!';
        $this->update_error_message = "Unfortunately, the Supplier could not be updated";

        $this->delete_message = 'Supplier deleted successfully';
        $this->error = 'Something went Wrong';


    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = $this->model_instance::all()->sortBy('id'); // Update with your filtering logic
        return view($this->index_view, compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries=Country::all();
        return view($this->create_view,compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data = $request->validated();
        DB::beginTransaction();
        $object = $this->model_instance::create($validated_data);
        $object->sort_number = $object->id;
        $object->save();
        DB::commit();
//      $log_message = trans('products.create_log') . '#' . $object->id;
//      UserActivity::logActivity($log_message);
        return redirect()->route($this->create_route, $object->id)->with('success', $this->success_message);

    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
