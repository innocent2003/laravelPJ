<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@600&family=Roboto:ital,wght@0,400;0,500;1,500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style_admin.css" />
  </head>

  <body class="">
    <div class="container-farther">
      <div class="container">
        <div class="sidebar sidebar-active">
              <ul>
                    <li class="btn-active">
                        <i class="fa-solid fa-bars"></i>
                        <div class="title btn-navbar">Admin</div>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-chart-line"></i>
                            <div class="title">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-user"></i>
                            <div class="title">Customers</div>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/product">
                            <i class="fa-solid fa-folder"></i>
                            <div class="title">Product</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-sort"></i>
                            <div class="title">Orders</div>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/payment">
                            <i class="fa-solid fa-money-bill"></i>
                            <div class="title">Payment Method</div>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/shipping">
                            <i class="fa-solid fa-truck-moving"></i>
                            <div class="title">Shipping Method</div>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/size">
                            <i class="fa-solid fa-text-width"></i>
                            <div class="title">Size</div>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/color">
                            <i class="fa-solid fa-paint-roller"></i>
                            <div class="title">Color</div>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/category">
                            <i class="fa-solid fa-book"></i>
                            <div class="title">Category</div>
                        </a>
                    </li>
                </ul>
        </div>
        <div class="main main-active">
          <div class="top-bar">
            <div class="phone">
              <div id="btn-active-phone"><i class="fa-solid fa-bars"></i></div>
            </div>
            <div class="search">
              <input
                type="text"
                name="search"
                placeholder="search here"
              /><label for="search"
                ><i class="fa-solid fa-magnifying-glass"></i
              ></label>
            </div>
            <i class="fa-solid fa-bell"></i>
            <div class="user"><img src="../image/doctor-1.png" alt="" /></div>
          </div>
          
          <div class="tables">
            <div class="last-appointments">
              <div class="heading">
                <h2>Employees</h2>
                <a href="" class="btn">View All</a>
              </div>
              <table class="appointments">
                <thead>
                  <td>Username</td>
                  <td>Email</td>
                  <td>Phone</td>
                  <td>Actions</td>
                </thead>
                <tbody>
                  <tr>
                    <td>Apple Watch</td>
                    <td>$200</td>
                    <td>1</td>
                    <td>
                      <i class="fa-solid fa-eye"></i>
                      <i class="fa-regular fa-pen-to-square"></i>
                      <i class="fa-solid fa-trash"></i>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="doctor-visiting">
              <div class="heading">
                <h2>Insert Employees</h2>
                <a href="" class="btn">View All</a>
              </div>
              <form action="">
                <div>
                  <label for="username">User Name</label><br />
                  <input type="text" id="username" /><br />
                </div>
                <div>
                  <label for="phone">Phone</label><br />
                  <input type="text" id="phone" /><br />
                </div>

                <div>
                  <label for="email">Email address</label><br />
                  <input type="text" id="email" /><br />
                </div>
                <div>
                  <label for="password">Password</label><br />
                  <input type="text" id="password" /><br />
                </div>

                <button type="submit">Insert</button>
              </form>
            </div>
            <div class="blur"></div>
          </div>
        </div>
      </div>
    </div>

    <script src="style_admin.js"></script>
  </body>
</html>
