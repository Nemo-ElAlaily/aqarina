@extends('layouts.admin.app')

@section('title', 'Create agency')

@section('content-header')
    <div class="col-sm-6">
        <h1>Create agency</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.agencies.index') }}">agencies</a></li>
        </ol>
    </div>
@stop

@section('content')

    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">

                {{--                        @include('partials._errors')--}}
                <form class="col-12" action="{{ route('admin.agencies.store') }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('post') }}

                    <div class="row">
                        @foreach (config('translatable.locales') as $locale)
                            <div class="col-sm-12 col-lg-12">
                                <div class="form-group">
                                    <label for="{{ $locale }}[name]">Agency Name in @lang('site.' . $locale . '.name')</label>
                                    @error($locale . '.name')
                                    <span class="text-danger mx-5">{{ $message }}</span>
                                    @enderror
                                    <input class="form-control input-thick" type="text" name="{{ $locale }}[name]"
                                           value="{{ $agency->translate($locale)-> name }}">
                                </div>

                                <div class="form-group">
                                    <label for="{{ $locale }}[description]">Agency Description in @lang('site.' . $locale . '.name')</label>
                                    @error($locale . '.description')
                                    <span class="text-danger mx-5">{{ $message }}</span>
                                    @enderror
                                    <textarea class="form-control input-thick ckeditor" type="text" name="{{ $locale }}[description]">
                                        {{ $agency->translate($locale)-> description }}
                                    </textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12 col-lg-12">
                            <label>E-Mail</label>
                            @error('email')
                            <span class="text-danger mx-1">{{ $message }}</span>
                            @enderror
                            <input type="text" name="email" class="form-control form-control-sm input-sm" value="{{ $agency -> email }}">
                        </div>

                        <div class="form-group col-sm-12 col-lg-12">
                            <label for="office_number">Office Number</label>
                            @error('office_number')
                            <span class="text-danger mx-1">{{ $message }}</span>
                            @enderror
                            <input type="text" name="office_number" class="form-control form-control-sm input-sm" value="{{ $agency -> office_number }}">
                        </div>

                        <div class="form-group col-sm-12 col-lg-12">
                            <label for="mobile">Mobile</label>
                            @error('mobile')
                            <span class="text-danger mx-1">{{ $message }}</span>
                            @enderror
                            <input type="text" name="mobile" class="form-control form-control-sm input-sm" value="{{ $agency -> mobile }}">
                        </div>

                        <div class="form-group col-sm-12 col-lg-12">
                            <label for="fax">Fax</label>
                            @error('fax')
                            <span class="text-danger mx-1">{{ $message }}</span>
                            @enderror
                            <input type="text" name="fax" class="form-control form-control-sm input-sm" value="{{ $agency -> fax }}">
                        </div>

                        <div class="form-group col-sm-12 col-lg-12">
                            <label>Image</label>
                            @error('image')
                            <span class="text-danger mx-1">{{ $message }}</span>
                            @enderror
                            <input type="file" name="image" class="form-control input-sm image">

                            <img src="{{ $agency -> image_path }}" width="100px"
                                 class="img-thumbnail image-preview mt-1" alt="">
                        </div> {{-- end of form group image --}}

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>
                            Add agency</button>
                    </div>

                </form><!-- end of form -->

            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->



@endsection
