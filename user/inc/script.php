

<script>

swal({
    title: "Good job!",
    text: "You clicked the button!",
    icon: "success",
    button: "Aww yiss!",
    });




    Swal.fire(
    'Good job!',
    'You clicked the button!',
    'success'
    );



swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover this imaginary file!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    })
    .then((willDelete) => {
    if (willDelete) {
        swal("Poof! Your imaginary file has been deleted!", {
        icon: "success",
        });
    } else {
        swal("Your imaginary file is safe!");
    }
    });






 
    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
        Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
        )
    }
    })

</script>