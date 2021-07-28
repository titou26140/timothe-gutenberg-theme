<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
  <div class="absolute inset-0">
    <div class="bg-white h-1/3 sm:h-2/3"></div>
  </div>
  <div class="relative max-w-7xl mx-auto">
    <div class="text-center">
      <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
        Les actualités
      </h2>
      <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
        Retrouvez toutes les dernières actualités sur notre site.
      </p>
    </div>
    <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
      @foreach ($three_last_articles as $post)
        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
          <div class="flex-shrink-0">
            <img class="h-48 w-full object-cover"
                 src="{{get_the_post_thumbnail_url($post->ID)}}"
                 alt="">
          </div>
          <div class="flex-1 bg-white p-6 flex flex-col justify-between">
            <div class="flex-1">
              <p class="text-sm font-medium text-indigo-600">
                <a href="#" class="hover:underline">
                  Article
                </a>
              </p>
              <a href="{{ get_permalink($post->ID) }}" class="block mt-2">
                <p class="text-xl font-semibold text-gray-900">
                  {{ $post->post_title }}
                </p>
                <p class="mt-3 text-base text-gray-500">
                  @if($post->post_excerpt)
                    {{ str_limit($post->post_excerpt, $limit = 150, $end = '...') }}
                  @else
                    {{str_limit(strip_tags($post->post_content), $limit = 150, $end = '...')}}
                  @endif

                </p>
              </a>
            </div>
            <div class="mt-6 flex items-center">
              <div class="flex-shrink-0">
                <a href="#">
                  <span class="sr-only">Roel Aufderehar</span>
                  <img class="h-10 w-10 rounded-full"
                       src="{{ get_avatar_url($post->post_author) }}"
                       alt="{{ get_the_author_meta( 'display_name', $post->post_author ) }} Profil  image">
                </a>
              </div>
              <div class="ml-3">
                <p class="text-sm font-medium text-gray-900">
                  <a href="{{ get_the_author_meta( 'user_url', $post->post_author ) }}" class="hover:underline">
                    @if ( get_the_author_meta( 'first_name', $post->post_author ) && get_the_author_meta( 'last_name', $post->post_author ))
                      {{ get_the_author_meta( 'first_name', $post->post_author ) }}
                      {{ get_the_author_meta( 'last_name', $post->post_author ) }}
                    @else
                      {{ get_the_author_meta( 'display_name', $post->post_author ) }}
                    @endif
                  </a>
                </p>
                <div class="flex space-x-1 text-sm text-gray-500">
                  <time datetime="{{$post->post_date}}">
                    @php
                      setlocale(LC_TIME, "fr_FR");
                      echo strftime("%A %d %B %G", strtotime($post->post_date));
                    @endphp
                  </time>
                  <span aria-hidden="true">
                                    &middot;
                                </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
