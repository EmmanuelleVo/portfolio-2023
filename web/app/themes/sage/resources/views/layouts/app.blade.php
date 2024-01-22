{{-- Is wrapped by index.php in /root/ --}}

<a class="u-visually-hidden" href="#main" title="{{ __('Skip to content') }}">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  <main id="main" class="main">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

@include('sections.footer')
