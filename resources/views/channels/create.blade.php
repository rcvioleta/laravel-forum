@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Create Channels</div>

    <div class="card-body">
        <form action="{{ route('channel.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="channel">Name:</label>
                <input 
                    type="text" 
                    id="channel" 
                    name="channel" 
                    class="form-control {{ $errors->first('channel') ? 'is-invalid' : '' }}" 
                    placeholder="Channel Name">
                    <div class="invalid-feedback">
                        @if ($errors->has('channel'))
                            {{ $errors->first('channel') }}
                        @endif
                    </div>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-success">Add Channel</button>
            </div>
        </form>
    </div>
</div>
@endsection
