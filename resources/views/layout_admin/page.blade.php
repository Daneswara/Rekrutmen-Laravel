@extends('/layout_admin/master')
@section('main_class')
main
@endSection
@section('main')
    
<main class="@yield('main_class')">
    <div class="bg-homepage1"></div>
    @include('/layout_admin/sidebar')
    @yield('content')
</main>
@endsection
@section('footer')
    @include('/layout_admin/footer')
@endsection