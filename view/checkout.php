
<section class="checkout_area section_gap">
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Thông Tin Thanh Toán</h3>
                    <form class="row contact_form" action="process_checkout.php" method="post" novalidate="novalidate">
                        
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="nguoinhan_ten" name="nguoinhan_ten" placeholder="Nhập họ và tên người nhận">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="nguoinhan_diachi" name="nguoinhan_diachi" placeholder="Địa chỉ giao hàng">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="nguoinhan_sdt" name="nguoinhan_sdt" placeholder="Số điện thoại người nhận">
                        </div>
                       
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="nguoidat_ten" name="nguoidat_ten" placeholder="Họ và tên của bạn">
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="nguoidat_diachi" name="nguoidat_diachi" placeholder="Địa chỉ của bạn">
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="nguoidat_email" name="nguoidat_email" placeholder="Địa chỉ Email của bạn">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="nguoidat_sdt" name="nguoidat_sdt" placeholder="Số điện thoại của bạn">
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <textarea class="form-control" name="order_notes" id="order_notes" rows="1" placeholder="Ghi chú đơn hàng"></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Đơn Hàng Của Bạn</h2>
                        <ul class="list">
                            <li><a href="#">Sản phẩm <span>Tổng cộng</span></a></li>
                            <li><a href="#">Dâu Tây Tươi <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            <li><a href="#">Cà Chua Tươi <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            <li><a href="#">Bông Cải Xanh Tươi <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Tổng cộng <span>$2160.00</span></a></li>
                            <li><a href="#">Vận chuyển <span>Phí cố định: $50.00</span></a></li>
                            <li><a href="#">Tổng cộng <span>$2210.00</span></a></li>
                        </ul>
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="selector">
                                <label for="f-option5">Thanh toán khi nhận hàng</label>
                                <div class="check"></div>
                            </div>
                        </div>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector">
                                <label for="f-option6">Paypal </label>
                                <img src="img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                        </div>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">Tôi đã đọc và chấp nhận </label>
                            <a href="#">điều khoản & điều kiện*</a>
                        </div>
                        <a class="primarys-btn" href="index.php?pg=dhthanhcong">Mua hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
