@extends('pages/layout/main')

@section('content-page')
<div class="container mt-5">
  <div class="row">
      <div class="col-md-12">
          <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                  <a href="{{ route('artikels.create') }}" class="btn btn-md btn-success mb-3">ADD ARTIKEL</a>
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th scope="col">User ID</th>
                              <th scope="col">Judul</th>
                              <th scope="col">Kategori</th>
                              <th scope="col" style="width: 30%">ACTIONS</th>
                          </tr>
                      </thead>
                      <tbody>
                          @forelse ($artikels as $artikel)
                              <tr>
                                  <td>{{ $artikel->user_id }}</td>
                                  <td>{{ $artikel->judul }}</td>
                                  <td>{{ $artikel->kategori }}</td>
                                  <td class="text-center">
                                      <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('videos.destroy', $artikel->id) }}" method="POST">
                                          <a href="{{ route('artikels.show', $artikel->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                          <a href="{{ route('artikels.edit', $artikel->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                      </form>
                                  </td>
                              </tr>
                          @empty
                              <div class="alert alert-danger">
                                  Data Products belum Tersedia.
                              </div>
                          @endforelse
                      </tbody>
                  </table>
                  {{ $artikels->links() }}
              </div>
          </div>
      </div>
  </div>
</div>
@endsection

@section('footer-scripts')
<script src="{{ asset('js/app.js') }}"></script>
@endsection