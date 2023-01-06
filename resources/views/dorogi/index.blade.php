@extends('layouts.dorogi')


@section('content')

@foreach($dorogis as $dorogi)

<tbody>
    <tr>
        <td>{{ $dorogi->title }}</td>
        <td>{{ $dorogi->content }}</td>
        <td>{{ $dorogi->price }}</td>
        <td><a class="btn btn-dark" href="{{ route('dorogi.show', $dorogi->id)}}">show</a></td>
    </tr>
</tbody>



@endforeach
<a class="btn btn-dark" href="{{ route('dorogi.create')}}">add</a>

@endsection

