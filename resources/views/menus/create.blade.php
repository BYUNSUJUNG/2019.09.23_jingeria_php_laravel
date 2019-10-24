@extends('menus/menu')

@section('menuContent')

<div class="card uper">
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
      <form method="post" action="{{ route('menuStore') }}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="user_id">사용자아이디:</label>
            <input type="text" class="form-control" id="user_id" name="user_id" required>
        </div>
        <div class="form-group">
            <label for="title">제목:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="file">파일:</label>
            <textarea class="form-control" rows="5" id="file" name="file" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">가격:</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="content">내용:</label>
            <textarea class="form-control" rows="5" id="content" name="content" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="write">글등록</button>
        <a href="{{route('menu')}}">글목록</a>
      </form>
  </div>
</div>
@endsection

