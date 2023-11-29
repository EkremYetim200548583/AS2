<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <link rel="stylesheet" href="st.css">
    <style>
        /* Tablo için CSS stilleri */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <!-- ... (diğer HTML içeriği) ... -->

    <?php
    // POST verilerini al
    $fname = $_POST['fname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm-password'] ?? '';

    // Verileri tabloda göster
    echo "<h2>User Data</h2>";
    echo "<table>";
    echo "<tr><th>First Name</th><th>Last Name</th><th>Username</th><th>Password</th><th>Confirm</th></tr>";
    // 10 satır oluştur
    for ($i = 0; $i < 10; $i++) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($fname) . "</td>";
        echo "<td>" . htmlspecialchars($lname) . "</td>";
        echo "<td>" . htmlspecialchars($username) . "</td>";
        echo "<td>" . htmlspecialchars($password) . "</td>";
        echo "<td>" . htmlspecialchars($confirm) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
