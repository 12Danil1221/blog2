@extends('layouts.dorogi')


@section('content')


<tbody>
    <tr>
        <td>{{ $dorogi->title }}</td>
        <td>{{ $dorogi->content }}</td>
        <td>{{ $dorogi->price }}</td>
    </tr>
</tbody>



<a class="btn btn-dark" href="{{ route('dorogi.index')}}">back</a>

@endsection

