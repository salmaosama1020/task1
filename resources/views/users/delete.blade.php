@extends('layouts.app');
@section('title' , 'create')
@section('content')
<form action="{{  route('users.destroy) }}" method="post">
  @csrf
  <label>Name:</label>
  <input type="text" name="name">
  <label>Email:</label>
  <input type="text" name="email">
  <label>Password:</label>
  <input type="password" name="password">
  <button type="submit">save</button>
</form>
@endsection
