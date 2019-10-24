@extends('menus.menu')

@section('menuContent')


<div>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Title</td>
          <td>Content</td>
          <td>Price</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($menus as $menu)
        <tr>
            <td>{{$menu->id}}</td>
            <td><a  href="view/{{$menu->id}}">{{$menu->title}}</a></td>
            <td>{{$menu->content}}</td>
            <td>{{$menu->price}}</td>
            <td><a href="{{ route('menuEdit',$menu->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('menuDestroy', $menu->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection