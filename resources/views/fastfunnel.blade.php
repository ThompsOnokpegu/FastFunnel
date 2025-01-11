<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.header')
    <body class="antialiased font-sans">
        @livewire('fast-funnel')
    </body>
</html>