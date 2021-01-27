<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form action="/product" method="POST">
    @csrf
    <p>
        <input type="text" name="productDescription" placeholder="Mo ta san pham">
    </p>
    <p>
        <input type="number" name="listPrice" placeholder="nhap gia san pham">
    </p>
    <p>
        <input type="number" name="discountPercent" placeholder="nhap ti le chiet khau">
    </p>
    <p>
        <button type="submit">Product Description</button>
    </p>
</form>
</body>
</html>
