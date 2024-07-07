<x-layout>
    <x-slot name="content">

      <!-- hero section -->
      <x-hero-section/>

      <!-- blogs section -->
      <x-blog-section
      :blogs="$blogs"
      :categories="$categories"
      :currentCategory="$currentCategory ?? null"/>

      <!-- subscribe new blogs -->
      <x-subscribe-section/>


    </x-slot>

</x-layout>


