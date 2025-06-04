<header class="w-full pt-4 ">
    <div class="container flex bg-sky-800 py-4 px-6 rounded-xl mx-auto max-h-10 justify-between items-center">
        <div>
            <a wire:navigate href="{{ route('page.home') }}" style="font-family: Julee, cursive" class="text-3xl color-white bg-action text-white px-4 py-2 rounded-lg">Clear</a>
        </div>
        <nav>
            <menu>
                <ul class="flex gap-8 text-xl text-white ">
                    <li>
                        <a wire:navigate href="{{ route('page.home') }}">Главная</a>
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
        <ul class="flex bg-action px-4 py-1 rounded-lg gap-4">
            <li>
                <a href="#"><box-icon name='user' color='#ffffff' size='md'></box-icon></a>
            </li>
        </ul>
    </div>
</header>
