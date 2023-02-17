@if(session()->has('user'))
    {{View::make('title')}}
    {{View::make('index')}}
    {{View::make('footer')}}
@else
    @yield('login')
@endif