$(document).ready(function () {
    $(document).on('click', '.add-to-cart', function (e) {
        e.preventDefault();
        var productId = $(this).attr('data-id')
        $.ajax({
            url: $(this).attr("href"),
            dataType: 'json',
            success: function (result) {
                if (result.status == 'success') {
                    $('.minicart-btn .notification').html(result.totalItem);
                    toastr.success('Success', '', {
                        timeOut: 800,
                        showMethod: 'slideDown',
                    });
                    var listItem = '';
                    $.each(result.listItem, function (key, value) {
                        listItem += '<li class="minicart-item">\n' +
                            '                            <div class="minicart-thumb">\n' +
                            '                                <a href="product/details/' + value.id + '">\n' +
                            '                                    <img src="assets/img/cart/cart-1.jpg" alt="product">\n' +
                            '                                </a>\n' +
                            '                            </div>\n' +
                            '                            <div class="minicart-content">\n' +
                            '                                <h3 class="product-name">\n' +
                            '                                    <a href="product/details/' + value.id + '">' + value.name + '</a>\n' +
                            '                                </h3>\n' +
                            '                                <p>\n' +
                            '                                    <span class="cart-quantity">' + value.quantity + '<strong>×</strong></span>\n' +
                            '                                    <span class="cart-price">' + formatMoney(value.price, 0, ".", ",") + ' VND</span>\n' +
                            '                                </p>\n' +
                            '                            </div>\n' +
                            '                            <a href="http://127.0.0.1:8000/cart/remove/' + value.id + '" class="minicart-remove"><i class="lnr lnr-cross"></i></a>\n' +
                            '                        </li>'
                    });
                    $(".minicart-item-wrapper ul").html(listItem);
                    $(".minicart-pricing-box ul .total strong").html(formatMoney(result.totalPrice, 0, ".", ",") + ' VND');
                }
            }
        })
    })

    $(document).on('click', '.minicart-remove, .pro-remove a', function (e) {
        e.preventDefault();
        var that = $(this);
        $.ajax({
            url: $(this).attr("href"),
            dataType: 'json',
            success: function (result) {
                if (result.status == 'success') {
                    that.closest(".minicart-item").fadeOut(function () {
                        that.closest(".minicart-item").remove();
                    })
                    that.closest("tr").fadeOut(function () {
                        that.closest("tr").remove();
                    })
                    $(".minicart-pricing-box ul .total strong").html(formatMoney(result.totalPrice, 0, ".", ",") + ' VND');
                    $(".cart-calculate-items .total-amount").html(formatMoney(result.totalPrice, 0, ".", ",") + ' VND');
                    $('.minicart-btn .notification').html(result.totalItem);
                }
            }
        });
    })

    $(".pro-quantity input[type='number']").on("change", function () {
        var productId = $(this).attr('data-id');
        var that = $(this);
        if ($(this).val() > 0) {
            $.ajax({
                url: '/cart/update/' + productId,
                data: {"quantity": $(this).val()},
                dataType: 'json',
                success: function (result) {
                    if (result.status == 'success') {
                        var itemPrice = result.listItem[productId].price * result.listItem[productId].quantity;
                        that.closest("tr").find(".pro-subtotal span").html(formatMoney(itemPrice, 0, ".", ",") + ' VND')
                        $(".cart-calculate-items .total-amount").html(formatMoney(result.totalPrice, 0, ".", ",") + ' VND');

                    }
                }
            });
        }
    })
})

function formatMoney(amount, decimalCount = 2, decimal = ".", thousands = ",") {
    try {
        decimalCount = Math.abs(decimalCount);
        decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

        const negativeSign = amount < 0 ? "-" : "";

        let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
        let j = (i.length > 3) ? i.length % 3 : 0;

        return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
    } catch (e) {
        console.log(e)
    }
}
