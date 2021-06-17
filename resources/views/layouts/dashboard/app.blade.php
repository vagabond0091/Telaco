 @include('include.header-html')

 <section class="main-container d-flex">
 @include('include.dashboard-html.navbar')


    <div class="container ml-5">
          @yield('content')
    </div>
</section>

@include('include.footer-html')


