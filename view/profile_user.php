
    <div class="container main-secction" style="padding: 0px;">
        <div class="" style="padding-bottom: 70px;">
            <div class="col-md-12 col-sm-12 col-xs-12 image-section">
                <img src="layout/img/people/bgr.jpg">
            </div>
            <div class=" user-left-part">
                <div class=" col-xs-12 user-profil-part pull-left">
                        <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center" >
                        <img src="layout/img/banner/b18.jpg" class="avatar rounded-circle" alt="avatar">
                        <!-- <input type="file" class="text-center center-block file-upload"> -->
                        </div>
                </div>
                <div style="margin-left: 234px">
                    <h3><?=$user_profile['hoten'];?></h3>
                 </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin: 24px 24px;">
	<div class="row" style="margin-left: 52px;">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="index.php?pg=profile_user&act=profile_user" class="list-group-item list-group-item-action active">THÔNG TIN TÀI KHOẢN</a>
              <a href="index.php?pg=profile_user&act=purchase_history" class="list-group-item list-group-item-action">LỊCH SỬ MUA HÀNG</a>
              <a href="" class="list-group-item list-group-item-action">ĐƠN HÀNG</a>
              <a href="index.php?pg=profile_user&act=user_updates" class="list-group-item list-group-item-action">CÀI ĐẶT</a>
            </div>
		</div>
    <?php
    if($_GET['pg']=='profile_user' && !isset($_GET['act'])){
        $_GET['act']= 'profile_user';
    }
    switch ($_GET['act']) {
        case 'profile_user':
            echo '<div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>THÔNG TIN CÁ NHÂN</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                      <div class="form-group row">
                                        <label for="username" class="col-4 col-form-label">Họ Tên</label> 
                                        <div class="col-8">
                                          <input id="username" name="username" placeholder="Họ Tên" required="required" class="form-control here" type="text" value="'.$user_profile['hoten'].'">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="number-phone" class="col-4 col-form-label">Số Điện Thoại</label> 
                                        <div class="col-8">
                                          <input id="number-phone" name="number-phone" placeholder="Số Điện Thoại" class="form-control here" required="required" type="text" value="'.$user_profile['dienthoai'].'">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email</label> 
                                        <div class="col-8">
                                          <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text" value="'.$user_profile['email'].'">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="address" class="col-4 col-form-label">Địa Chỉ</label> 
                                        <div class="col-8">
                                          <textarea id="address" name="address" cols="40" rows="4" class="form-control">'.$user_profile['diachi'].'</textarea>
                                        </div>
                                      </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            break;
        case 'user_updates':
            echo '<div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>THÔNG TIN CÁ NHÂN</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                      <div class="form-group row">
                                        <label for="username" class="col-4 col-form-label">Họ Tên</label> 
                                        <div class="col-8">
                                          <input id="username" name="username" placeholder="Họ Tên" required="required" class="form-control here" type="text" value="'.$user_profile['hoten'].'">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="number-phone" class="col-4 col-form-label">Số Điện Thoại</label> 
                                        <div class="col-8">
                                          <input id="number-phone" name="number-phone" placeholder="Số Điện Thoại" class="form-control here" required="required" type="text" value="'.$user_profile['dienthoai'].'">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email</label> 
                                        <div class="col-8">
                                          <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text" value="'.$user_profile['email'].'">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="address" class="col-4 col-form-label">Địa Chỉ</label> 
                                        <div class="col-8">
                                          <textarea id="address" name="address" cols="40" rows="4" class="form-control">'.$user_profile['diachi'].'</textarea>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="newpass" class="col-4 col-form-label">Mật Khẩu Mới</label> 
                                        <div class="col-8">
                                          <input id="newpass" name="newpass" placeholder="Mật Khẩu" class="form-control here" type="text">
                                        </div>
                                      </div> 
                                      <div class="form-group row">
                                        <div class="offset-4 col-8">
                                          <button name="submit" type="submit" class="btn btn-primary">Cập Nhật</button>
                                        </div>
                                      </div>
                                    </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>';
            break;
        case 'purchase_history':
          break;
    }
    ?>
		
	</div>
</div>

<!-- <script>
    $(document).ready(function() {

var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(".file-upload").on('change', function(){
    readURL(this);
});
});
</script> -->

