<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class() @endphp>
    <div id="full-content">
        @php do_action('get_header') @endphp
        @include('partials.header')
        <div class="wrap" role="document">
            <div class="content">
                <main class="main">
                    @yield('content')
                </main>
                @if (App\display_sidebar())
                    <aside class="sidebar">
                        @include('partials.sidebar')
                    </aside>
                @endif
            </div>
        </div>
        @php do_action('get_footer') @endphp
    </div>
    <div id="full-footer">
        @include('partials.footer')
        @php wp_footer() @endphp
    </div>

    @stack('scripts')
</body>

</html>
