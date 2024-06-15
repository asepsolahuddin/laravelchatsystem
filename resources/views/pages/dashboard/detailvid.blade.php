@extends('pages/layout/main')

@section('content-page')
<div class="container mt-5 mb-5">
  <div class="row">
      <div class="col-md-4">
          <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                  <img src="{{ asset('/storage/products/'.$videos->cover_path) }}" class="rounded" style="width: 100%">
              </div>
          </div>
      </div>
      <div class="col-md-8">
          <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                  <h3>{{ $videos->judul }}</h3>
                  <hr/>
                  <p>{{ $videos->kategori }}</p>
                  <code>
                      <p>{!! $videos->deskripsi !!}</p>
                  </code>
                  <hr/>
                  <p>{{ $videos->video_url }}</p>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection

@section('footer-scripts')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection