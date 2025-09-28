<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
  $('#datatables').DataTable();
} );
</script>
{{--  sweet alert  --}}
 @if (session('success'))
    <script>
        const Toast = Swal.mixin({
  toast: true,
  position: 'top-right',
  iconColor: 'white',
  customClass: {
    popup: 'colored-toast',
  },
  showConfirmButton: false,
  timer: 1500,
  timerProgressBar: true,
})

    Toast.fire({
    icon: 'success',
    title: "{{ session('success') }}",
  })
    </script>

    @endif

    {{-- delete sweetalert --}}
 <script>
        $(document).on("click", "#deleteData", function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: "Are you sure?",
                text: "Once Delete, This will be Permanently Delete!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#8bc34a',
                cancelButtonColor: '#d33',
                cancelButtonText: "Cancel",
                confirmButtonText: "Yes, delete it!",
            }).then((willDelete) => {
                if (willDelete.isConfirmed) {
                    window.location.href = link;
                }
            })
        })
    </script>
</body>

</html>