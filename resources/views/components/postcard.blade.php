{{-- <div class="row mb-2">
    <div class="col-md-5">
      <div class="column g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">{{ $post->title}}</h3>
          <div class="mb-1 text-body-secondary">{{ $post->created_at }}</div>
          <p class="card-text mb-auto">{{ $post->body }}</p>
          <a href="/posts/{{ $post->id }}" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
          </a>
        </div>
       
      </div>
    </div> --}}


    <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal">{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <p>{{ $post->created_at }}</p>
        <p><a class="btn btn-secondary" href="/posts/{{ $post->id }}">View details &raquo;</a></p>
      </div>

    {{--   <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">{{ $post->body }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div> --}}