$(document).ready(function(){
    $('#datatable').on('click', '.edit', function(e){
        e.preventDefault();
        e.stopPropagation();
        var id = $(this).data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: detail_url,
            method: 'get',
            data: {id:id},
            success: function (data){
                var result = data.data;
                console.log(result);
                $('.username').val(result.name)
                $('.useremail').val(result.email)
                $('.userpassword').val(result.real_pass)

            }
        })
        $('.confirm_edit').click(function(){
            var name = $('.username').val();
            var email = $('.useremail').val();
            var password = $('.userpassword').val();
            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: edit_url,
                method: 'get',
                data: {id:id, name:name, email:email, password:password},
                success: function (data){
                    toastr["success"]("Success");
                    $('#myModal').modal('hide');
                    location.href = list_url; 
                }
            })
        })
    })

    //delete admin
    $('#datatable').on('click', '.delete', function(e){
        e.preventDefault();
        e.stopPropagation();
        var id = $(this).data('id');
        $('.confirm_delete').click(function(){
            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: delete_url,
                method: 'get',
                data: {id:id},
                success: function (data){
                    toastr["success"]("Success");
                    $('#myModal').modal('hide');
                    location.href = list_url; 
                }
            })
        })
    })
})