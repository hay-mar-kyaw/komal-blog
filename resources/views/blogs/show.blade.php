<x-layout>
    <x-slot name="content">

   <!-- singloe blog section -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <img
            src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
            class="card-img-top"
            alt="..."
          />
          <h4 class="my-3">{{$blog->title}}</h4>
          <div>
            <div>Author - <a href="/users/{{$blog->author->username}}">{{$blog->author->name}}</a></div>
            <div class="badge bg-primary">
                <a href="/categories/{{$blog->category->slug}}" class="text-white text-decoration-none">{{$blog->category->name}}</a>
            </div>
            <div>{{$blog->created_at->diffForHumans()}}</div>
          </div>
          <p class="lh-md mt-3">
            {{$blog->body}}
          </p>
        </div>
      </div>
    </div>
    <!-- comment section -->
    <x-comments :comments="$blog->comments"/>
    <!-- subscribe new blogs -->
    <x-subscribe-section/>

    <x-blogs_you_may_like :randomBlogs="$randomBlogs"/>

</x-slot>
</x-layout>

