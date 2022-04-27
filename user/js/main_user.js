
$(function(){

    $('.cancelapp').on('click', function(e){

        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete!'
        }).then((result) => {
        if (result.value) {

            document.location.href = href;
            Swal.fire(
            'Deleted!',
            'Your booking has been Cancel.',
            'success'
            )
        }
        })

});
        

});



$(function(){

    $('.book').on('click', function(e){

        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: "Book Appointment!",
            text: "You clicked the button!",
            icon: "success",
            button: "Aww yiss!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Book Appointment!'
            }).then((result) => {
            if (result.value) {

                document.location.href = href;
                Swal.fire(
                'Booking',
                'Your file has been Booked.',
                'success'
                )
            }
            })
        })

});
        







function Show(){

    const flashdata = $('.flash-data').data(flashdata);

    if(flashData){
        swal.fire({
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
        button: "Aww yiss!",
        })

    }
}



