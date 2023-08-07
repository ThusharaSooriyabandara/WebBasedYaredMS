<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background: #100E0E;
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            flex-direction: column;
        }
        .btn {
            float: right;
            background: rgb(35, 174, 202);
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-right: 10px;
            border: none;
            width: 200px;
        }
    </style>
</head>
<body>
    <form action="Trip Data authen.php" method="post">
        <h2> Trip Data </h2>

        <label>Trip ID</label>
        <input type="text" name="Trip_ID" placeholder="Trip ID"><br>

        <label>Status</label><br>
        <select name="CurrentStatus" id="CurrentStatus" onchange="showDateField()">
            <option value="Order">Order</option>
            <option value="Receiving">Receiving</option>
        </select><br><br>

        <label id="dateLabel">Order Out Date</label>
        <input type="datetime-local" name="Order_Out_Date" placeholder="Date"><br>

        <label>Order / Delivery ID</label>
        <input type="text" name="Delivery_ID" placeholder="Order / Delivery ID"><br>

        <label>Total Mileage</label>
        <input type="number" name="Total_Mileage" placeholder="Total Mileage"><br>

        <input type="reset" class="btn btn-primary" name="Reset" value="Reset">
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>

    <script>
        function showDateField() {
            var statusSelect = document.getElementById("CurrentStatus");
            var dateLabel = document.getElementById("dateLabel");

            if (statusSelect.value === "Order") {
                dateLabel.innerHTML = "Order Out Date";
            } else if (statusSelect.value === "Receiving") {
                dateLabel.innerHTML = "Received Date";
            }
        }
    </script>
</body>
</html>