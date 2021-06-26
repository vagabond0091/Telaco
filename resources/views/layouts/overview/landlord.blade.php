@include('include.header-html')

@include('include.navbar')

   <div class="container ml-5 overview">
         @include('include.message')
         @yield('content')
   </div>


  
@include('include.footer-html')



