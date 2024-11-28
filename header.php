<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
     <link rel="shortcut icon" href="img/logo/favicon.jpg" type="image/x-icon">
    <title>Parth Creation</title>
</head>
<body class="bg-[#E9EBED]">
   
     <!-- Navbar -->
        <nav class="sticky top-0 z-50 container mx-auto p-4 bg-[#ffffff45] backdrop-blur-md max-w-full">
            <!-- Flex Container -->
            <div class="flex items-center justify-between">
                <!-- Logo -->  
                <div>
                    <!-- <div class="" style="height:80px; width:180px; border:1px solid black;"></div> -->
                    <a href="#"><img src="img/logo/logo-nav.png" alt="Parth Creation" class="cursor-pointer h-20"></a>
                </div>
                <!-- Navbar Links -->
                <div class="hidden space-x-6 text-[#11274F] md:flex">
                    <a href="index.php" class="hover:text-[#7E8C90]">Home</a>
                    <a href="products.php" class="hover:text-[#7E8C90]">Products</a>
                    <a href="about.php" class="hover:text-[#7E8C90]">About Us</a>
                    <a href="contact.php" class="hover:text-[#7E8C90]">Contact</a>
                </div>
                <!-- Button -->
                    <a href="#" class="hidden p-2 px-4 pt-2 text-white bg-[#618190] rounded-md baseline hover:bg-[#2f434d] md:block">
                        Login
                    </a>
                
                <!-- Hamburger Icon -->
                <button class="block hamburger md:hidden focus:outlint-none" id="menu-btn">
                    <span class="hamburger-top"></span>
                    <span class="hamburger-middle"></span>
                    <span class="hamburger-bottom"></span>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="md:hidden">
                <div id="menu" class="absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 
                font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                    <a href="index.php">Home</a>
                    <a href="products.php">Products</a>
                    <a href="about.php">About Us</a>
                    <a href="contact.php">Contact</a>
                    <a href="#" class="p-2 px-4 text-white bg-[#618190] rounded hover:bg-[#2f434d]">Login</a>
                </div>
            </div>
        </nav>
