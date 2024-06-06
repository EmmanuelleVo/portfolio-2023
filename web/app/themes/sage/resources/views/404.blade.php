@extends('layouts.app')

@section('content')
<div class="page__wrapper">
  <div class="o-wrapper">
    @include('partials.page-header')
  
    @if (! have_posts())
      <x-alert type="warning">
        {!! __('Désolé, mais la page que vous essayez de consulter n‘existe pas.', 'sage') !!}
      </x-alert>
  
        {!! get_search_form(false) !!}
    @endif
  </div>
</div>
@endsection
