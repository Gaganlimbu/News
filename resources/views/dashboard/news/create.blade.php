@extends('dashboard.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New News</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('news.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('news.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>News_Title:</strong>
                <input type="text" name="news_title" class="form-control" placeholder="News_Title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Author_Name:</strong>
                <textarea class="form-control" style="height:150px" name="author_name" placeholder="Author Name"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Description:</strong>
                    <div class="card-body">
                            <div class="form-group">
                                <textarea class="form-control" name="description" id="summernote"></textarea>
                                    <script>
                                        $(document).ready(function() {
                                            $('#summernote').summernote({
                                                height: 300
                                                });
                                                    
                                        });
                                    </script>
                            </div>                                
                    </div>
                </div>
            </div>
        </div>    

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <input type="submit" class="btn btn-primary" value="Create">
        </div>
    </div>
</form>
@endsection
