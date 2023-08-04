<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin_page</title>
   
   <style> 
   .header{
      background-color: 	#C0C0C0	;
   }    
     .header .flex .navbar a:hover{  
      width: 200px;
  font-size: 20px;
  padding: 10px;
  height: 60px;
  border: none;
  outline: none;
  background: #c38b8b;
  color: #fff;
  cursor: pointer;
  position: relative;
  z-index: 0;
  border-radius: 9px;
  border-color: aqua;
}
/* .header .flex .navbar a:hover{
   color: #1ddde8;
}
 
.header .flex .navbar a::before {
  position: absolute;
  content: "";
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  left: -2px;
  top: -2px;
  background: linear-gradient(
    124deg,
    #ff2400,
    #e81d1d,
    #e8b71d,
    #e3e81d,
    #1de840,
    #1ddde8,
    #2b1de8,
    #dd00f3,
    #dd00f3
  );
  background-size: 400%;
  z-index: -1;
  filter: blur(5px);
  animation: move 20s linear infinite;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

.header .flex .navbar a::before {
  opacity: 1;
}

.header .flex .navbar a::after {
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #555273;
  left: 0;
  top: 0;
  border-radius: 10px;
}

@keyframes move {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
} */

   </style>
</head>
<body>
   

   <header class="header">

      <div class="flex">

         <a href="admin_page.php" class="logo">Book<span>Store</span></a>

         <nav class="navbar">
            <a href="admin_page.php">Home</a>
            <a href="admin_products.php">Products</a>
            <a href="admin_orders.php">Orders</a>
            <a href="admin_users.php">Users</a>
            <a href="admin_contacts.php">Messages</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-user"></div>
         </div>

         <div class="account-box">
            <p>Username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         <div>New <a href="login.php">login</a> | <a href="register.php">register</a></div>
         </div>

      </div>

   </header>
   </body>
</html>
