<header class="bg-gray-200">
    <div class="flex items-center justify-between mx-32 p-5">
        <div class="text-xl">
            ChatApp
        </div>
        <div>
            <div class="font-medium leading-normal tracking-wide">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</header>