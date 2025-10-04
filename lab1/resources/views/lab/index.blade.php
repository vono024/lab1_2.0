@extends('layouts.app')

@section('title', 'Home - Laravel Lab')

@section('content')
    <h1>Welcome to Laravel Lab 1</h1>
    <p>This is the home page of our Laravel laboratory work.</p>
    <p>Explore the navigation menu to see different pages.</p>

    <h2>Available Routes:</h2>
    <ul>
        <li><strong>/</strong> - Home page (current)</li>
        <li><strong>/about?mode=debug</strong> - About page with debug mode</li>
        <li><strong>/status</strong> - Application status</li>
        <li><strong>/echo?mode=debug</strong> - Echo endpoint (JSON)</li>
    </ul>
@endsection
