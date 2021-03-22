<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Feature;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FeatureController extends Controller
{
    public function __construct()
    {
        $this -> middleware(['permission:read_features'])->only('index');
        $this -> middleware(['permission:create_features'])->only(['create', 'store']);
        $this -> middleware(['permission:update_features'])->only(['edit', 'update']);
        $this -> middleware(['permission:delete_features'])->only(['destroy']);
    } // end of construct

    public function index(Request $request)
    {
        $features = Feature::when($request -> search , function ($query) use ($request) {
            return $query -> where('name', 'like', '%' . $request -> search . '%');
        })->latest()->paginate(PAGINATION_COUNT);

        return view('admin.features.index', compact('features'));
    }

    public function create()
    {
        return view('admin.features.create');

    }// end of create

    public function store(Request $request)
    {
        // validation
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => ['required', Rule::unique('feature_translations', 'name')]];
        } // end of for each

        // custom validation message
        $request->validate($rules,
            [
                'required' => 'This Field is Required',
            ]);// end of validation

        // create Feature in the database
        Feature::create($request->all());
        // return to index with success message
        session()->flash('success', 'Feature Added Successfully');
        return redirect()->route('admin.features.index');

    } // end of store

    public function edit(Feature $feature)
    {
        return view('admin.features.edit', compact('feature'));

    } // end of edit

    public function update(Request $request, Feature $feature)
    {
        // validation
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => ['required', Rule::unique('feature_translations', 'name')->ignore($feature->id, 'feature_id')]];
        }//end of for each
        $request->validate($rules, [
            'required' => 'This Field is Required',
        ]); // end of validation

        // update feature in database
        $feature -> update($request -> all());
        session()->flash('success', 'Feature Updated Successfully');
        return redirect()->route('admin.features.index');

    } // end of update

    public function destroy(Feature $feature)
    {
        $feature -> deleteTranslations();
        $feature -> delete();
        session()->flash('success', 'Feature Deleted Successfully');
        return redirect()->route('admin.features.index');

    } // end of destroy

} // end of controller s
