@extends('layouts.app')

@section('title')
    contact
@endsection

@section('content')
  <h2 class="mt-2 mb-2">contact page</h2>
 

  <form action="{{ route('contact-form') }}" method="post">
    @csrf

    <div class="form-group">
      <label for="name">Write your name</label>
      <input type="text" name="name" placeholder="your name" id="name" class="form-control">
    </div>

    <div class="form-group">
      <label for="email">Write your email</label>
      <input type="email" name="email" placeholder="your email" id="email" class="form-control">
    </div>

    <div class="form-group">
      <label for="subject">Write subject</label>
      <input type="text" name="subject" placeholder="subject" id="subject" class="form-control">
    </div>

    <div class="form-group">
      <label for="message">Write your message</label>
      <textarea type="text" name="message" placeholder="message" id="message" class="form-control" rows="5" cols="80"></textarea>
    </div>

    <button type="submit" class="btn btn-success mb-2">submit</button>
  </form>
@endsection