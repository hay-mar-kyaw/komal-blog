@props(['blogs','categories','currentCategory']);
<section class="container text-center" id="blogs">
    <h1 class="display-5 fw-bold mb-4">Blogs</h1>
    <div class="">
        <x-category-dropdown/>
      {{-- <select name="" id="" class="p-1 rounded-pill mx-3">
        <option value="">Filter by Tag</option>
      </select> --}}
    </div>
    <form action="" class="my-3">
      <div class="input-group mb-3">
        @if(request('category'))
        <input
          type="hidden"
          class="form-control"
          name="category"
          value="{{request('category')}}"
        />
        @endif
        @if(request('username'))
        <input
          type="hidden"
          class="form-control"
          name="username"
          value="{{request('username')}}"
        />
        @endif
        <input
          type="text"
          autocomplete="false"
          class="form-control"
          placeholder="Search Blogs..."
          name="search"
          value="{{request('search')}}"
        />
        <button
          class="input-group-text bg-primary text-light"
          id="basic-addon2"
          type="submit"
        >
          Search
        </button>
      </div>
    </form>
    <div class="row">
       @forelse ($blogs as $blog)
        <div class="col-md-4 mb-4">
            <x-blog-card :blog="$blog"/>
        </div>

       @empty
       <div class=" mb-4">
        <span class="text-center">No Blog found</span>
      </div>
      @endforelse
      {{$blogs->links()}}
    </div>
  </section>
