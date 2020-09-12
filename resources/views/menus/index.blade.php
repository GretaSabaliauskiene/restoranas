
@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Weight</th>
            <th>Meat</th>
            <th>About</th>

        </tr>
        @foreach ($menus as $menu)
        <tr>
            <td>{{ $menu->title }}</td>
            <td>{{ $menu->price }}</td>
            <td>{{ $menu->weight }}</td>
            <td>{{ $menu->meat }}</td>
            <td>{!! $menu->about !!}</td>
            <td>
                <form action={{ route('menu.destroy', $menu->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('menu.edit', $menu->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('menu.create') }}" class="btn btn-success">Pridėti</a>   ////kreipasi kontroleri
    </div>
</div>
@endsection
