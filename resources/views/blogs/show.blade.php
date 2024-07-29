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
            <div>
                <form action="" method="post">
                    @auth
                        @if (auth()->user()->isSubscribe($blog))
                            <button class="btn btn-danger">UnSubscribe</button>
                        @else
                            <button class="btn btn-warning">Subscribe</button>
                        @endif
                    @endauth
                </form>
            </div>
          </div>
          <p class="lh-md mt-3">
            {{$blog->body}}
          </p>
        </div>
      </div>
    </div>
    <!-- comment section -->
    <section class="container">
        <div class="col-md-8  mx-auto">
            <x-comment-form :blog="$blog"/>
        </div>
    </section>
    @if($blog->comments->count())
    <x-comments :comments="$blog->comments()->latest()->paginate(3)" />
    @endif

    <!-- subscribe new blogs -->
    <x-blogs_you_may_like :randomBlogs="$randomBlogs"/>

    </x-slot>
</x-layout>

