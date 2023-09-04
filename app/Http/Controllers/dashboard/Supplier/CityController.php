<?php

namespace App\Http\Controllers\dashboard\Supplier;

use App\Http\Controllers\Controller;
use App\Models\Supplier\City;
use App\Models\Supplier\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
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
        $this->model_instance = City::class;
        $this->index_view = 'dashboard.cities.index';
        $this->create_view = 'dashboard.cities.create';
        $this->show_view = 'dashboard.cities.show';
        $this->edit_view = 'dashboard.cities.edit';

        $this->create_route = 'dashboard.city.create';
        $this->edit_route = 'dashboard.city.edit';


        $this->success_message = 'City created successfully';
        $this->error_message = "Failed to create city.";

        $this->update_success_message = 'City updated successfully!';
        $this->update_error_message = "Unfortunately, the City could not be updated";

        $this->delete_message = 'City deleted successfully';
        $this->error = 'Something went Wrong';


    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = $this->model_instance::all()->sortBy('id');
        $countries=Country::all()->sortBy('id');
        return view($this->create_view,compact('cities','countries'));
    }
    public function StoreValidationRules()
    {
        return [
            'name' => 'required|string|min:3|max:200|unique:cities,name',
            'country_id' => 'required|exists:countries,id',
            'sort_number' => 'nullable|integer',
        ];
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated_data = $request->validate($this->StoreValidationRules());

            DB::beginTransaction();
            $object = $this->model_instance::create($validated_data);
            $object->sort_number = $object->id;
            $object->save();
            DB::commit();
//      $log_message = trans('products.create_log') . '#' . $object->id;
//      UserActivity::logActivity($log_message);
            return redirect()->route($this->create_route)->with('success', $this->success_message);

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
