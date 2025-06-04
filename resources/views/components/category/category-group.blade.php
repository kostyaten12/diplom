@props(['categories'])
<ul class="grid grid-cols-4 gap-[110px]">
    @foreach ($categories as $category)
        <li class="col-span-2 ">
            <x-category.category-card :category="$category" />
        </li>
    @endforeach
</ul>
