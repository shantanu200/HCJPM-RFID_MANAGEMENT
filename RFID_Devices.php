<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/devices.css">
    <title>Document</title>
</head>
<body class="body">
    <div class="container_add">
        <div class="add_user">
            <div class="head">
                <h2>ADD NEW DATA</h2>
                <h3 id="close"><i class="fa-solid fa-circle-xmark"></i></h3>
            </div>
            <div class="add_form">
                <form action="#">
                    <input type="text" placeholder="User Name">
                    <input type="text" placeholder="Department">
                    <button><i class="fa-solid fa-plus"></i> ADD</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container_table">
        <div class="header">
            <h1>Devices and User</h1>
            <button class="display"><i class="fa-solid fa-user-plus"></i> ADD USER</button>
        </div>
        <div class="tb_wrap">
            <table class="tb_des">
                <thead>
                        <th>Sr.no</th>
                        <th>Card Id</th>
                        <th>User</th>
                        <th>Department</th>
                        <th>Creation Date</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>123456789</td>
                        <td>Shantanu Bhusari</td>
                        <td>Electronics</td>
                        <td>10-02-2022</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>987654321</td>
                        <td>Jaya Bhusari</td>
                        <td>Computer </td>
                        <td>10-02-2022</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>123456789</td>
                        <td>Shantanu Bhusari</td>
                        <td>Electronics</td>
                        <td>10-02-2022</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>123456789</td>
                        <td>Shantanu Bhusari</td>
                        <td>Electronics</td>
                        <td>10-02-2022</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="js/devices.js"></script>
</body>
</html>