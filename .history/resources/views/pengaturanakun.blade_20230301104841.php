@if(Auth::user()->roles[0]->name = "Masyarakat")
    @extends('layouts.user')

@else
    @extends('view')