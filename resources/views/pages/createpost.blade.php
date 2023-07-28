@extends('layout.default')
@section('title')
    Create Post
@endsection

@section('content')
        <form action="{{ url('createpost') }}" method="POST">
                <div class="mb-3">
                        <label class="form-label" for="">Title</label>
                        <input class="form-control" type="text" name="title" placeholder="enter title" required>
                    
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Body</label>
                    <input class="form-control" type="text" name="body" placeholder="enter title" required>
                
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">
                        Save post
                    </button>
                </div>
        </form>


    @if ($errors->any())
        <div class="mt-5 alert alert-danger">
                <ul>
                        @foreach ($errors as $error)
                            <li>{{  }}</li>
                        @endforeach

                </ul>
        </div>
        
    @endif
@endsection
