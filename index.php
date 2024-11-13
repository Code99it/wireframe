<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
</head>
<body>
    <main class="wrapper">
        <section class="above_the_fold">
            <header class="mobile">
                <div class="hamburger" id="hamburger" onclick="hamburgerClick()">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="logo">MOB</div>
            </header>
            <header id="mobile_menu" class="mobile_menu out_of_viewport">
                <div class="title">
                    <div>LOGO</div>
                    <button type="button" onclick="mobileMenuClose()">&#x2715;</button>
                </div>
                <nav>
                    <a href="">Mobile 1</a>
                    <a href="">Mobile 2</a>
                    <a href="">Mobile 3</a>
                    <a href="">Mobile 4</a>
                    <a href="">Mobile 5</a>
                </nav>
            </header>
            <header class="desktop">
                <div class="logo">LOGO</div>
                <nav>NAV NAV NAV NAV</nav>
                <div style="display:flex">
                    <img class="icon" src="./assets/img/icon_magnify_808080.png" alt="Magnify glass">
                    <div style="width:20px"></div>
                    <img class="icon" src="./assets/img/icon_user_808080.png" alt="User icon">
                </div>
            </header>
        </section>
        <section class="content">
            <span>Content</span>
        </section>
        <section class="page_footer">
            <footer></footer>
        </section>
    </main>
    <main class="easteregg">Well, you've got some nerve! At this screen resolution, it really doesn’t make any sense anymore. Could you please be so kind and make the browser window bigger? thx.</main>

<script>
    
    const ham     = document.getElementById("hamburger");
    const mobmenu = document.getElementById("mobile_menu");

    function hamburgerClick() {
        console.log("hamburgerClick");
        ham.classList.remove("slide_in_from_the_left");
        ham.classList.add("slide_out_to_the_left");
        mobmenu.classList.add("slide_in_from_the_left");
    }

    function mobileMenuClose() {
        console.log("mobileMenuClose");
        mobmenu.classList.remove("slide_in_from_the_left");
        mobmenu.classList.add("slide_out_to_the_left");
        ham.classList.add("slide_in_from_the_left");
    }

</script>

</body>
</html>