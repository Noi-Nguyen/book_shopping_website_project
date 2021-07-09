$(document).ready(function(){

      $("input[name='demo1']").TouchSpin({

            // Minimum value.
            min: 1, 

            // Maximum value.
            max: 100, 

            // Applied when no explicit value is set on the input with the value attribute. 
            // Empty string means that the value remains empty on initialization.
            initval: '',
            replacementval: '',

            // Number of decimal points.
            decimals: 0,

            // none | floor | round | ceil
            forcestepdivisibility: 'round', 

            // Enables the traditional up/down buttons.
            verticalbuttons: false,

            // Class of the up button with vertical buttons mode enabled.
            verticalupclass: 'glyphicon glyphicon-chevron-up',

            // Class of the down button with vertical buttons mode enabled.
            verticaldownclass: 'glyphicon glyphicon-chevron-down',

            // Boost at every nth step.
            boostat: 5, 

            // If enabled, the the spinner is continually becoming faster as holding the button.
            booster: true,

            // Maximum step when boosted.
            maxboostedstep: 10, 

            // Text after the input.
            //postfix: '%', 

            // Text before the input.
            //prefix: '$', 

            // Extra class(es) for prefix.
            prefix_extraclass: '',

            //  Extra class(es) for postfix.
            postfix_extraclass: '',

            // Incremental/decremental step on up/down change.
            step: 1, 

            // Refresh rate of the spinner in milliseconds.
            stepinterval: 100, 

            // Time in milliseconds before the spinner starts to spin.
            stepintervaldelay: 500,

            //  Enables the mouse wheel to change the value of the input.
            mousewheel: true,

            //  Class(es) of down button.
            buttondown_class: 'btn btn-danger',

            //  Class(es) of up button.
            buttonup_class: 'btn btn-success',

            // Text for down button
            buttondown_txt: '-',

            // Text for up button
            buttonup_txt: '+'
            
          });

});
    //    var shoppingCartItems = [];

    // $(document).ready(function () {
    //     // Kiểm tra nếu đã có sessionStorage["shopping-cart-items"] hay chưa?
    //     if (sessionStorage["shopping-cart-items"] != null) {
    //         shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString());
    //     }

    //     // Hiển thị thông tin từ giỏ hàng
    //     displayShoppingCartItems();
    // });


    // // Sự kiện click các button có class=".add-to-cart"
    // $(".add-to-cart").click(function () {
    //     var button = $(this); // Lấy đối tượng button mà người dùng click
    //     var id = button.attr("id"); // id của sản phẩm là id của button
    //     var name = button.attr("data-name"); // name của sản phẩm là thuộc tính data-name của button
    //     var price = button.attr("data-price"); // price của sản phẩm là thuộc tính data-price của button
    //     var quantity = $('#demo1').val(); // Số lượng


    //     var item = {
    //         id: id,
    //         name: name,
    //         price: price,
    //         quantity: quantity
    //     };

    //     var exists = false;
    //     if (shoppingCartItems.length > 0) {
    //         $.each(shoppingCartItems, function (index, value) {
    //             // Nếu mặt hàng đã tồn tại trong giỏ hàng thì chỉ cần tăng số lượng mặt hàng đó trong giỏ hàng.
    //             if (value.id == item.id) {
    //                 value.quantity++;
    //                 exists = true;
    //                 return false;
    //             }
    //         });
    //     }

    //     // Nếu mặt hàng chưa tồn tại trong giỏ hàng thì bổ sung vào mảng
    //     if (!exists) {
    //         shoppingCartItems.push(item);
    //     }

    //     // Lưu thông tin vào sessionStorage
    //     sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems); // Chuyển thông tin mảng shoppingCartItems sang JSON trước khi lưu vào sessionStorage
    //     // Gọi hàm hiển thị giỏ hàng
    //     displayShoppingCartItems();
    // });

    // // Xóa hết giỏ hàng shoppingCartItems
    // $("#button-clear").click(function () {
    //     shoppingCartItems = [];
    //     sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems);
    //     $("#table-products > tbody").html("");
    // });


    // // Hiển thị giỏ hàng ra table
    // function displayShoppingCartItems() {
    //     if (sessionStorage["shopping-cart-items"] != null) {
    //         shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"].toString()); // Chuyển thông tin từ JSON trong sessionStorage sang mảng shoppingCartItems.

    //         $("#table-products > tbody").html("");
    //         // Duyệt qua mảng shoppingCartItems để append từng item dòng vào table
    //         $.each(shoppingCartItems, function (index, item) {
    //             var htmlString = "";
    //             htmlString += "<tr>";
    //             htmlString += "<td>" + item.id + "</td>";
    //             htmlString += "<td>" + item.name + "</td>";
    //             htmlString += "<td style='text-align: right'>" + item.price + "</td>";
    //             htmlString += "<td style='text-align: right'>" + item.quantity + "</td>";
    //             htmlString += "<td style='text-align: right'>" + item.price * item.quantity + "</td>";
    //             htmlString += "</tr>";

    //             $("#table-products > tbody:last").append(htmlString);

    //         });
    //     }
    // }
// });
          



