<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>click_scroll_top</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div onclick="scrollToTop();" class="scrollTop"><i class="fa fa-chevron-up"></i></div>
    <script>
        window.addEventListener('scroll', function(){
            var scroll = document.querySelector('.scrollTop');
            scroll.classList.toggle("active", window.scrollY > 20);
        })
        function scrollToTop(){
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            })
        }
    </script>
</body>
</html>