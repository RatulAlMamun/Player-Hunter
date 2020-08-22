@extends('admin.dashboard.layouts.playerdashboardlayout')
@section('content')
  <div class="row mt-3">
    <div class="col-9">
      <h1 class="display-2">My Posts</h1>
    </div>
    <div class="col-3">
      <button class="btn btn-info btn-lg" style="font-size: 20px" data-toggle="modal" data-target="#addpost">
        <i class="mdi mdi-plus-circle"></i>
        Create Post
      </button>
    </div>
  </div>
  @if(session('addpost'))
    <div class="row mt-3 p-2 bg-success">
      <h2>{{ session('addpost') }}</h2>
    </div>
  @endif
  @if(session('postedit'))
    <div class="row mt-3 p-2 bg-success">
      <h2>{{ session('postedit') }}</h2>
    </div>
  @endif
  @if(session('rpost'))
    <div class="row mt-3 p-2 bg-danger">
      <h2>{{ session('rpost') }}</h2>
    </div>
  @endif
  <div class="row mt-3">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" class="bg-dark text-light">ID</th>
          <th scope="col" class="bg-dark text-light">Blog Title</th>
          <th scope="col" class="bg-dark text-light">Created Time</th>
          <th scope="col" class="bg-dark text-light">Blog Image</th>
          <th scope="col" class="bg-dark text-light">Action</th>
        </tr>
      </thead>
      <tbody>
        @if(!empty($posts))
          @foreach($posts as $post)
            <tr>
              <th class="align-middle bg-secondary">{{ $post->id }}</th>
              <td>{{ $post->blog_title }}</td>
              <td class="bg-secondary">{{ $post->created_at }}</td>
              <td>
                <img src="{{ asset('public/uploads/'.$post->blog_image) }}" class="img-fluid" width="100">
              </td>
              <td class="bg-secondary">
                <button class="btn btn-primary" data-toggle="modal" data-target="#editpost{{ $post->id }}">Edit</button>
                <button class="btn btn-danger" data-toggle="modal" data-target="#deletepost{{ $post->id }}">Delete</button>
              </td>
            </tr>

            <!-- Edit Blog Post Modal -->
            <div class="modal fade" id="editpost{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Your Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="{{ route('editpost.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="blogtitle">Blog Title</label>
                        <input type="text" name="blog_title" class="form-control" id="blogtitle" placeholder="Enter your title here" value="{{ $post->blog_title }}">
                      </div>
                      <div class="form-group">
                        <label for="comment">Blog Details</label>
                        <textarea name="blog_details" class="form-control" rows="7" id="comment">{{ $post->blog_details }}</textarea>
                      </div> 
                      <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="blog_image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                      </div>
                      <input type="hidden" name="player_id" value="{{ $post->player_id }}">
                      <input type="hidden" name="post_id" value="{{ $post->id }}">
                      <input type="hidden" name="oldimage" value="{{ $post->blog_image }}">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-success">Save Post</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>


            <!-- Delete Blog Post Modal -->
            <div class="modal fade" id="deletepost{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Your Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h3>Are Sure to Delete This Post?</h3>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <a href="{{ route('postdelete', ['id' => $post->id]) }}" class="btn btn-success">Delete Post</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @endif
      </tbody>
    </table>
  </div>


  <!-- Create Post Modal -->
  <div class="modal fade" id="addpost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Your Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('createpost.submit') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="form-group">
              <label for="blogtitle">Blog Title</label>
              <input type="text" name="blog_title" class="form-control" id="blogtitle" placeholder="Enter your title here">
            </div>
            <div class="form-group">
              <label for="comment">Blog Details</label>
              <textarea name="blog_details" class="form-control" rows="7" id="comment"></textarea>
            </div> 
            <div class="form-group">
              <div class="custom-file">
                  <input type="file" name="blog_image" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <input type="hidden" name="player_id" value="{{ $player->id }}">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success">Save Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection