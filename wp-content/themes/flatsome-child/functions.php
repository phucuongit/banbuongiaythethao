<?php
// Add custom Theme Functions here
function flatsome_child_register_scripts() {
    $parent_style = 'flatsome-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array('flatsome-reset') );
    wp_enqueue_style( 'flatsome-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
    wp_enqueue_style( 'app-css', get_stylesheet_directory_uri(). '/assets/css/app.css', array(), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'flatsome_child_register_scripts' );

add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
    function wcs_woo_remove_reviews_tab($tabs) {
    unset($tabs['reviews']);
    return $tabs;
}

function box_content_service($attr){
    $param = shortcode_atts( array(
            'icon-service'  => 'home',
            'title-service' => 'Service',
            'description-service'   => 'Descrition of service',
            'image' => '//bizweb.dktcdn.net/100/263/756/themes/598488/assets/icon-service-transport.png?1570009489873',

    ), $attr );
  
    $box='<div class="box-content-service">';
    $box.='<div class="icon-service">';
    $box.='<img src="'.$param['image'].'" alt="'.$param['title-service'].'">';
    $box.='</div>';
    $box.='<div class="title-service">'. $param['title-service'] .'</div>';
    $box.='<div class="content-service">'.$param['description-service'] .'</div>';
    $box.='</div>';

    return $box;
}
add_shortcode( 'box_service', 'box_content_service' );

/* DỊCH TỪ WOOCOMMERCE CHUNG */
function flatsome_mayphotocomvn_text_strings( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
        case '₫' :
            $translated_text = __( ' đ', 'woocommerce' );
            break;
        case 'Posts found' :
            $translated_text = __( 'Bài viết tìm thấy', 'woocommerce' );
            break;
        case 'View cart' :
            $translated_text = __( 'Xem giỏ hàng', 'woocommerce' );
            break;
        case 'Checkout' :
            $translated_text = __( 'Thanh toán', 'woocommerce' );
            break;
        case 'Search' :
            $translated_text = __( 'Tìm kiếm sản phẩm ...', 'woocommerce' );
            break;
        case 'Description' :
            $translated_text = __( 'Chi tiết', 'woocommerce' );
            break;
        case 'Be the first to review' :
            $translated_text = __( 'Hãy là người đầu tiên nhận xét', 'woocommerce' );
            break;
        case 'Cart' :
            $translated_text = __( 'Giỏ hàng', 'woocommerce' );
            break;
        case 'Subtotal' :
            $translated_text = __( 'Tổng cộng', 'woocommerce' );
            break;
        case 'Product' :
            $translated_text = __( 'Sản phẩm', 'woocommerce' );
            break;
        case 'Price' :
            $translated_text = __( 'Giá', 'woocommerce' );
            break;
        case 'Price:' :
            $translated_text = __( 'Giá:', 'woocommerce' );
            break;
        case 'Quantity' :
            $translated_text = __( 'Số lượng', 'woocommerce' );
            break;
        case 'Total' :
            $translated_text = __( 'Tổng cộng', 'woocommerce' );
            break;
        case 'Cart totals' :
            $translated_text = __( 'Tổng số lượng', 'woocommerce' );
            break;
        case 'Proceed to checkout' :
            $translated_text = __( 'Tiến hành thanh toán', 'woocommerce' );
            break;
        case 'Coupon' :
            $translated_text = __( 'Mã giảm giá', 'woocommerce' );
            break;
        case 'Coupon code' :
            $translated_text = __( 'Mã ưu đãi', 'woocommerce' );
            break;
        case 'Apply coupon' :
            $translated_text = __( 'Áp dụng mã ưu đãi', 'woocommerce' );
            break;
        case 'Continue shopping' :
            $translated_text = __( 'Tiếp tục xem sản phẩm', 'woocommerce' );
            break;
        case 'Update cart' :
            $translated_text = __( 'Cập nhật giỏ hàng', 'woocommerce' );
            break;
        case 'Checkout' :
            $translated_text = __( 'Thanh toán', 'woocommerce' );
            break;
        case 'Billing details' :
            $translated_text = __( 'Thông tin thanh toán', 'woocommerce' );
            break;
        case 'Additional information' :
            $translated_text = __( 'Thông tin bổ sung', 'woocommerce' );
            break;
        case 'Your order' :
            $translated_text = __( 'Đơn hàng của bạn', 'woocommerce' );
            break;
        case 'Place order' :
            $translated_text = __( 'Đặt hàng', 'woocommerce' );
            break;
        case 'Shopping Cart' :
            $translated_text = __( 'Giỏ hàng', 'woocommerce' );
            break;
        case 'Checkout details' :
            $translated_text = __( 'Thanh toán', 'woocommerce' );
            break;
        case 'Order Complete' :
            $translated_text = __( 'Hoàn thành', 'woocommerce' );
            break;
        case 'Return to shop' :
            $translated_text = __( 'Quay trở lại cửa hàng', 'woocommerce' );
            break;
        case 'Tiếp tục xem sản phẩm' :
            $translated_text = __( 'Quay lại xem SP', 'woocommerce' );
            break;
        case 'We look forward to fulfilling your order soon.' :
            $translated_text = __( '', 'woocommerce' );
            break;
        case 'Cảm ơn đã đặt hàng. Đơn hàng sẽ bị tạm giữ cho đến khi chúng tôi xác nhận thanh toán hoàn thành. Trong thời gian chờ đợi, đây là lời nhắc về những gì bạn đã đặt hàng:' :
            $translated_text = __( 'Cám ơn bạn đã đặt hàng, vui lòng xem lại thông tin bên dưới kỹ càng trước khi thanh toán.', 'woocommerce' );
            break;
        case 'Địa chỉ thanh toán' :
            $translated_text = __( 'Địa chỉ giao hàng', 'woocommerce' );
            break;
        case 'Send email price' :
            $translated_text = __( 'Gởi báo giá', 'woocommerce' );
            break;
        case 'Tìm kiếm' :
            $translated_text = __( 'Tìm kiếm sản phẩm ...', 'woocommerce' );
            break;
        case 'No products in the cart.' :
            $translated_text = __( 'Chưa có sản phẩm trong giỏ hàng.', 'woocommerce' );
            break;
        case 'Related products' :
            $translated_text = __('Sản phẩm cùng loại', 'woocommerce');
            break;
        case 'No products were found matching your selection.' :
            $translated_text = __('Không có sản phẩm nào trong danh mục này.', 'woocommerce');
            break;
        case 'Out of stock' :
            $translated_text = __('Hết hàng', 'woocommerce');
            break;
        case 'Clear selection' :
            $translated_text = __('Xóa lựa chọn', 'woocommerce');
            break;
        case 'Search for products' :
            $translated_text = __('Tìm kiếm sản phẩm ...', 'woocommerce');
            break;
        case '$1 items' :
            $translated_text = __('$1 sản phẩm', 'woocommerce');
            break;
        case 'Item' :
            $translated_text = __('sản phẩm', 'woocommerce');
            break;
        case 'Filter' :
            $translated_text = __('Tìm sản phẩm theo', 'woocommerce');
            break;
        case 'Continue Shopping' :
            $translated_text = __('Tiếp tục mua hàng', 'woocommerce');
            break;
        case 'Availability:' :
            $translated_text = __('Tình trạng', 'woocommerce');
            break;
        case 'In Stock' :
            $translated_text = __('Còn hàng', 'woocommerce');
            break;
        case 'Categories:' :
            $translated_text = __('Danh mục:', 'woocommerce');
            break;
        case 'Tags:' :
            $translated_text = __('Từ khóa:', 'woocommerce');
            break;
    }
    return $translated_text;
}
add_filter( 'gettext', 'flatsome_mayphotocomvn_text_strings', 20, 3 );

/* DỊCH TỪ WOOCOMMERCE KHÔNG DỊCH ĐƯỢC */
function ra_change_translate_text_multiple( $translated ) {
    $text = array(
        'Subtotal' => 'Tổng cộng',
        'Tổng' => 'Thành tiền',
        'Thành tiền cộng' => 'Tổng cộng',
        'Thành tiền số phụ:' => 'Tổng cộng :',
        'Tổng cộng:' => 'Thành tiền :',
        'Cám ơn!' => '',
        'Cảm ơn đã đọc.' => '',
        'Thuế VAT:' => 'thuế VAT :',
        'Lưu ý:' => 'Lưu ý :',
        'Note:' => 'Lưu ý :',
        'Tạm tính:' => 'Tổng cộng',
        'Category: ' => 'Danh mục: ',
        'Tags: '    => 'Nhãn: ',
        'Add to cart'   => 'Thêm vào giỏ',
    );
    $translated = str_ireplace( array_keys($text), $text, $translated );
    return $translated;
}
add_filter( 'gettext', 'ra_change_translate_text_multiple', 20 );
/* THAY ĐỔI TIỀN VIỆT NAM ĐỒNG */
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
function change_existing_currency_symbol($currency_symbol, $currency) {
    switch ($currency) {
        case 'VND':
            $currency_symbol = ' đ';
            break;
    }
    return $currency_symbol;
}
/********* THAY ĐỔI FORM THÔNG TIN GIAO HÀNG ***********/
add_filter( 'woocommerce_checkout_fields' , 'custom_checkout_form' );
function custom_checkout_form( $fields ) {
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_city']);

    $fields['billing']['billing_first_name'] = array(
    'label' => 'Họ Tên',
    'placeholder' => 'Ví dụ: Nguyễn Trung Trực',
    'required'  => true,
    );

    $fields['billing']['billing_phone'] = array(
    'label' => 'Số điện thoại',
    'placeholder' => 'Ví dụ: 0988286818',
    'required'  => true,
    );

    $fields['billing']['billing_email'] = array(
    'label' => 'Email',
    'placeholder' => 'Ví dụ: mucinlaser@gmail.com',
    'required'  => true,
    );

    $fields['billing']['billing_address_1'] = array(
    'label' => 'Địa chỉ giao hàng',
    'placeholder' => 'Ví dụ: Số 18 Ngõ 86 Phú Kiều, Bắc Từ Liêm, Hà Nội',
    'required'  => false,
    );

    $fields['order']['order_comments'] = array(
    'label' => 'Ghi chú',
    'placeholder' => 'Ví dụ: giao hàng trước 17h',
    'required'  => false,
    );

    return $fields;
}


/********* THÊM CÁC TỈNH THÀNH PHỐ WOOCOMMERCE ***********/
add_filter( 'woocommerce_states', 'vietnam_cities_woocommerce' );
function vietnam_cities_woocommerce( $states ) {
  $states['VN'] = array(
    'Cần Thơ' => __('Cần Thơ', 'woocommerce') ,
    'Hồ Chí Minh' => __('Hồ Chí Minh', 'woocommerce') ,
    'Hà Nội' => __('Hà Nội', 'woocommerce') ,
    'Hải Phòng' => __('Hải Phòng', 'woocommerce') ,
    'Đà Nẵng' => __('Đà Nẵng', 'woocommerce') ,
    'An Giang' => __('An Giang', 'woocommerce') ,
    'Bà Rịa - Vũng Tàu' => __('Bà Rịa - Vũng Tàu', 'woocommerce') ,
    'Bạc Liêu' => __('Bạc Liêu', 'woocommerce') ,
    'Bắc Kạn' => __('Bắc Kạn', 'woocommerce') ,
    'Bắc Ninh' => __('Bắc Ninh', 'woocommerce') ,
    'Bắc Giang' => __('Bắc Giang', 'woocommerce') ,
    'Bến Tre' => __('Bến Tre', 'woocommerce') ,
    'Bình Dương' => __('Bình Dương', 'woocommerce') ,
    'Bình Định' => __('Bình Định', 'woocommerce') ,
    'Bình Phước' => __('Bình Phước', 'woocommerce') ,
    'Bình Phước' => __('Bình Thuận', 'woocommerce'),
    'Cà Mau' => __('Cà Mau', 'woocommerce'),
    'Đak Lak' => __('Đak Lak', 'woocommerce'),
    'Đak Nông' => __('Đak Nông', 'woocommerce'),
    'Điện Biên' => __('Điện Biên', 'woocommerce'),
    'Đồng Nai' => __('Đồng Nai', 'woocommerce'),
    'Gia Lai' => __('Gia Lai', 'woocommerce'),
    'Hà Giang' => __('Hà Giang', 'woocommerce'),
    'Hà Nam' => __('Hà Nam', 'woocommerce'),
    'Hà Tĩnh' => __('Hà Tĩnh', 'woocommerce'),
    'Hải Dương' => __('Hải Dương', 'woocommerce'),
    'Hậu Giang' => __('Hậu Giang', 'woocommerce'),
    'Hòa Bình' => __('Hòa Bình', 'woocommerce'),
    'Hưng Yên' => __('Hưng Yên', 'woocommerce'),
    'Khánh Hòa' => __('Khánh Hòa', 'woocommerce'),
    'Kiên Giang' => __('Kiên Giang', 'woocommerce'),
    'Kom Tum' => __('Kom Tum', 'woocommerce'),
    'Lai Châu' => __('Lai Châu', 'woocommerce'),
    'Lâm Đồng' => __('Lâm Đồng', 'woocommerce'),
    'Lạng Sơn' => __('Lạng Sơn', 'woocommerce'),
    'Lào Cai' => __('Lào Cai', 'woocommerce'),
    'Long An' => __('Long An', 'woocommerce'),
    'Nam Định' => __('Nam Định', 'woocommerce'),
    'Nghệ An' => __('Nghệ An', 'woocommerce'),
    'Ninh Bình' => __('Ninh Bình', 'woocommerce'),
    'Ninh Thuận' => __('Ninh Thuận', 'woocommerce'),
    'Phú Thọ' => __('Phú Thọ', 'woocommerce'),
    'Phú Yên' => __('Phú Yên', 'woocommerce'),
    'Quảng Bình' => __('Quảng Bình', 'woocommerce'),
    'Quảng Nam' => __('Quảng Nam', 'woocommerce'),
    'Quảng Ngãi' => __('Quảng Ngãi', 'woocommerce'),
    'Quảng Ninh' => __('Quảng Ninh', 'woocommerce'),
    'Quảng Trị' => __('Quảng Trị', 'woocommerce'),
    'Sóc Trăng' => __('Sóc Trăng', 'woocommerce'),
    'Sơn La' => __('Sơn La', 'woocommerce'),
    'Tây Ninh' => __('Tây Ninh', 'woocommerce'),
    'Thái Bình' => __('Thái Bình', 'woocommerce'),
    'Thái Nguyên' => __('Thái Nguyên', 'woocommerce'),
    'Thanh Hóa' => __('Thanh Hóa', 'woocommerce'),
    'Thừa Thiên - Huế' => __('Thừa Thiên - Huế', 'woocommerce'),
    'Tiền Giang' => __('Tiền Giang', 'woocommerce'),
    'Trà Vinh' => __('Trà Vinh', 'woocommerce'),
    'Tuyên Quang' => __('Tuyên Quang', 'woocommerce'),
    'Vĩnh Long' => __('Vĩnh Long', 'woocommerce'),
    'Vĩnh Phúc' => __('Vĩnh Phúc', 'woocommerce'),
    'Yên Bái' => __('Yên Bái', 'woocommerce'),
  );

  return $states;
}
function flatsome_vaibekum_custom_checkout_fields( $fields ) {

    // Đổi tên Bang / Hạt thành Tỉnh / Thành Phố
    $fields['state']['label'] = 'Tỉnh / Thành Phố';
    return $fields;
}
add_filter( 'woocommerce_default_address_fields', 'flatsome_vaibekum_custom_checkout_fields' );

// function template_single_title() {
//     wc_get_template( 'single-product/title.php' );
// }

// add_action('woocommerce_single_product_summary', 'template_single_title', 2);


/** CUSTOM DISPLAY MAIN PRICE */
function wc_varb_price_range( $wcv_price, $product ) {
 
    $prefix = sprintf('%s: ', __('Giá chỉ từ', 'wcvp_range'));
 
    $wcv_reg_min_price = $product->get_variation_regular_price( 'min', true );
    $wcv_min_sale_price    = $product->get_variation_sale_price( 'min', true );
    $wcv_max_price = $product->get_variation_price( 'max', true );
    $wcv_min_price = $product->get_variation_price( 'min', true );
 
    $wcv_price = ( $wcv_min_sale_price == $wcv_reg_min_price ) ?
        wc_price( $wcv_reg_min_price ) :
        '<strong class="main_price">' . wc_price( $wcv_min_sale_price ) . '</strong>';
 
    return ( $wcv_min_price == $wcv_max_price ) ?
        '<strong>Giá: </strong>'. $wcv_price :
        sprintf('%s%s', $prefix, $wcv_price);
}
 
add_filter( 'woocommerce_variable_sale_price_html', 'wc_varb_price_range', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'wc_varb_price_range', 10, 2 );

/** CUSTOM DISPLAY SALE PRICE AND REGULAR PRICE */
// Prefix the selected variation prices When discounted for variable products (on sale)
// add_filter( 'woocommerce_format_sale_price', 'prefix_variations_selected_prices', 10, 3 );
// function prefix_variations_selected_prices( $price, $regular_price, $sale_price ) {
//     global $product;

//     // Just for variable products on single product pages
//     if( $product->is_type('variable') && is_product() ) {

//         // Custom texts
//         $price_txt =  __( 'Giá niêm yết', 'woocommerce' ) . ': ';
//         $sale_txt = __(' Giá ưu đãi', 'woocommerce' ).': ';
//         $percent = ( ( $regular_price - $sale_price  ) / $regular_price ) * 100;
//         $saving = $regular_price - $sale_price;
//         $html = '<del class="regular_price">' . $price_txt . wc_price( $regular_price ) . '</del> <strong class="main_price_detail">' . $sale_txt . wc_price( $sale_price ) . '</strong>';
//         $html .= '<p class="saving">Tiết kiệm:'. wc_price( $saving ) . '<span class="sale_percent">'.number_format($percent, 2).'%</span></p>';
//         return $html;
//     }
//     return $price;
// }


add_action( 'woocommerce_single_product_summary', 'woocommerce_total_product_price', 31 );
function woocommerce_total_product_price() {
    global $woocommerce, $product;
    #1 Get product variations
// $product_variations = $product->get_available_variations();

// #2 Get one variation id of a product
// $variation_product_id = $product_variations [0]['variation_id'];

// #3 Create the product object
// $variation_product = new WC_Product_Variation( $variation_product_id );

// #4 Use the variation product object to get the variation prices
// echo $variation_product ->regular_price;
// echo $variation_product ->sale_price;

// var_dump($product->get_available_variations());
    // let's setup our divs
    //echo sprintf('<div id="product_total_price" style="margin-bottom:20px;">%s %s</div>',__('Product Total:','woocommerce'),'<span class="price">'.$product->get_price().'</span>');
    ?>
        <script>
            jQuery(function($){
                function price_to_number(text){
                    var num = text.replace(/,|đ/g,'');
                    return parseInt(num);
                    
                }
                function formatNumber(num) {
                    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
                }
                var price = null, price_save = null, saving = null;
                    currency = '<?php echo get_woocommerce_currency_symbol(); ?>';
     
                $('[name=attribute_kich-thuoc]').change(function(){
                    /* #1 Get product variations */

                        setTimeout(function(){
                            price = $('.regular_price>span').text();
                            price_save = $('.main_price_detail>span').text();
                            
                        }, 400);
                    
                });
               
                $('[name=quantity]').change(function(){
                    if (!(this.value < 1)) {
                        if(price){
                     
                            var numPrice_regular = price_to_number(price);

                            var product_total_regular = formatNumber(parseFloat(numPrice_regular * this.value));
                            $('.regular_price span').html( product_total_regular + ' ' + currency);
                        }
                        if(price_save){
                            var numPrice = price_to_number(price_save);

                            var product_total = formatNumber(parseFloat(numPrice * this.value));

                            $('.main_price_detail span').html( product_total + ' ' + currency);
                        }
                        if(price && price_save){
                          
                            saving = formatNumber(parseFloat(numPrice_regular * this.value) - parseFloat(numPrice * this.value));
                            
                            var numPrice_saving = price_to_number(saving);

                            var product_total_saving = formatNumber(parseFloat(numPrice_saving * this.value));

                            $('.saving span:first').html( product_total_saving + ' ' + currency);
                        }
                     
             
                    }
                });
            });
        </script>
    <?php
}