@props(['blog'])
<x-card-wrapper>
    <form action="/blogs/{{$blog->slug}}/comments" method="post">
        @csrf
        <div class="mb-3">
        <textarea name="body" id="" placeholder="Say Something!" class="form-control border border-0" cols="10" rows="5"></textarea>
        </div>
        <x-error name="body"/>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</x-card-wrapper>
