@extends('layouts.app')

@section('title', 'Profile Pengguna')

@section('content')
            <div class="card">
                <div class="card-header">
                    <h1>Profile Pengguna</h1>
                </div>
                <div class="card-body">
                    <img src="{{ asset ($profile['profile_picture']) }}" alt="Profile Picture" width="150">
                    <h2>{{ $profile['name'] }}</h2>
                    <p>Email: {{ $profile['email'] }}</p>
                    <p>Bio: {{ $profile['bio'] }}</p>

                    @if(is_array($profile['skills']) && count($profile['skills']) > 0)
                    <h5>Skills:</h5>
                    <ul>
                        @foreach($profile['skills'] as $skill)
                        <li>{{ $skill }}</li>
                        @endforeach
                    </ul>
                    @else 
                    <p>Tidak Ada Skills Yang Di Tampilkan</p>
                    @endif
                </div>
            </div>
 @endsection