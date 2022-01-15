<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link rel="stylesheet" href="../css/admin.css">
<body>
    <div class="container_navbar">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                        <span class="title">Instructor</span>
                    </a>
                </li>
                <li data-list="tab_1" class="active hovered">
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li data-list="tab_2">
                    <a href="#">
                        <span class="icon"><ion-icon name="chatbox-outline"></ion-icon></ion-icon></span>
                        <span class="title">Admin</span>
                    </a>
                </li>
                <li data-list="tab_3">
                    <a href="#">
                        <span class="icon"><ion-icon name="people-outline"></span>
                        <span class="title">Categories</span>
                    </a>
                </li>
                <li data-list="tab_4">
                    <a href="#">
                        <span class="icon"><ion-icon name="analytics-outline"></ion-icon></span>
                        <span class="title">Products</span>
                    </a>
                </li>
                <li data-list="tab_5">
                    <a href="#">
                        <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                        <span class="title">Feedbacks</span>
                    </a>
                </li>
                <li data-list="tab_5">
                    <a href="#">
                        <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                        <span class="title">Orders</span>
                    </a>
                </li>
                <li data-list="tab_5">
                    <a href="#">
                        <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                        <span class="title">User</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
       

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $('.main .tab_content').hide();
            $('.main .tab_content:first-child').show();

            $("ul li").click(function(){
                $("ul li").removeClass("active");
                $("ul li").removeClass("hovered");
                $(this).addClass("active");
                $(this).addClass("hovered");
                
                var current_tab_value = $(this).attr('data-list');
                $('.main .tab_content').hide();
                $('.' + current_tab_value).show();
            });
        });
    </script>
    <!-- <script>
        // Search filter
        const search = document.getElementById("search_4")
        const productName = document.querySelectorAll("#table_muonsach tbody tr");
        search.addEventListener("keyup", filterProducts);
        function filterProducts(e) {
            const text = e.target.value.toLowerCase();
            // console.log(productName[0]);
            productName.forEach(function(product) {
                const item = product.firstChild.textContent;
                if (item.toLowerCase().indexOf(text) != -1) {
                    product.parentElement.parentElement.style.display = "block";
                } else {
                    product.parentElement.parentElement.style.display = "none"
                }
            })
        }    
    </script> -->
</body>
</html>