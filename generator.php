<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $customer = $_POST['customer'];
    $nationality = $_POST['nationality'];

    $id = $customer.'-'.$nationality.'-'.'A-'.$random_base64 = base64_encode(random_bytes(18));
    $passwordverify = password_hash($password, PASSWORD_BCRYPT);

    echo 'ID: '.$id.' PASS: '.$passwordverify.' type of user: '. $customer;
?>
<form method="POST">
    <input name="email" type="email" placeholder="email">
    <input name="password" type="password" placeholder="password">
    <label for="customer">Choose a type:</label>
    <select name="customer" id="customer">
        <option value="INDI">Invidual</option>
        <option value="CORP">Corporation</option>
    </select>
    <label for="nationality">Choose a nationality:</label>
    <select name="nationality" id="customer">
        <option value="DE">Germany</option>
        <option value="CH">Switzerland</option>
    </select>
    <input type="submit" value="Erstellen">
</form>