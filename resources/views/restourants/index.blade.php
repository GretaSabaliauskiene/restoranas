
@extends('layouts.app')
@section('content')
<div class="card-body">
    <form action="{{ route('restourant.index') }}" method="GET">
        <select name="menu_id" id="" class="form-control">
            <option value="" selected disabled>Pafiltruojam menu:</option>
            @foreach ($menus as $menu)
            <option value="{{ $menu->id }}" 
                @if($menu->id == app('request')->input('menu_id')) 
                    selected="selected" 
                @endif>{{ $menu->title }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Customers</th>
            <th>Employees</th>
            <th>Menu</th>
            <th>Actions</th>
        </tr>
        @foreach ($restourants as $restourant)
        <tr>
            <td>{{ $restourant->title }}</td>
            <td>{{ $restourant->customers }}</td>
            <td>{{ $restourant->employees }}</td>
            <td>{{ $restourant->menu->title }}</td>
            <td>
                <form action={{ route('restourant.destroy', $restourant->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('restourant.edit', $restourant->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('restourant.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
