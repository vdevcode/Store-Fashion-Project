<?php
include_once "../dao/user.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $hoten = $_POST["hoten"];
    $email = $_POST["email"];
    $dienthoai = $_POST["dienthoai"];
    $is_admin = isset($_POST["is_admin"]) ? 1 : 0;

    if (update_user($user_id, $hoten, $email, $dienthoai, $is_admin)) {
        header("Location: user.php");
        exit();
    }
}

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $user = get_user_by_id($user_id);
} else {
    header("Location: user.php");
    exit();
}

?>

<div class="container">
    <h2>Sửa thông tin người dùng</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
        <div class="form-group">
            <label for="hoten">Họ Tên:</label>
            <input type="text" class="form-control" id="hoten" name="hoten" value="<?php echo htmlspecialchars($user['hoten']); ?>">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>">
        </div>
        <div class="form-group">
            <label for="dienthoai">Số Điện Thoại:</label>
            <input type="text" class="form-control" id="dienthoai" name="dienthoai" value="<?php echo htmlspecialchars($user['dienthoai']); ?>">
        </div>
        <div class="form-group">
            <label for="is_admin">Quyền:</label>
            <input type="checkbox" id="is_admin" name="is_admin" <?php if ($user['is_admin'] == 1) echo 'checked'; ?>>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
