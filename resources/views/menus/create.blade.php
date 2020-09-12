@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Create a menu:</div>
               <div class="card-body">
                   <form action="{{ route('menu.store') }}" method="POST"> //kreipiai i kontroleri
                       @csrf
                       <div class="form-group">
                           <label>Title: </label>
                           <input type="text" name="title" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Price: </label>
                           <input type="number" name="price" class="form-control"> 
                       </div>
                       <div class="form-group">
                        <label>weight: </label>
                        <input type="number" name="weight" class="form-control"> 
                    </div>
                       <div class="form-group">
                           <label>About: </label>
                           <textarea id="mce" name="about" rows=10 cols=100 class="form-control"></textarea>
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
