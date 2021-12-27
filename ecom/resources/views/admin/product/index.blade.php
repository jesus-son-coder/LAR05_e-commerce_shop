@extends('admin.master')

@section('content')

    @forelse($products as $product)
        <li>
            <h4>Nom du Produit: {{ $product->pro_name }}</h4>
            <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <input class="btn btn-danger" type="submit" value="Delete">
            </form>
        </li>
    @empty
        <h3>Aucun produit </h3>
    @endforelse
@endsection
