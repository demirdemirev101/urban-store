<h1>Products</h1>

@foreach ($products as $product)
    <article>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <p>Category: {{ $product->category->name }}</p>
    </article>
@endforeach

<a href="{{ route('products.show', $product) }}">
    <h2>{{ $product->name }}</h2>
</a>