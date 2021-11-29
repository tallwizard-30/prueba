@extends('layout')
@push('styles')
    @livewireStyles
@endpush
@push('scripts')
    @livewireScripts
@endpush
<!doctype html>
<html lang="en">
<head>
   
    @stack('styles')
</head>
<body>
    /
    @stack('scripts')
</body>
</html>