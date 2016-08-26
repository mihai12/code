@extends('layouts.master')

@section('content')
  <section class="row new-post">
    <div class="col-md-6 col-md-offset-3">
      <header><h3>What do you have to say?</h3></header>
      <form action="{{ route('post.create') }}" method="post">
        <div class="form-group">
          <textarea name="body" id="new-post" rows="5" cols="70" placeholder="Your Post"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
        <input type="hidden" value="{{ Session::token()}}" name="_token">
      </form>
  </section>

  <section class="row posts">
    <div class="col-md-6 col-md-offset-3">
      <header><h3>What other people say...</h3></header>
      <article class="post">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>

        <div class="info">
            Posted by Max on 12 Feb 2016
        </div>

        <div class="interaction">
          <a href="#">Like</a> |
          <a href="#">Dislike</a> |
          <a href="#">Edit</a> |
          <a href="#">Delete</a>
        </div>
      </article>

      <article class="post">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>

        <div class="info">
            Posted by Max on 12 Feb 2016
        </div>

        <div class="interaction">
          <a href="#">Like</a> |
          <a href="#">Dislike</a> |
          <a href="#">Edit</a> |
          <a href="#">Delete</a>
        </div>
      </article>
  </section>
@endsection
