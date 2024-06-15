<div class="col-lg-8 entries">
  <!-- batas awal artikel-->
  <div class="row mb-4">
    <div class="col-md-8">
        <form action="{{ route('search') }}" method="GET" class="mt-3">
            <div class="input-group">
                <input type="text" name="query" class="form-control" placeholder="Search for articles" required>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
@if($newss->isEmpty())
              <h1">No articles found.</h1>
            @else
                @foreach($newss as $news)
                <article class="entry">
                  <div class="entry-img">
                    <img
                      src="{{ asset('/storage/products/' . $news->cover_path) }}"
                      alt=""
                      class="img-fluid"
                    />
                  </div>
  
                  <h2 class="entry-title">
                    <a href="blog-single.html">
                    {{ $news->judul }}</a
                    >
                  </h2>
  
                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center">
                        <i>Kategori :</i>
                        <a href="blog-single.html">{{ $news->kategori }}</a>
                      </li>
                    </ul>
                  </div>
  
                  <div class="entry-content">
                    <p>
                      Similique neque nam consequuntur ad non maxime aliquam quas.
                      Quibusdam animi praesentium. Aliquam et laboriosam eius aut
                      nostrum quidem aliquid dicta. Et eveniet enim. Qui velit est
                      ea dolorem doloremque deleniti aperiam unde soluta. Est cum
                      et quod quos aut ut et sit sunt. Voluptate porro consequatur
                      assumenda perferendis dolore.
                    </p>
                    <div class="read-more">
                      <a href="blog-single.html">Read More</a>
                    </div>
                  </div>
                </article>
                @endforeach
            @endif
              <!-- End blog entry -->

              <div class="blog-pagination">
                <ul class="justify-content-center">
                  <li>{{ $newss->links() }}</li>
                </ul>
              </div>
            