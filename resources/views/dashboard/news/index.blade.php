@extends('dashboard.layout')
@section('content')

<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">News</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>News_Title</th>
                        <th>Author_Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                      </thead>
                      <tbody>
                      @foreach ($news as $new)
                            <tr>
                                <td>{{ $new->id }}</td>
                                <td>{{ $new->news_title }}</td>
                                <td>{{ $new->author_name }}</td>
                                <td>{{ $new->description }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('news.edit',$new->id)}}">Edit</a>
                                    
                                    <form action="{{route('news.destroy',$new->id)}}" method="POST">
                    
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{route('news.create')}}">Create News</a>
                  </div>
                </div>
              </div>
            </div> 

@endsection