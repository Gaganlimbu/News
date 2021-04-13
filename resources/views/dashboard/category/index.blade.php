@extends('dashboard.layout')

@section('content')
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">News Category</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Actions</th>
                      </thead>
                      <tbody>
                      @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->details }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>
                                    
                                    <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                    
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ route('category.create') }}">Create New Category</a>
                  </div>
                </div>
              </div>
            </div>         
@endsection