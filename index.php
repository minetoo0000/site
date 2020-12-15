<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--<link rel="stylesheet" href="https://www.multiplayerpiano.com/screen.css"/>-->
    <link rel="shortcut icon" type="image/x-icon" href="https://icon-icons.com/downloadimage.php?id=69217&root=898/PNG/32/&file=piano_tiles_icon-icons.com_69217.png"/>
    <link rel="icon" type="image/x-icon" href="https://icon-icons.com/downloadimage.php?id=69217&root=898/PNG/32/&file=piano_tiles_icon-icons.com_69217.png"/>
  
    <title>[Piano] loading...</title>
    
    
    <script>
        const _title = "[Piano]";
        const join_url = "/?succeed";  // 완료 문자열
        const join_url_length = join_url.length;  // 완료 문자열의 길이
        var url = document.location.href;  // 전체 URL
        var room_n = "none";  // 방 이름
        var link = "/#" + room_n + join_url;  // 방 이름 + 완료 문자열
        const link_update_dr = 8000;  // 완료 주소 업데이트 딜레이
        
        if (url.includes("/#")) {
            room_n = url.split("/#")[1];
            if (room_n.includes(join_url)) {
                room_n = room_n.substring(0, room_n.length - join_url_length);
            }
        } else {
            room_n = "lobby";
        }
        link = "/#" + room_n + join_url;
        
        history.pushState(null, null, "/?please_wait.......");
        
        
        
        function room_set(room_name) {  // 피아노 사이트 내의 방에 들어가는 창
            var $multiple = document.getElementById("multiple");
            $multiple.outerHTML = "<iframe id=\"multiple\" src=\"https://multiplayerpiano.com/"+room_name+"\" title=\"www.multiplayerpiano.com\" height=500 width=1000 style=\"overflow: auto; border: 5px solid #959ADF;\"></iframe>";
            
        }
        
        /*function () {
            var $
        }*/
    </script>
    
    <style>
        .reroad_btt {
            float: left;
            background: #1EA0A5;
        }
    </style>
    
</head>

<body style="background-color: #CFDDE1;">
    <center>
        <h1 style="color: #FFFFFF;">Multi Player Piano</h1>
        
        <p id="multiple"></p> <!--멀티플레이어피아노 사이트 창-->
        
        
    </center>
    <script>
        room_set(room_n); // iframe후 방 생성 또는 입장
    </script>





<button class="dialog-test-btn" title="도움말 [버튼] 출처:명월 일지">도움말</button>
<button class="reroad_btt" onclick="history.go()" title="새로고침 [버튼]\n페이지가 새로고침되지 않을 때 사용하세요.">페이지 새로고침</button>
<!-- jquery CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- jquery UI CDN -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- dialog 라이브러리 -->
<script type="text/javascript" src="https://nowonbun.github.io/Loader/dialog.js"></script>
<script>
$(function(){
    // 옵션을 설정한다.
    dialog.set({
        // 다이얼로그가 show될 때의 액션 설정
        show: {
            effect: "blind",
            duration: 1000
        },
        // 다이얼로그가 hide될 때의 액션 설정
        hide: {
            effect: "explode",
            duration: 1000
        },
        // 타이틀 설정
        title: "도움말",
        // 모달 여부
        modal: false,
        // 버튼 설정
        buttons: {
            닫기: function() {
                dialog.close();
            }/*,
            Cancel: function() {
                dialog.close();
            },
            Custom: function(){
                dialog.close();
            }*/
        }
    });
    $(".dialog-test-btn").on("click", function(){
        // 다이얼로그를 연다.
        dialog.open("<h5>URL 뒤에 \"#\"을 넣고 방 제목을 정하시면 해당하는 방에 입장/생성이 가능합니다.<b><h6>예) XXX.000webhost.com/#방제목</h6></h5>");
    });
});
</script>
<!--다이얼로그.js 출처: https://nowonbun.tistory.com/615 [명월 일지]-->


<!-- 아래 코드는 본 사이트 제작사이트 팝업을 방지를 위한 버그 코드입니다. 물론 소스코드로 본다면 아래 코드에 팝업코드도 주석에 섞여있습니다. 어케어케하다 직접 알아낸 버그... -->
<!--</body>-->


<script> // 웹 주소 방제/성공 으로 변경
    var _timer = setInterval(function(){history.pushState(null, null, link); clearInterval(_timer);}, link_update_dr);
    var de_room_n = decodeURI(room_n);
    document.title = de_room_n + ' ' + _title;
</script>


</body>
</html>
