<?php

namespace App\Http\Controllers\dashboard\Supplier;

use App\Http\Controllers\Controller;
use App\Models\Supplier\country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
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
        $this->model_instance = Country::class;
        $this->index_view = 'dashboard.countries.index';
        $this->create_view = 'dashboard.countries.create';
        $this->show_view = 'dashboard.countries.show';
        $this->edit_view = 'dashboard.countries.edit';

        $this->create_route = 'dashboard.country.create';
        $this->edit_route = 'dashboard.country.edit';


        $this->success_message = 'Country created successfully';
        $this->error_message = "Failed to create country.";

        $this->update_success_message = 'Country updated successfully!';
        $this->update_error_message = "Unfortunately, the Country could not be updated";

        $this->delete_message = 'Country deleted successfully';
        $this->error = 'Something went Wrong';


    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = $this->model_instance::all()->sortBy('id');
        return view($this->create_view,compact('countries'));
    }
    public function StoreValidationRules()
    {
        return [
            'name' => 'required|string|min:3|max:200|unique:countries,name',
            'status' => 'required|in:active,inactive',
            'sort_number' => 'nullable|integer',
        ];
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated_data = $request->validate($this->StoreValidationRules());
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
