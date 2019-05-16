@extends('layouts.master')

@section('content')
  
 <body>
  <br />
  <div class="container box">
      
   <h3 align="center">Obtetricia Logueo Simple</h3><br />

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{$message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

   <form method="post" action="{{ url('/checklogin') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Ingrese Email</label>
     <input type="email" name="email" class="form-control" />
    </div>
    <div class="form-group">
     <label>Ingrese Contaseña</label>
     <input type="password" name="password" class="form-control" />
    </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-primary" value="Login" />
    </div>
   </form>
  </div>

  <style type="text/css">
    .box{
     width:600px;
     margin:0 auto;
     border:1px solid #ccc;
    }
   </style>
@endsection