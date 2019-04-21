@extends('layout')

@section('content')
<div class="login-background">
  <div class="login-form">
    <p class="welcome-message">
      <?php
      if(!empty($_REQUEST['username'])){
            $createpost=" <p class=\"welcome-btn\">
                          <a href=\"create\">投稿を作成する</a>
                          </p>";
            echo 'ようこそ　', $_REQUEST['username'], '　さん';
            echo $createpost;
      }else{
            $backtotoppage="<p class=\"welcome-btn\">
                            <a href=\"/\">戻る</a>
                            </p>";
            echo 'ユーザ名を入力してください。';
            echo $backtotoppage;
      }
      ?>
    </p>



  </div>
</div>
@endsection
