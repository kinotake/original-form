<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>オリジナルフォーム</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link rel="stylesheet" href="{{ asset('js/form.js') }}">
</head>
<body>
<div id="message">
</div>
<form>
<hr/>
<label>氏名：</label>
<input type="text" name="name"  id="inputName"  maxlength="100" value="" placeholder="氏名を入力してください">
<br/>
<label>年齢：</label>
<input type="number" name="age" id="inputAge" value="">
<br/>
<label>メールアドレス：</label>
<input type="text" name="mail" id="inputMail" maxlength="100" value="" placeholder="メールアドレス">
<br/>
<input id="checkKiyaku" type="checkbox" name="checkKiyaku"  ><label for="checkKiyaku">利用規約に同意します。</label><br>
<input type="button" id="btnSubmit" value="登録する">
<hr/>
</form>
    <h1>メインメニュー</h1>
  <div class="all_contents">
    <div class="form">
      
    </div>
    <div class="humberger">
      <div class="top">
        <img src="{{ asset('images/top.png') }}"  alt="上バンズの画像" width="350">
      </div>
      <div class="lettuce">
        <img src="{{ asset('images/lettuce.png') }}"  alt="レタスの画像" width="350">
      </div>
      <div class="beef">
        <img src="{{ asset('images/beef.png') }}"  alt="パティの画像" width="380">
      </div>
      <div class="tomato">
        <img src="{{ asset('images/tomato.png') }}"  alt="トマトの画像" width="350">
      </div>
      <div class="under">
        <img src="{{ asset('images/under.png') }}"  alt="下バンズの画像" width="350">
      </div>
    </div>
  </div>

  <script src="js/form.js"></script>
  <script>
    window.onload = function(){
        /*各画面オブジェクト*/
        const btnSubmit = document.getElementById('btnSubmit');
        const inputName = document.getElementById('inputName');
        const inputAge = document.getElementById('inputAge');
        const inputMail = document.getElementById('inputMail');
        const checkKiyaku = document.getElementById('checkKiyaku');
        const reg = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}.[A-Za-z0-9]{1,}$/;
        
        
        btnSubmit.addEventListener('click', function(event) {
            let message = [];
            /*入力値チェック*/
            if(inputName.value ==""){
                message.push("氏名が未入力です。");
            }
            if(inputAge.value==""){
                message.push("年齢が未入力です。");
            }
            if(inputMail.value==""){
                message.push("メールアドレスが未入力です。");
            }else if(!reg.test(inputMail.value)){
                message.push("メールアドレスの形式が不正です。");
            }
            if(checkKiyaku.value){
                message.push("利用規約に同意してください。");
            }
            if(message.length > 0){
                alert(message);
                return;
            }
            alert('入力チェックOK');
        });
    };
</script>
</body>
</html>