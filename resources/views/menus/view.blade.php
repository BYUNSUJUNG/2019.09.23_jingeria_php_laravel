@extends('menus.menu')

@section('menuContent')

<section class="page-section cta">
    <div class="container">
    <div class="row">
        <div class="col-xl-9 mx-auto">
			<div class="cta-inner text-center rounded">

				<table class="table">

          <tr> 
						<th>사용자아이디</th>
						<td>{{$menu->user_id}}</td>
					</tr>	
					<tr> 
						<th>제목</th>
						<td>{{$menu->title}}</td>
					</tr>	
					<tr> 
						<th>작성일시</th>
						<td>{{$menu->created_at}}</td>				
					</tr>	
          <tr>
            <th>파일</th>
            <td>
              <img height="350" width="350" src="/img/{{$menu->file}}"/>
            </td>
          </tr>
          <tr> 
						<th>가격</th>
						<td>{{$menu->price}}</td>				
					</tr>	
					<tr> 
						<th>내용</th>
						<td>
              {!! $menu->content !!}
            </td>				
					</tr>				
				</table>
			
			</div>
			<a href="{{route('menu')}}">목록보기</a>
			<a href="{{ route('menuEdit',$menu->id)}}" class="btn btn-primary">Edit</a>
      <form action="{{ route('menuDestroy', $menu->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
      </form>
      </div>
    </div>
    </div>
</section>

@endsection