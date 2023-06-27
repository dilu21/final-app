@extends('admin.layout')

@section('content')
<div class="col-lg-12">
<div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                  <a href="{{route('category.create')}}" 
                  class="btn btn-info m-0">Create</i></a>
                  </h4>
                
                  <div class="table-responsive p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> SN</th>
                          <th>Title </th>
                          <th> Author</th>
                          <th> Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($category as $post)
                        <tr>
                          <td>
                          {{ $loop->index + 1 }}
                          </td>

                          <td> <h6>{{ $post->title}}</h6></td>
                          <td>
                          <a href="{{route('category.show', $post->id)}}" 
                            class="btn btn-warning"><i>View</i></a>
</td>
                          <td>
                          <a href="{{route('category.edit', $post->id)}}" 
                           class="btn btn-success"></i>Edit</a>
                          </td>
                        
                          <td>
                          <form class="delete" action="{{route('category.destroy', $post->id)}}" method="post">
                           @csrf
                           <input type="hidden" name="_method" value="DELETE">
                           <button onclick="return confirm('Are you sure?')" type="submit"
                           class="btn btn-danger "><i class="fa fa-trash booticon"></i>Delete</button>
         
                          </form>
                          </td>
                      
                        </tr>
                       
                        @endforeach
                         
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
              @endsection




              
                            