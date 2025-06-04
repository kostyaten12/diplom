@props(['products', 'category'])
<ul class="grid grid-cols-4 gap-[110px]">
    @foreach ($category->products as $product)
        <li class="col-span-1 ">
            <x-product.product-card :product="$product" />
        </li>
    @endforeach
</ul>
