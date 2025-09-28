<!doctype html>
<html lang="en">

@include('include.header')

<body>
    <div class="container">
        <h4 class="my-4">Create Products Insert Multiple Data</h4>
        <div class="d-flex justify-content-between align-items-center mb-3">
        <button id="addMoreBtn" class="btn btn-success mb-2">Add More</button>
             <a href="{{ route('product.index') }}" class="btn btn-success">Back</a>
        </div>
        <form id="productForm" action="{{ route('product.store') }}" method="POST">
            @csrf
            <table class="table table-bordered mt-4">
                <thead>
                    <tr class="text-center">
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

{{--  admorefunction  --}}
    <script>
        const addMoreBtn = document.getElementById('addMoreBtn');
        const tableBody = document.getElementById('tableBody');

        let rowCount = 0;

        addMoreBtn.addEventListener('click', function () {
            rowCount++;

            const newRow = document.createElement('tr');
            newRow.classList.add('text-center');
            newRow.innerHTML = `
                <td><input type="text" name="name[]" class="form-control" placeholder="Name" required></td>
                <td><input type="number" name="quantity[]" class="form-control" placeholder="Quantity" required></td>
                <td><input type="number" name="price[]" class="form-control" placeholder="Total Price" required></td>
                <td><button type="button" class="btn btn-danger btn-sm removeBtn">Remove</button></td>
            `;
            tableBody.appendChild(newRow);

            // Remove row functionality
            newRow.querySelector('.removeBtn').addEventListener('click', function () {
                newRow.remove();
            });
        });

    </script>



    @include('include.footer')