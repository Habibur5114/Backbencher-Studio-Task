
@include('include.header')

    <div class="container">
        <h4 class="my-4">Edit Product Insert Multiple Data</h4>

        <form action="{{ route('product.update') }}" method="POST">
            @csrf
            <table class="table table-bordered mt-4">
                <thead>
                    <tr class="text-center">
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Total Price</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" name="name" class="form-control" placeholder="Name"
                                value="{{ $products->name }}">
                            <input type="hidden" name="id" value="{{ $products->id }}">
                        </td>
                        <td>
                            <input type="text" name="quantity" class="form-control" placeholder="Quantity"
                                value="{{ $products->quantity }}">
                        </td>
                        <td>
                            <input type="text" name="price" class="form-control" placeholder="Price"
                                value="{{ $products->price }}">
                        </td>
                    </tr>

                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    @include('include.footer')
