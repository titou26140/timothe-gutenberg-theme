@extends('layouts.app')

@section('content')
  @include('partials.hero-image-right')
  <div class="own-container">

    {{--@while ( $three_last_articles->have_posts())
      @php
        $three_last_articles->the_post();
      @endphp
      @if (the_title() !== null)
        the_title()
      @endif
      ||
    @endwhile--}}

    @foreach ($three_last_articles as $post)
      <p>Post : {{ $post->post_title }}</p>
    @endforeach

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
