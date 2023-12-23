<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
   
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    	<link rel="stylesheet" href="../public//css//style.css">
    <title>AdminSite</title>
</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
		<a href="./index.php" class="brand"><i class='bx bxs-smile icon'></i> AdminSite</a>
		<ul class="side-menu">
			<li><a href="./index.php" class="active"><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
			<li class="divider" data-text="main">Main</li>
			<li><a href="./index.php"><i class='bx bxs-chart icon' ></i> Product</a></li>
			<li><a href="../category/index.php"><i class='bx bxs-widget icon' ></i> Categories</a></li>
			<li><a href="../user/index.php"><i class='bx bxs-widget icon' ></i> User</a></li>
		</ul>
	</section>
    <!-- SIDEBAR -->

    <!-- NAVBAR -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu toggle-sidebar'></i>
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search icon'></i>
                </div>
            </form>
            <a href="#" class="nav-link">
                <i class='bx bxs-bell icon'></i>
                <span class="badge">5</span>
            </a>
            <a href="#" class="nav-link">
                <i class='bx bxs-message-square-dots icon'></i>
                <span class="badge">8</span>
            </a>
            <span class="divider"></span>
            <div class="profile">
                <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    alt="">
                <ul class="profile-link">
                    <li><a href="#"><i class='bx bxs-user-circle icon'></i> Profile</a></li>
                    <li><a href="#"><i class='bx bxs-cog'></i> Settings</a></li>
                    <li><a href="#"><i class='bx bxs-log-out-circle'></i> Logout</a></li>
                </ul>
            </div>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <h1 class="title">Dashboard</h1>
            <ul class="breadcrumbs">
                <li><a href="#">Home</a></li>
                <li class="divider">/</li>
                <li><a href="#" class="active">Dashboard</a></li>
            </ul>
            <div class="info-data">
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>1500</h2>
                            <p>Traffic</p>
                        </div>
                        <i class='bx bx-trending-up icon'></i>
                    </div>
                    <span class="progress" data-value="40%"></span>
                    <span class="label">40%</span>
                </div>
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>234</h2>
                            <p>Sales</p>
                        </div>
                        <i class='bx bx-trending-down icon down'></i>
                    </div>
                    <span class="progress" data-value="60%"></span>
                    <span class="label">60%</span>
                </div>
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>465</h2>
                            <p>Pageviews</p>
                        </div>
                        <i class='bx bx-trending-up icon'></i>
                    </div>
                    <span class="progress" data-value="30%"></span>
                    <span class="label">30%</span>
                </div>
                <div class="card">
                    <div class="head">
                        <div>
                            <h2>235</h2>
                            <p>Visitors</p>
                        </div>
                        <i class='bx bx-trending-up icon'></i>
                    </div>
                    <span class="progress" data-value="80%"></span>
                    <span class="label">80%</span>
                </div>
            </div>
            <div class="container mt-0">
                <div class="container">
                    <a href="../product/create.html">
                        <td><button type="button " class="btn btn-primary mt-5">Thêm sản phẩm</button></td>
                    </a>
                </div>
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Chỉnh sửa</th>
                            <th scope="col">xóa</th>
                        </tr>
                    </thead>
                    <tbody id="Product-list">
                        <!-- <tr>
                            <th scope="row">1</th>
                            <td>name</td>
                            <td>  <img src="./image/about.png" alt=""></td>
                            <td>
                              <button onclick="editProduct" type="button" href="edit.html" class="btn btn-primary">
                                <i data-lucile="pencil"></i>Edit
                              </button>
                            </td>
                            <td>
                              <div class="d-flex justify-content-end">
                                <button onclick="deleteProduct" type="button"  class="btn btn-primary">
                                  <i data-lucile="trash-2"></i>Delete
                                </button>
                              </div>
                            </td>
                          </tr> -->
                    </tbody>
                </table>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- NAVBAR -->

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../public/js/main.js"></script>
    <script src="../public/js/admin_product.js"></script>


</body>

</html>