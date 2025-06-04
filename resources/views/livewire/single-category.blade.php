<section class="w-full">
    <div class="container px-0">
        <div class="py-3 px-6 mt-5 mx-auto">
            <h1 class="text-3xl">{{ $category->name }}</h1>
        </div>
        <div class="mt-5">
            <x-product.product-group :products="$products" :category="$category" />
        </div>
    </div>
</section>
