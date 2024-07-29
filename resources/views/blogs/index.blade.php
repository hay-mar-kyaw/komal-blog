<x-layout>
    <x-slot name="content">

      @if(session('success'))
         <div class="alert alert-success text-center">{{session('success')}}</div>
      @endif
      <!-- hero section -->
      <x-hero-section/>

      <!-- blogs section -->
      <x-blog-section
      :blogs="$blogs"
      />
    </x-slot>

</x-layout>


