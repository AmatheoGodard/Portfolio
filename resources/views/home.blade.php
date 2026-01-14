@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-50">
        @include('partials.header')
        
        <main>
            @include('partials.hero')
            @include('partials.profil')
            @include('partials.parcours')
            @include('partials.competences')
            @include('partials.projets')
            @include('partials.contact')
        </main>
        
        @include('partials.footer')
    </div>
@endsection