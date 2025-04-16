<header>
    <div class="header-wrapper">
        <p class="logo"><a href="./index.php">Polish Restaurant</a></p>
        <nav>
            <ul class="sidebar">
                <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="white"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="contact.php">Reservation</a></li>
                <li><a href="login.php">Admin</a></li>
            </ul>
            <ul class="">
                <li class="hideOnMobile"><a href="index.php">Home</a></li>
                <li class="hideOnMobile"><a href="order.php">Order</a></li>
                <li class="hideOnMobile"><a href="contact.php">Reservation</a></li>
                <li class="hideOnMobile"><a href="login.php">Admin</a></li>
                <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="white"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
            </ul>
        </nav>
    </div>
</header>
<script src="./assets/js/script.js"></script>