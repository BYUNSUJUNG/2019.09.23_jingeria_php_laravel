@extends('menu')

@section('menuContent')
<!-- Navigation -->


    <form method="post" action="menu_write" novalidate>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
        <label for="title">제목:</label>
        <input type="text" class="form-control" id="title" name="title"
        required>
        </div>
        <div class="form-group">
        <label for="writer">메뉴:</label>
        <input type="text" class="form-control" id="menu_board" name="menu_board"
        required>
        </div>    
        <div class="form-group">
        <label for="writer">작성자:</label>
        <input type="text" class="form-control" id="writer" name="writer"
        required>
        </div>    
        <div class="form-group"> 
        <label>업로드 파일 선택:</label>
        <input type="file" name="file">
        </div>
        <div class="form-group">
        <label for="writer">가격:</label>
        <input type="text" class="form-control" id="price" name="price"
        required>
        </div>
        <div class="form-group">
        <label for="content">내용:</label>
        <textarea class="form-control" rows="5" id="content" name="content"
        required></textarea>
        </div>

        <script type="text/javascript">
        var oEditors = [];

        // 추가 글꼴 목록
        //var aAdditionalFontSet = [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]];

        nhn.husky.EZCreator.createInIFrame({
            oAppRef: oEditors,
            elPlaceHolder: "content",
            sSkinURI: "/SmartEditor/SmartEditor2Skin.html",	
            fOnAppLoad : function(){
            //예제 코드
            //oEditors.getById["ir1"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
            },
            fCreator: "createSEditor2"
        });

        function submitContents(elClickedObj) {
            oEditors.getById["content"].exec("UPDATE_CONTENTS_FIELD", []);	// 에디터의 내용이 textarea에 적용됩니다.
            
            // 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("ir1").value를 이용해서 처리하면 됩니다.
            
            try {
            elClickedObj.form.submit();
            } catch(e) {}
        }
        </script>

        <button type="submit" class="btn btn-primary" name="write" onclick="submitContents()">글등록</button>
        <a href="{{route('menuBurger')}}">글목록</a>
    </form>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

@endsection
