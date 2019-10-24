@extends('menus.menu')

@section('menuContent')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('menuUpdate',$menu->id)}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="user_id">사용자아이디:</label>
          <input type="text" class="form-control" name="user_id" value={{ $menu->user_id }} />
        </div>
        <div class="form-group">
          <label for="title">제목:</label>
          <input type="text" class="form-control" name="title" value={{ $menu->title }} />
        </div>
        <div class="form-group">
          <label for="file">파일:</label>
          <input type="text" class="form-control" name="file" value={{ $menu->file }} />
        </div>
        <div class="form-group">
          <label for="price">가격:</label>
          <input type="text" class="form-control" name="price" value={{ $menu->price }} />
        </div>
        <div class="form-group">
          <label for="content">내용:</label>
          <textarea class="form-control" rows="5" id="content" name="content" required>{{ $menu->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection