<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login | Adminto - Tailwind HTML Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        content="Adminto - Tailwind HTML Admin Dashboard Template, A fully featured admin theme which can be used to build CRM, CMS, etc."
        name="description">
    <meta content="coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                <div class="max-w-lg px-4 mx-auto">

                    <div class="card overflow-hidden">
                        <div class="p-9">

                            <div class="text-center mx-auto w-full">
                                <h4 class="text-center text-lg uppercase font-bold mb-8">Sign In</h4>
                            </div>

                            <form action="{{ route('admin.login') }}" method="POST" class="sm:w-80">
                                @csrf
                                <div class="mb-6 space-y-2">
                                    <label for="emailaddress" class="font-medium text-gray-500"> UserName</label>
                                    <input class="form-input placeholder:text-gray-400 text-gray-400" type="text"
                                        id="emailaddress" required="" placeholder="Enter your UserName"
                                        name="username">
                                </div>

                                @error('username')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror


                                <div class="mb-6 space-y-2">
                                    <label for="password" class="font-medium text-gray-500">Password</label>
                                    <input type="password" id="password"
                                        class="form-input placeholder:text-gray-400 text-gray-400"
                                        placeholder="Enter your password" name="password">
                                </div>

                                @error('password')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror

                                <div class="mb-6">
                                    <div class="flex items-center">
                                        <input type="checkbox" class="form-checkbox rounded text-primary"
                                            id="checkbox-signin" checked>
                                        <label class="font-medium text-gray-500 ms-2" for="checkbox-signin">Remember
                                            me</label>
                                    </div>
                                </div>

                                <div class="text-center mb-6">
                                    <button class="btn bg-primary w-full text-white" type="submit"> Log In </button>
                                </div>
                            </form> <!-- form end -->

                        </div>
                    </div> <!-- card end -->

                    <div class="text-center mt-8">
                        <a href="#" class="text-gray-400 dark:text-gray-300 block mb-4"><i
                                class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                        <p class="text-gray-400 dark:text-gray-300">Don't have an account? <a href="#"
                                class="ms-1 text-gray-800 dark:text-gray-100"><b>Sign Up</b></a></p>
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
