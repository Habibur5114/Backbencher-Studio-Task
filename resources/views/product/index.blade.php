
@include('include.header')

  <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h5>Total Products</h5>
      <a href="{{ route('product.create') }}" class="btn btn-success">Add Product</a>
    </div>

    <div class="card shadow-sm border-1">
      <div class="card-body p-3">
        <table id="datatables" class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $index => $product)
            <tr>
              <th scope="row">{{ $index + 1 }}</th>
              <td>{{ $product->name }}</td>
              <td>{{ $product->quantity }}</td>
              <td>{{ $product->price }}</td>
              <td>
                <a href="{{ route('product.show', $product->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('product.delete', $product->id) }}" class="btn btn-danger" id="deleteData">Delete</a>

              </td>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>

  </div>

  @include('include.footer')

  

</body>

</html>
