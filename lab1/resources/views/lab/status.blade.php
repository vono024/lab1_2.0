@extends('layouts.app')

@section('title', 'Status - Laravel Lab')

@section('content')
    <h1>Application Status</h1>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr style="background-color: #f8f9fa;">
            <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Parameter</th>
            <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Value</th>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><strong>Application Name</strong></td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $app_name }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><strong>Environment</strong></td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $app_env }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><strong>PHP Version</strong></td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $php_version }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><strong>Laravel Version</strong></td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ app()->version() }}</td>
        </tr>
    </table>
@endsection
