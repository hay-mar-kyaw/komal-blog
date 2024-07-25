@props(['comments'])
<section class="container">
    <div class="col-md-8  mx-auto">
        <x-card-wrapper>
            <form>
                <div class="mb-3">
                  <textarea name="" id="" placeholder="Say Something!" class="form-control border border-0" cols="10" rows="5"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </x-card-wrapper>
        <h5 class="my-3 text-secondary">Comments ({{$comments->count()}})</h5>
        @foreach ($comments as $comment)
        <x-single-comment :comment="$comment" />
        @endforeach
    </div>
</section>
