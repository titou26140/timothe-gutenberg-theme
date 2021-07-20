<header id="heading-bar" class="z-10">

    <!-- This example requires Tailwind CSS v2.0+ -->
    <nav class="bg-gray-800">
        <div class="container">
            <div class="own-container-without-y">
                <div class="relative flex items-center justify-between h-16">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Mobile menu button-->
                        <button type="button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex-shrink-0 flex items-center website-logo">
                            <a class="brand" href="{{ home_url('/') }}">
                                @if (function_exists('the_custom_logo') && get_theme_mod('custom_logo'))
                                    <img class="h-8 w-auto"
                                        src="{{ wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full') }}"
                                        alt="{{ get_bloginfo('name') }}" />
                                @else
                                    {{ get_bloginfo('name', 'display') }}
                                @endif
                            </a>

                        </div>
                        <div class="hidden sm:block sm:ml-6">
                            <div class="flex space-x-4">
                                @if (has_nav_menu('primary_navigation'))
                                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
                                @endif
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            </div>
                        </div>
                    </div>

                    @if (is_user_logged_in())
                        <div
                            class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                            <!-- Profile dropdown -->
                            <div class="ml-3 relative">
                                <div>
                                    <button type="button"
                                        class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                            src="{{ get_avatar_url(get_current_user_id()) }}" alt="">

                                        {{-- user profil illustration --}}


                                    </button>
                                </div>

                                <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
                                <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->

                                    <a href="{{ admin_url('profile.php') }}"
                                        class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                        id="user-menu-item-0">Mon profil</a>

                                    <a href="{{ admin_url('profile.php') }}"
                                        class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                        id="user-menu-item-0">Tableau de bord</a>

                                    {{-- Se déconnecter --}}

                                    <a href="{{ wp_logout_url(home_url()) }}"
                                        class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                        id="user-menu-item-2">
                                        Se déconnecter
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                        aria-current="page">Dashboard</a>

                    <a href="#"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

                    <a href="#"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

                    <a href="#"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
                </div>
            </div>
        </div>
    </nav>

</header>

@push('scripts')
    <script>
        console.log('oui');
    </script>
@endpush
