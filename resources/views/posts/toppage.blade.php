@extends('layout')


@section('content')
<div class="login-background">
  <div class="login-form">
    <form action="posts/welcome" method="get">
      {{ csrf_field() }}
        <p>Username</p>
        <p class="username"><input type="text" name="username" /></p>
        <p class="submit"><input type="submit" value="Check" /></p>
    </form>
  </div>
</div>
@endsection
