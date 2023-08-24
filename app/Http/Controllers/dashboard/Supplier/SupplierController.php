<?php

namespace App\Http\Controllers\dashboard\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSupplierRequest;
use App\Models\Supplier\country;
use App\Models\Supplier\Supplier;
use Illuminate\Http\Request;
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

        $this->create_route = 'dashboard.supplier.create';
        $this->edit_route = 'dashboard.supplier.edit';


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
        $countries = Country::all();
        return view($this->create_view, compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupplierRequest $request)
    {
        $validated_data = $request->validated();
        try {
            DB::beginTransaction();
            $object = $this->model_instance::create($validated_data);
            $object->sort_number = $object->id;
            $object->save();
            DB::commit();
//      $log_message = trans('products.create_log') . '#' . $object->id;
//      UserActivity::logActivity($log_message);
            return redirect()->route($this->create_route, $object->id)->with('success', $this->success_message);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route($this->create_route, $object->id)->with('error', $this->error_message);
        }
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $supplier = $this->model_instance::findOrFail($id);
        $countries = country::where('status', '=', 'active')->get();
        return view($this->edit_view, compact('supplier', 'countries'));
    }

    public function UpdateValidationRules($id)
    {
        return [
            'name' => 'required|string|min:3|max:200',
            'phone' => 'required|string|unique:suppliers,phone,' . $id,
            'email' => 'nullable|email|unique:suppliers,email,' . $id,
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
            'country_id' => 'required|exists:countries,id',
            'sort_number' => 'nullable|integer',
            'meta_title' => 'required|string',
            'meta_description' => 'required|string',
        ];
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //return $this->UpdateValidationRules($id);
        $validated_data = $request->validate($this->UpdateValidationRules($id));

        try {


            DB::beginTransaction();
            $object = $this->model_instance::findOrFail($id);
            $object->update($validated_data);
            $object->save();
            DB::commit();

            // You can uncomment this if you have UserActivity implemented
            // $log_message = trans('products.update_log') . '#' . $object->id;
            // UserActivity::logActivity($log_message);
            return redirect()->route($this->edit_route, $object->id)->with('success', $this->update_success_message);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route($this->edit_route, $object->id)->with('success', $this->update_error_message);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            // Find the product
            $supplier = $this->model_instance::findOrFail($id);

            $supplier->delete();

            DB::commit();

            return response()->json(['message' => 'Product deleted successfully'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Failed to delete supplier.'], 500);
        }
    }
}
