<header class="w-full pt-4 pb-4">
    <div class="container flex bg-sky-800 py-4 px-6 rounded-xl mx-auto max-h-10 justify-between items-center">
        <div>
            <a wire:navigate href="{{ route('page.home') }}" style="font-family: Julee, cursive" class="text-3xl color-white text-white px-4 py-2 rounded-lg">МедЦентр</a>
        </div>
        <nav>
            <menu>
                <ul class="flex gap-8 text-xl text-white ">
                    <li>
                        <a wire:navigate href="{{ route('page.home') }}">О нас</a>
                    </li>
                    <li>
                        <a wire:navigate href="{{ route('page.category') }}">Врачи</a>
                    </li>
                    <li>
                        <a wire:navigate href="{{ route('page.feedback') }}">Контакт</a>
                    </li>
                </ul>
            </menu>
        </nav>



        
        <!-- <nav>
                <button class="burger-menu md:hidden focus:outline-none">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg>
                </button>
                <ul class="menu hidden md:flex space-x-4">
                    <li><a href="#" class="hover:text-gray-300">Главная</a></li>
                    <li><a href="#" class="hover:text-gray-300">О нас</a></li>
                    <li><a href="#" class="hover:text-gray-300">Услуги</a></li>
                    <li><a href="#" class="hover:text-gray-300">Контакты</a></li>
                </ul>
            </nav> -->
    </div>
</header>
