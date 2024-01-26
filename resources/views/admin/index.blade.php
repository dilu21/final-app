@extends('dashboard.layout')

@section('content')

<div class="main-panel">
     <div class="content-wrapper">

<div class="row ">    
<div class="col-lg-12">
<div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                  <a href="{{route('admin.create')}}" 
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
                          <th> Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($admin as $post)
                        <tr>
                          <td>
                          {{ $loop->index + 1 }}
                          </td>
                          <td>
                          <a href="{{route('admin.show', $post->id)}}" 
                            class="btn">
                           <i>  {{ $post->title}}</i></a>
                          </td>
                          <td>
                          {{ $post->author}}
                          </td>
                          <td>
                          <a href="{{route('admin.edit', $post->id)}}" 
                           class="btn btn-success"></i>Edit</a>
                          </td>
                        
                          <td>
                          <form class="delete" action="{{route('admin.destroy', $post->id)}}" method="post">
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
</div>

              </div>
</div>

              @endsection




              
                            