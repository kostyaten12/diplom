<section>
    <div class="container px-0">
        <ul class="flex">
            <li class="min-w-[600px] min-h-[600px] bg-white my-8 rounded-lg">
                <img class="justify-items-center flex mx-auto p-4" width="560" height="560" src="{{ url('storage', $product->image) }}" alt="Крем">
            </li>
            <li class="pt-32 pl-16">
                <h1 class="text-3xl">{{ $product->name }}</h1>
                <p class="my-2 text-lg text-desc">{{ $product->description }}</p>
                <p style="font-family: Roboto, sans-serif;" class="text-2xl my-2 mt-10">{{ $product->price }} ₽</p>
                <ul class="grid grid-cols-2 w-[670px]">
                    <li class="w-[120px]">
                        <button class="bg-button text-2xl text-white w-80 py-2 rounded-lg">Записаться</button>
                    </li>
                    <li class="w-[120px]">
                        <button class="bg-action h-[47px] w-[47px] rounded-lg">
                            <box-icon class="mt-[5px]" name='bookmark-heart' color='#ffffff' size='md'></box-icon>
                        </button>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="container px-0">
        <h2 class="text-2xl underline decoration-solid">Описание</h2>
        <div class="bg-white my-4 rounded-lg py-6 px-4">{!! $product->long_description !!}</div>
    </div>
</section>
