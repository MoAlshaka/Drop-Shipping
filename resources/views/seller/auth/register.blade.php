<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register | Adminto - Tailwind HTML Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        content="Adminto - Tailwind HTML Admin Dashboard Template, A fully featured admin theme which can be used to build CRM, CMS, etc."
        name="description">
    <meta content="coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body>

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="relative bg-cover bg-center bg-[url('../images/bg-auth3.png')]">
        <div class="absolute inset-0 dark:bg-black/80"></div>
        <div class="relative flex flex-col items-center justify-start py-20 h-screen">

            <!-- Logo -->
            <div class="pb-10">
                <a href="index.html" class="flex justify-center">
                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo" class="h-5 block dark:hidden">
                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="logo" class="h-5 hidden dark:block">
                </a>
                <p class="text-gray-400 mt-3 dark:text-gray-300">Responsive Admin Dashboard</p>
            </div> <!-- logo end -->

            <div class="flex justify-center">
                <div class="w-full min-w-full max-w-full px-4 mx-auto">

                    <div class="card overflow-hidden">
                        <div class="p-9">

                            <div class="text-center mx-auto w-3/4">
                                <h4 class="text-center text-lg uppercase font-bold mb-6">Register</h4>
                            </div>

                            <form action="{{ route('seller.register') }}" class="sm:w-80 w-full" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-6 space-y-2">
                                    <label for="fullname" class="font-medium text-gray-500">Full Name</label>
                                    <input class="form-input placeholder:text-gray-400 text-gray-400" type="text"
                                        id="fullname" required="" placeholder="Enter your Name" name="name">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="mb-6 space-y-2">
                                    <label for="emailaddress" class="font-medium text-gray-500">Email address</label>
                                    <input class="form-input placeholder:text-gray-400 text-gray-400" type="email"
                                        id="emailaddress" required="" placeholder="Enter your email" name="email">
                                </div>

                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="mb-6 space-y-2">
                                    <label for="password" class="font-medium text-gray-500">Password</label>
                                    <input type="password" id="password"
                                        class="form-input placeholder:text-gray-400 text-gray-400"
                                        placeholder="Enter your password" name="password">
                                </div>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="mb-6 space-y-2">
                                    <label for="phone" class="font-medium text-gray-500">Phone</label>
                                    <input type="text" id="phone"
                                        class="form-input placeholder:text-gray-400 text-gray-400"
                                        placeholder="Enter your Phone" name="phone">
                                </div>

                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="mb-6 space-y-2">
                                    <label for="address" class="font-medium text-gray-500">address</label>
                                    <input type="text" id="address"
                                        class="form-input placeholder:text-gray-400 text-gray-400"
                                        placeholder="Enter your address" name="address">
                                </div>

                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="mb-6 space-y-2">
                                    <label for="image" class="font-medium text-gray-500">image</label>
                                    <input type="file" id="image"
                                        class="form-input placeholder:text-gray-400 text-gray-400"
                                        placeholder="Enter your image" name="image">
                                </div>

                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="text-center mb-4">
                                    <button class="btn w-full rounded bg-primary text-white" type="submit"> Sign Up
                                    </button>
                                </div>
                            </form> <!-- form end -->

                        </div>
                    </div> <!-- card end -->

                    <div class="text-center mt-8">
                        <p class="text-gray-400 dark:text-gray-300"> Already have account? <a href="#"
                                class="ms-1 text-gray-800 dark:text-gray-100"><b>Sign In</b></a></p>
                    </div>

                </div>
            </div> <!-- flex end -->

        </div> <!-- flex end -->
    </div> <!-- bg end -->


    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</body>

</html>
