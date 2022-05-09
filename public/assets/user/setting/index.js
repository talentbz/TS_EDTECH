
$(document).ready(function () {
    $('#basicForm').submit(function(e){
        e.preventDefault();
        e.stopPropagation();
        password = $(this).find('input[name="password"]').val();
        $.ajax({
            url: basic_info,
            method: 'get',
            data: {password:password},
            success: function (res) {
                if(res == true){
                    toastr["success"]("Success");
                    $('.edit-info').show();
                } else {
                    toastr["warning"]("Password does not match.");
                }
            },
            error: function (res){
                console.log(res)
            },
            cache: false,
        })
    })
    
    $("#wizard-picture").change(function(){
        readURL(this);
    });
})

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}