<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updatProduct{{ $product->id }}">
    <i class="fa-solid fa-pen-to-square"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="updatProduct{{ $product->id }}" tabindex="-1"
    aria-labelledby="updatProduct{{ $product->id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updatProduct{{ $product->id }}Label">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- ... -->
<div class="modal-body">
    <form action={{ route('product.update', $product) }} method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="image">Product Image:</label>
            <input class="form-control" type="file" name="image" id="image">
        </div>

        <div>
            <label for="name">Product Name:</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <div>
            <label for="stock">Product Stock: </label>
            <input type="number" name="stock" id="stock" required value="{{ old('stock', $product->stock) }}" class="form-control">
        </div>

        <div>
            <label for="prix">Product Price: </label>
            <input type="number" name="prix" id="prix" required value="{{ old('prix', $product->prix) }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="category">Product Category:</label>
            <select class="form-control" id="category" name="category">
                <option value="">Sélectionnez une catégorie</option>
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}" {{ $categorie->id == $product->categorie_id ? 'selected' : '' }}>
                        {{ $categorie->name }}
                    </option>
                @endforeach
            </select>
        </div>



        <div>
            <label for="description">Product Description:</label>
            <textarea required class="form-control" name="description" id="description" cols="30" rows="5">{{ $product->description }}</textarea>
        </div>

        <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-primary mt-3 ml-auto">Update Product</button>
        </div>
    </form>
</div>
<!-- ... -->

        </div>
    </div>
</div>
