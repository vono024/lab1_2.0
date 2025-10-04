@extends('layouts.app')

@section('title', 'About - Laravel Lab')

@section('content')
    <h1>About Page</h1>
    <p>This page demonstrates the QueryModeMiddleware functionality.</p>

    @if($mode)
        <div style="background-color: #d4edda; padding: 15px; border-radius: 5px; margin-top: 20px;">
            <h3>Debug Mode Active</h3>
            <p><strong>Mode:</strong> {{ $mode }}</p>
            <p>The middleware successfully captured the 'mode' query parameter!</p>
        </div>
    @else
        <div style="background-color: #f8d7da; padding: 15px; border-radius: 5px; margin-top: 20px;">
            <p>No mode parameter detected. Try adding <code>?mode=debug</code> to the URL.</p>
        </div>
    @endif

    <p style="margin-top: 20px;">
        <a href="{{ route('lab.about') }}?mode=debug">View with debug mode</a>
    </p>
@endsection
