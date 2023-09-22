@extends("layouts.index_backend")
@section('product_backend')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="text-center mb-4">
                    @include("backend.partials.products.productCreate")
                </div>
                <!-- component -->
                <table class="min-w-full border-collapse block md:table">
                    <thead class="block md:table-header-group">
                        <tr
                            class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                            <th
                                class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            </th>
                            <th
                                class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                                Name
                            </th>
                            <th
                                class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                                Stock</th>
                            <th
                                class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                                Price</th>
                            <th
                                class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="block md:table-row-group">
                        @foreach ($products as $product)
                            <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                                <td class="p-2 md:border md:border-grey-500 text-center block md:table-cell ">
                                    <img
                                        width="100px" src="{{ asset('storage/img/produit/' . $product->image) }}"
                                        alt="">
                                    </td>
                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                    {{ $product->name }}
                                </td>
                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                    {{ $product->stock }}</td>
                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                    {{ $product->prix }}.00 $
                                </td>
                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                    <form action="{{ route('product.destroy', $product) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">

                                        </button>
                                    </form>
                                    @include("backend.partials.products.productUpdate")
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
