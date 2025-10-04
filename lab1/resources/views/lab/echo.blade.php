@extends('layouts.app')

@section('title', 'Echo - Laravel Lab')

@section('content')
    <h1>Echo Endpoint</h1>
    <p>This page is for demonstration. The actual echo endpoint returns JSON.</p>

    <div style="background-color: #fff3cd; padding: 15px; border-radius: 5px; margin-top: 20px;">
        <p><strong>Note:</strong> To get JSON response, access:</p>
        <p><code>{{ route('lab.echo') }}?mode=debug</code></p>
    </div>

    <p style="margin-top: 20px;">
        Without the <code>mode=debug</code> parameter, you will receive a 403 Access Denied response.
    </p>
@endsection
