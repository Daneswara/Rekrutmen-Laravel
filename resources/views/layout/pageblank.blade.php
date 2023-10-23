@extends('/layout/master_blank')
@section('main_class')
main
@endSection
@section('main')
    
<main class="@yield('main_class')">
    <div class="bg-homepage1"></div>
    @yield('content')
</main>
@endsection