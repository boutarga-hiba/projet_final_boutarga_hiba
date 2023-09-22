@extends("layouts.index_backend")
@section('product_backend')
<div class="text-center mb-4">
    @include("backend.partials.products.productCreate")
</div>

<table class="table container">

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Produit</th>
        <th scope="col">Name</th>
        <th scope="col">Stock</th>
        <th scope="col">Prix</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($products as $key => $product)
      <tr>
        <th scope="row">{{ $key + 1 }}</th>
        <td>  <img
            width="100px" src="{{ asset('storage/img/produit/' . $product->image) }}"
            alt=""></td>
        <td>{{$product->name}}</td>
        <td>{{$product->stock}}</td>
        <td>{{$product->prix}}.00 $</td>
        <td>
            <form action="{{ route('product.destroy', $product) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="bg-red-500 hover:bg-red-800 text-white font-bold py-1 px-2 border border-red-500 rounded">

                    <i class="fa-solid fa-trash"></i>
                </button>
            </form>

        </td>

        <td>
            @include("backend.partials.products.productUpdate")

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
