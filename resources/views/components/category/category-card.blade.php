@props(['category'])
<div class="w-full flex flex-col items-center">
    <a href="{{ route('single.category', $category->category_slug) }}" class="w-full xs:w-3/4 md:w-3/4 lg:w-2/3">
        <div class="bg-white my-4 rounded-lg flex justify-center items-center">
            <img class="object-contain w-full h-auto" style="max-width: 300px; max-height: 300px;" src="{{ url('storage', $category->image) }}" alt="специлизация">
        </div>
    </a>
    <div class="text-center">
        <h2 class="text-lg xs:text-xl md:text-xl">{{ $category->name }}</h2>
        <p class="my-2 text-sm xs:text-base md:text-base text-desc">{{ $category->description }}</p>
    </div>
</div>