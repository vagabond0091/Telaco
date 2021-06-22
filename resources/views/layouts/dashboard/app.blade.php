 @include('include.header-html')

 <section class="main-container d-flex">
 @include('include.dashboard-html.navbar')


    <div class="container ml-5">
          @include('include.message')
          @yield('content')
    </div>
</section>

@include('include.footer-html')


