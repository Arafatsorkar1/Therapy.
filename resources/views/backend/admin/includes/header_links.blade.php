<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ get_setting('website_name') ?? config('app.name') }} | @yield('title','#')</title>
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{ get_setting('website_icon') ? asset(get_setting('website_icon')) : asset('/assets/backend/images/favicon.png') }}">
<!-- Pignose Calender -->
<link href="{{ asset('/') }}assets/backend/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
<!-- Chartist -->
<link rel="stylesheet" href="{{ asset('/') }}assets/backend/plugins/chartist/css/chartist.min.css">
<link rel="stylesheet" href="{{ asset('/') }}assets/backend/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
<!-- Custom Stylesheet -->
<link href="{{ asset('/') }}assets/backend/css/style.css" rel="stylesheet">
<link href="{{ asset('/') }}assets/backend/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/backend/others/texteditor/editor.css')}}">
<style>
    .fit{
        width: 55px;
        height: 55px;
        overflow: hidden;
        border-radius: 100px;
    }
    .fit-image{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
</style>
@yield('style')
