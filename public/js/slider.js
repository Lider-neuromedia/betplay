
// $(".mainForm").on('submit',function(event) {
//     event.preventDefault(); // to prevent default page reloading
//     var dataString = $(this).serialize(); // to get the form data
//     $.ajax({
//         type: "POST",
//         url: "formulario.php",
//         data: dataString,
//         success: function(data){
//             $('#contact-form')[0].reset(); // to reset form data
//         }
//     }).done(function(data){
//         setTimeout(function () {
//             $('.contactform-messages').addClass('contact-active');
//         }, 500);
//     });
// });