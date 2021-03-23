<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/front/favicon.ico') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/admin/css/app_' .LaravelLocalization::getCurrentLocaleDirection(). '.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    @include('admin.includes.header')

    @include('admin.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    @yield('content-header')
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>

    </div>
    <!-- /.content-wrapper -->

    @include('admin.includes.footer')

</div>
<!-- ./wrapper -->

<!-- admin LTE -->
<script src="{{ asset('/public/admin/js/app.js') }}"></script>
<script src="{{ asset('/public/admin/plugins/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {

        $('.show_confirm').click(function(e) {
            if(!confirm('Are you sure you want to delete this?')) {
                e.preventDefault();
            }
        });

        CKEDITOR.config.language = "{{ app() -> getLocale() }}" // end ck editor

        // image preview
        $(".image").change(function () {

            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]); // convert to base64 string
            }
        }); // end of image preview

    }); // end of ready
</script>

</body>
</html>
