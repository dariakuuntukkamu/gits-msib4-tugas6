@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{ url('/home') }}">
    <button class="btn btn-primary mt-4" type="button"><i class="fa fa-arrow-left " aria-hidden="true"></i></button>
</a>
<a href="{{ url('/detail/productadd') }}">
    <button class="btn btn-success mt-4" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
</a>
@foreach ($categories as $item)
<tr>
    <th>
        <center>{{ $no++ }}.</center>
    </th>
    <td>{{ $item->name }}</td>
    <td>
        <center>
            <a href="/category/{{ $item->id }}/edit" class="btn btn-xs btn-warning"><i
                    class="fas fa-edit"></i></a>
            <a href="/category/{{ $item->id }}/delete" class="btn btn-xs btn-danger"
                onclick="return confirm('Are u Sure?');"><i class="fas fa-trash"></i></a>
        </center>
    </td>
    </td>
</tr>
@endforeach
</tbody>
@endsection