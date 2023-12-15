@extends('layout.main')
 @section('main-section')
     

 <form action="{{url('/')}}/form" method="POST">
  @csrf
  {{-- {{dd($request->all())}} --}}
    <div class="mb-3">
      <label for="name" class="form-label" >User Name</label>
      <input type="text" name="name" class="form-control" placeholder="Ali" value="{{$editdata->name}}">
      <span class="text-danger">
        @error('name')
            {{$message}}
        @enderror
      </span>
      <br>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label" >User Email</label>
      <input type="email" name="email" class="form-control" placeholder="abc@gmail.com" value="{{$editdata->email}}">
      <span class="text-danger">
        @error('email')
            {{$message}}
        @enderror
      </span>
      <br>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">User Password</label>
      <input type="password" name="password" class="form-control"  placeholder="password" value="{{$editdata->password}}">
      <span class="text-danger">
        @error('password')
            {{$message}}
        @enderror
      </span>
      <br>
    </div>
     
    <button type="submit" name="register" value="register" class="btn btn-primary">Submit</button>
  </form>







 @endsection