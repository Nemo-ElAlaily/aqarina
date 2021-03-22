<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PropertyTypeController extends Controller
{
    public function __construct()
    {
        $this -> middleware(['permission:read_property_types'])->only('index');
        $this -> middleware(['permission:create_property_types'])->only(['create', 'store']);
        $this -> middleware(['permission:update_property_types'])->only(['edit', 'update']);
        $this -> middleware(['permission:delete_property_types'])->only(['destroy']);
    } // end of construct

    public function index(Request $request)
    {
        $propertyTypes = PropertyType::when($request -> search , function ($query) use ($request) {
            return $query -> where('name', 'like', '%' . $request -> search . '%');
        })->latest()->paginate(PAGINATION_COUNT);

        return view('admin.property_types.index', compact('propertyTypes'));

    } // end of index

    public function create()
    {
        return view('admin.property_types.create');

    } // end of create
    public function store(Request $request)
    {
        // validation
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => ['required', Rule::unique('property_type_translations', 'name')]];
        } // end of for each

        // custom validation message
        $request->validate($rules,
            [
                'required' => 'This Field is Required',
            ]);// end of validation

        // create Feature in the database
        PropertyType::create($request->all());
        // return to index with success message
        session()->flash('success', 'Property Type Added Successfully');
        return redirect()->route('admin.property_types.index');
    } // end of store

    public function edit(PropertyType $propertyType)
    {
        return view('admin.property_types.edit', compact('propertyType'));

    } // end of edit

    public function update(Request $request, PropertyType $propertyType)
    {
        // validation
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => ['required', Rule::unique('property_type_translations', 'name')->ignore($propertyType->id, 'property_type_id')]];
        }//end of for each
        $request->validate($rules, [
            'required' => 'This Field is Required',
        ]); // end of validation

        // update feature in database
        $propertyType -> update($request -> all());
        session()->flash('success', 'Property Type Updated Successfully');
        return redirect()->route('admin.property_types.index');

    } // end of update

    public function destroy(PropertyType $propertyType)
    {
        $propertyType -> deleteTranslations();
        $propertyType -> delete();
        session()->flash('success', 'Property Type Deleted Successfully');
        return redirect()->route('admin.property_types.index');

    } // end of destroy

} // end of controller
