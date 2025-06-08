@props(['product'])
<!-- <div class="max-w-80 flex flex-col items-center">
    <a href="{{ route('single.product', ['category_slug' => $product->category->category_slug, 'product_slug' => $product->product_slug]) }}" class="w-full">
        <div class="h-80 bg-white my-4 rounded-lg relative flex justify-center items-center">
            <img class="object-contain" style="max-width: 280px; max-height: 280px;" src="{{ url('storage', $product->image) }}" alt="крем">
        </div>
    </a>
    <h1 class="text-xl text-center">{{ $product->name }}</h1>
    <p class="my-2 text-sm text-desc text-center">{{ $product->description }}</p>
    <p class="text-xl my-2 text-center">
        <span style="font-family: Roboto, sans-serif;">3000</span> ₽
    </p>
    <button class="bg-button text-2xl text-white w-full py-2 rounded-lg">Записаться</button>
</div> -->
<div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
  <img class="w-full h-48 object-cover object-center md:h-56 lg:h-64" src="{{ url('storage', $product->image) }}" alt="Фото врача"/>
  <div class="p-4 flex-grow">
    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $product->name }}</h3>
    <p class="text-gray-700 text-sm"> {{ $product->description }}</p>
  </div>
  <div class="p-4 flex justify-between items-center">
    <a
      href="#" class="bg-primary text-black py-2 px-4 rounded-md hover:bg-sky-500">Записаться на прием</a>
  </div>
</div>

