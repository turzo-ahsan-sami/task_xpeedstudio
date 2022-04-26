$(document).ready(function() {
    $('#summernote').summernote();
  });

$("#submitBtn").click( (e) => {

    e.preventDefault();

    if( !validateAmount() ) {
        showMessage('Invalid amount', 'error')
        return
    }

    if( !validateBuyer() ) {
        showMessage('Invalid buyer input', 'error')
        return
    }

    if( !validateReceiptId() ) {
        showMessage('Invalid receipt Id', 'error')
        return
    }

    if( !validateEmail() ) {
        showMessage('Invalid email', 'error')
        return
    }

    if( !validateItems() ) {
        showMessage('Please select an item', 'error')
        return
    }
    
    if( !validateNote() ) {
        showMessage('Invalid note', 'error')
        return
    }
    
    if( !validateCity() ) {
        showMessage('Invalid city', 'error')
        return
    }
    
    if( !validatePhone() ) {
        showMessage('Invalid phone', 'error')
        return
    }
    
    if( !validateEntryBy() ) {
        showMessage('Invalid entry by', 'error')
        return
    }

    let amount      = $("#amount").val()
    let buyer       = $("#buyer").val()
    let receipt_id  = $("#receipt_id").val()
    let buyer_email = $("#buyer_email").val()
    let items       = JSON.stringify( $('#items option:selected').toArray().map(item => item.value) )
    let note        = $("#note").val()
    let city        = $("#city").val()
    let phone       = $("#phone").val()
    let entry_by    = $("#entry_by").val()

    let formData = { amount, buyer, receipt_id, buyer_email, items, note, city, phone, entry_by }
    
    $.ajax({
        url: `${location.href}`,
        data: formData,
        processData: false,
        type: 'POST',
        success: function ( data ) {
            alert( data );
        }
    });
});

$("#phone").focusout( function() {
    $(this).val( `880${$(this).val()}`)
});


function validateAmount(){
    let regex = '^[0-9]*$'
    let val = $("#amount").val()
    let match = val.match(regex)
    if(match == null) return false
    return true
}

function validateBuyer(){
    let regex = '^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$'  
    let val = $("#buyer").val()
    let match = val.match(regex)
    if(match == null) return false
    if(val.length > 20) return false
    return true
}


function validateReceiptId(){
    let regex = '^[A-Za-z]+$'    
    let val = $("#receipt_id").val()
    let match = val.match(regex)
    if(match == null) return false
    return true
}

function validateEmail(){
    let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    let val = $("#buyer_email").val()
    let match = val.match(regex)
    if(match == null) return false
    return true
}

function validateItems(){
    let items = $('#items option:selected').toArray().map(item => item.value)    
    if(items.length == 0) return false
    return true
}

function validateNote(){
    let regex = /^[a-zA-Z\s]*$/    
    let val = $("#note").val()
    let match = val.match(regex)
    if(match == null) return false
    if(countWords(val) > 30) return false
    return true
}

function validateCity(){
    let regex = '^[A-Za-z]+$'    
    let val = $("#city").val()
    let match = val.match(regex)
    if(match == null) return false
    return true
}

function validatePhone(){
    let regex = '^[0-9]*$'
    let val = $("#phone").val()
    let match = val.match(regex)
    if(match == null) return false
    return true
}

function validateEntryBy(){
    let regex = '^[0-9]*$'
    let val = $("#entry_by").val()
    let match = val.match(regex)
    if(match == null) return false
    return true
}

function countWords(s){
    s = s.replace(/(^\s*)|(\s*$)/gi,"");//exclude  start and end white-space
    s = s.replace(/[ ]{2,}/gi," ");//2 or more space to 1
    s = s.replace(/\n /,"\n"); // exclude newline with a start spacing
    return s.split(' ').filter(function(str){return str!="";}).length;
    //return s.split(' ').filter(String).length; - this can also be used
}

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
