@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Create a restourant</div>
               <div class="card-body">
                   <form action="{{ route('restourant.store') }}" method="POST"> //kreipiai i kontroleri
                       @csrf
                       <div class="form-group">
                           <label>Title: </label>
                           <input type="text" name="title" class="form-control">
                       </div>
                       <div class="form-group">
                           <label>Customers: </label>
                           <input type="number" name="customers" class="form-control"> 
                       </div>
                       <div class="form-group">
                        <label>Employees: </label>
                        <input type="number" name="employees" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label>Meniu: </label>
                        <select name="menu_id" id="" class="form-control">
                             <option value="" selected disabled>Choose a menu</option>
                             @foreach ($menus as $menu)
                             <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                             @endforeach
                        </select>
                    </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
