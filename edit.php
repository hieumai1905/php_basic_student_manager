<!DOCTYPE html>
<html>
<head>
    <title>Chỉnh sửa Sinh viên</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Chỉnh sửa Sinh viên</h1>
    <form action="" method="POST">
        <input type="hidden" name="action" value="edit">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $sinhVien->getId(); ?>" readonly>
        </div>
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $sinhVien->getName(); ?>">
        </div>
        <div class="form-group">
            <label for="gender">Giới tính:</label>
            <select class="form-control" id="gender" name="gender">
                <option value="Nam" <?php if ($sinhVien->getGender() === 'Nam') echo 'selected'; ?>>Nam</option>
                <option value="Nữ" <?php if ($sinhVien->getGender() === 'Nữ') echo 'selected'; ?>>Nữ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ:</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo $sinhVien->getAddress(); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
</body>
</html>