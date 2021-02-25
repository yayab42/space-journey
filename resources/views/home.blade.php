bonjour

@forelse ($products as $product)
    <li>{{ $product->title }}</li>
@empty
    <p>No products</p>
@endforelse
