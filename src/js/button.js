// document.getElementsByClassName('ajax_add_to_cart').addEventListener('click', function (clicked) {
//     return function () {
//         if (!clicked) {
//             var last = this.innerHTML;
//             this.innerHTML = 'Added';
//             clicked = true;
//             setTimeout(function () {
//                 this.innerHTML = last;
//                 clicked = false;
//             }.bind(this), 1000);
//         }
//     };
// }(false), this);

$('.ajax_add_to_cart').on("click",function(){
    $(this).val("Adding....");
      setTimeout(function(){
         $('.ajax_add_to_cart').val("Added");}, 2000);
 });