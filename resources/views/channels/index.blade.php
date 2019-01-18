@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Published Channels</div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @if (count($channels) > 0)
                    @foreach ($channels as $channel)
                        <tr>
                            <td>{{ $channel->title }}</td>
                            <td><a href="{{ route('channel.edit', ['channel' => $channel->id]) }}">Edit</a></td>
                            <td>
                                <form action="{{ route('channel.destroy', ['channel' => $channel->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach    
                @else
                    <tr>
                        <td colspan="3" class="text-center">
                            <strong>You must create a channel first.</strong>
                        </td>
                    </tr>    
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
