@extends('layouts.app')

@section('content')
    @include('partials.hero-image-right')
    <div class="own-container">
        @include('partials.blog-section')
        @if (!have_posts())
            <div class="alert alert-warning">
                {{ __('Sorry, no results were found.', 'sage') }}
            </div>
            {!! get_search_form(false) !!}
        @endif

        @while (have_posts()) @php the_post() @endphp
            @include('partials.content-'.get_post_type())
        @endwhile

        {!! get_the_posts_navigation() !!}
    </div>
@endsection
