$("#buyer").keyup( function() {
    let regex = '^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$'
    let val = $(this).val()
    let match = val.match(regex)
    
    if(match == null) showMessage('Invalid character', 'error')
    if(val.length > 20) showMessage('Too long', 'error')
});

$("#receipt_id").keyup( function() {
    let regex = '^[A-Za-z]+$'
    let val = $(this).val()
    let match = val.match(regex)
    
    if(match == null) showMessage('Invalid character', 'error')
});


$("#submitBtn").click( () => {
    let items = $('#items option:selected').toArray().map(item => item.value)
    
    if(items.length == 0) {
        showMessage('Please select an item', 'error')
        return
    }
});


function showMessage(msg = "", type = "") {
    toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-top-center",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "1000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }

    if(type == 'error') toastr.error(msg)
    else if(type == 'warning') toastr.warning(msg)
    else toastr.success(msg)
}
