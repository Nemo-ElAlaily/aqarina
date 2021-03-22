<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Currency;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CurrencyController extends Controller
{
    public function __construct()
    {
        $this -> middleware(['permission:read_currencies'])->only('index');
        $this -> middleware(['permission:create_currencies'])->only(['create', 'store']);
        $this -> middleware(['permission:update_currencies'])->only(['edit', 'update']);
        $this -> middleware(['permission:delete_currencies'])->only(['destroy']);
    } // end of construct

    public function index(Request $request)
    {
        $currencies = Currency::when($request -> search , function ($query) use ($request) {
            return $query -> where('name', 'like', '%' . $request -> search . '%');
        })->latest()->paginate(PAGINATION_COUNT);

        return view('admin.currencies.index', compact('currencies'));

    } // end of index

    public function create()
    {
        return view('admin.currencies.create');

    } // end of create

    public function store(Request $request)
    {
        // validation
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => ['required', Rule::unique('currency_translations', 'name')]];
        } // end of for each

        $rules += ['symbol' => 'required|starts_with:#'];

        // custom validation message
        $request->validate($rules,
            [
                'required' => 'This Field is Required',
                'symbol.starts_with' => 'Must Start with #'
            ]);// end of validation

        // create Feature in the database
        Currency::create($request->all());
        // return to index with success message
        session()->flash('success', 'Currency Added Successfully');
        return redirect()->route('admin.currencies.index');

    } // end of store

    public function edit(Currency $currency)
    {
        return view('admin.currencies.edit', compact('currency'));

    }// end of edit

    public function update(Request $request, Currency $currency)
    {
        // validation
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => [
                'required',
                Rule::unique('currency_translations', 'name')->ignore($currency->id, 'currency_id'),
                ]];
        }//end of for each

        $rules += ['symbol' => 'required_without:id|starts_with:#'];

        $request->validate($rules, [
            'required' => 'This Field is Required',
        ]); // end of validation

        // update feature in database
        $currency -> update($request -> all());
        session()->flash('success', 'Currency Updated Successfully');
        return redirect()->route('admin.currencies.index');


    }// end of update

    public function destroy(Currency $currency)
    {
        $currency -> deleteTranslations();
        $currency -> delete();
        session()->flash('success', 'Currency Deleted Successfully');
        return redirect()->route('admin.currencies.index');

    } // end of destroy

} // end of controller
