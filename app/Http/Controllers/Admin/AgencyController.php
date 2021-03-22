<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Agency;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image as Image;

class AgencyController extends Controller
{
    public function __construct()
    {
        $this -> middleware(['permission:read_agencies'])->only('index');
        $this -> middleware(['permission:create_agencies'])->only(['create', 'store']);
        $this -> middleware(['permission:update_agencies'])->only(['edit', 'update']);
        $this -> middleware(['permission:delete_agencies'])->only(['destroy']);
    } // end of construct

    public function index(Request $request)
    {
        $agencies = Agency::when($request -> search , function ($query) use ($request) {
            return $query -> where('name', 'like', '%' . $request -> search . '%');
        })->latest()->paginate(PAGINATION_COUNT);

        return view('admin.agencies.index', compact('agencies'));

    } // end of index

    public function create()
    {
        return view('admin.agencies.create');

    }// end of create

    public function store(Request $request)
    {
        $rules = [
            'email' => 'required|unique:agencies',
            'image' => 'required|image',
            'office_number' => 'required|numeric',
            'mobile' => 'required|numeric',
        ] ;

        foreach (config('translatable.locales') as $locale) {
            $rules += [
                $locale . '.name' => ['required', Rule::unique('agency_translations', 'name')],
                // $locale . '.description' => 'required',
            ];
        } // end of for each

        $request -> validate($rules,
            [
                'required' => 'This Field is Required',
            ]);// end of validation

        $request_data = $request -> all();

        if ($request -> image) {
            Image::make($request->image)->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/uploads/agencies/'. $request ->image->hashName()));

            $request_data['image'] = $request->image->hashName();
        }

        Agency::create($request_data);

        session()->flash('success', 'Agency Added Successfully');
        return redirect()->route('admin.agencies.index');

    } // end of store

    public function edit(Agency $agency)
    {
        return view('admin.agencies.edit', compact('agency'));

    } // end of edit

    public function update(Request $request, Agency $agency)
    {
        //
    }

    public function destroy(Agency $agency)
    {
        //
    }

} // end of controller
