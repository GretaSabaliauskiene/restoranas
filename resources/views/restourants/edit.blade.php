@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change restourant information</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('restourant.update', $restourant->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label>Title: </label>
                            <input type="text" name="title" class="form-control" value="{{ $restourant->title }}">
                        </div>
                        <div class="form-group">
                            <label>Customers: </label>
                            <input type="number" name="customers" class="form-control" value="{{ $restourant->customers }}"> 
                        </div>
                        <div class="form-group">
                            <label>Employees: </label>
                            <input type="number" name="employees" class="form-control" value="{{ $restourant->employees }}"> 
                        </div>
                        
                        <div class="form-group">
                            <label>Menu </label>
                            <select name="menu_id" id="" class="form-control">
                                 <option value="" selected disabled>Choose a menu</option>
                                 @foreach ($menus as $menu)
                                <option value="{{ $menu->id }}" @if($menu->id == $restourant->menu_id) selected="selected" @endif>{{ $menu->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Pakeisti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
