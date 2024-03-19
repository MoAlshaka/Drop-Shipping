@extends('layouts.master')


@section('title')
@endsection


@section('css')
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Plugins css -->
    <link href="{{ asset('assets/libs/mohithg-switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/selectize/css/selectize.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Dropzone Plugin Css -->
    <link href="{{ asset('assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <main class="p-12">
        <div class="flex flex-col gap-12">

            <div class="card">
                <div class="p-12 px-6 py-6">
                    <h4 class="card-title mb-4">Create Product</h4>

                    <div class="grid lg:grid-cols-1 gap-12">
                        <div>
                            <form class="flex flex-col gap-12" action="{{ route('products.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <label class="block text-gray-600 mb-2" for="simpleinput">Product Name</label>
                                    <input type="text" id="simpleinput" class="form-input" name="name">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div>
                                    <label class="block text-gray-600 mb-2" for="example-textarea"> Description</label>
                                    <textarea class="form-input" id="example-textarea" rows="5" name="desc"></textarea>
                                </div>
                                @error('desc')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div>
                                    <label class="block text-gray-600 mb-2" for="example-number">Price</label>
                                    <input class="form-input" id="example-number" type="number" name="price">
                                </div>
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror


                                <div class="mb-3">
                                    <label class="mb-2">Select</label>
                                    <select id="selectize-select" class="form-input" name="category_id">
                                        <option selected="selected">Nothing</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                @error('category_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <h4 class="card-title mb-6">Dropzone Image Upload</h4>

                                <div
                                    class="dropzone bg-white dark:bg-gray-800 rounded-md border-2 border-dashed border-gray-200 dark:border-gray-700 min-h-[230px]">
                                    <div class="fallback">
                                        <input name="image" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick w-full">
                                        <div class="mb-3">
                                            <i
                                                class="mdi mdi-cloud-upload-outline text-4xl text-gray-300 dark:text-gray-200"></i>
                                        </div>

                                        <h5 class="text-xl text-gray-600 dark:text-gray-200">Drop files here or click to
                                            upload.</h5>
                                    </div>
                                </div>
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                {{-- <div class="text-center mt-4">
                                    <button type="button" class="btn bg-violet-500 border-violet-500 text-white">Send
                                        Files</button>
                                </div> --}}

                                <div>
                                    <label class="block text-gray-600 mb-2" for="example-number">Stock</label>
                                    <input class="form-input" id="example-number" type="number" name="stock">
                                </div>

                                @error('stock')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="mb-3">
                                    <label class="mb-2">Tag</label>
                                    <input type="text" name="tag" list="tags">
                                    <datalist id="tags">
                                        @isset($tags)
                                            @foreach ($tags as $tag)
                                                @php
                                                    $infos = explode(' ', $tag);
                                                @endphp
                                                @foreach ($infos as $info)
                                                    <option value="{{ $info }}">
                                                        {{ $info }}
                                                    </option>
                                                @endforeach
                                            @endforeach
                                        @endisset
                                    </datalist>
                                </div>
                                @error('tag')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="lg:col-span-2 mt-3">
                                    <button class="btn bg-primary text-white" type="submit">Save </button>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection



@section('js')
    <!-- App Js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Plugin -->
    <script src="{{ asset('assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>
    <script src="{{ asset('assets/libs/mohithg-switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/multiselect/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-mockjax/jquery.mockjax.min.js') }}"></script>
    <script src="{{ asset('assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js') }}"></script>

    <!-- Init js-->
    <script src="{{ asset('assets/js/pages/form-advanced.init.js') }}"></script>
    <!-- Plugin Js -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('assets/libs/@frostui/tailwindcss/frostui.js') }}"></script>

    <!-- App Js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Dropzone js -->
    <script src="{{ asset('assets/libs/dropzone/min/dropzone.min.js') }}"></script>
@endsection
