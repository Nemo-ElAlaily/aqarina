<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PropertyStatus;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PropertyStatusController extends Controller
{
    public function __construct()
    {
        $this -> middleware(['permission:read_property_statuses'])->only('index');
        $this -> middleware(['permission:create_property_statuses'])->only(['create', 'store']);
        $this -> middleware(['permission:update_property_statuses'])->only(['edit', 'update']);
        $this -> middleware(['permission:delete_property_statuses'])->only(['destroy']);
    } // end of construct

    public function index(Request $request)
    {
        $propertyStatuses = PropertyStatus::when($request -> search , function ($query) use ($request) {
            return $query -> where('name', 'like', '%' . $request -> search . '%');
        })->latest()->paginate(PAGINATION_COUNT);

        return view('admin.property_statuses.index', compact('propertyStatuses'));
    } // end of index

    public function create()
    {
       return view('admin.property_statuses.create');

    } // end of create

    public function store(Request $request)
    {
        // validation
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => ['required', Rule::unique('property_status_translations', 'name')]];
        } // end of for each

        // custom validation message
        $request->validate($rules,
            [
                'required' => 'This Field is Required',
            ]);// end of validation

        // create Feature in the database
        PropertyStatus::create($request->all());
        // return to index with success message
        session()->flash('success', 'Property Status Added Successfully');
        return redirect()->route('admin.property_statuses.index');

    } //

    public function edit(PropertyStatus $propertyStatus)
    {
        return view('admin.property_statuses.edit', compact('propertyStatus'));

    } // end of edit

    public function update(Request $request, PropertyStatus $propertyStatus)
    {
        // validation
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => ['required', Rule::unique('property_status_translations', 'name')->ignore($propertyStatus->id, 'property_status_id')]];
        }//end of for each
        $request->validate($rules, [
            'required' => 'This Field is Required',
        ]); // end of validation

        // update feature in database
        $propertyStatus -> update($request -> all());
        session()->flash('success', 'Property Status Updated Successfully');
        return redirect()->route('admin.property_statuses.index');

    } // end of update

    public function destroy(PropertyStatus $propertyStatus)
    {
        $propertyStatus -> deleteTranslations();
        $propertyStatus -> delete();
        session()->flash('success', 'Property Status Deleted Successfully');
        return redirect()->route('admin.property_statuses.index');

    }// end of destroy
} // end of controller
