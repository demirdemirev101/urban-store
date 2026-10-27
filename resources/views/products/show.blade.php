<h1>{{ $product->name }}</h1>

<p>{{ $product->description }}</p>
<p>Категория: {{ $product->category->name }}</p>

<h2>Варианти</h2>

@foreach ($product->variants as $variant)
    <p>
        {{ $variant->color }} /
        {{ $variant->size }} /
        {{ $variant->price }} лв. /
        Наличност: {{ $variant->stock }}
    </p>
@endforeach>

<h2>Снимки</h2>

@foreach ($product->images as $image)
    <p>{{ $image->path }}</p>
@endforeach