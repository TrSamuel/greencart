<!-- Navbar Start -->
<nav class="navbar navbar-expand  navbar-dark sticky-top px-4 py-0" style="background: #fff;">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class=" mb-0" style="color: #548302;"><i class="fa fa-home"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0" style="color: #548302;">
        <i class="fa fa-bars"></i>
    </a>
    <div class="d-none d-md-flex ms-4">
        <input id="searchplant" class="form-control  border-1" type="search" placeholder="Search Plant"
            style="background: #fff;" onsearch="viewPlant(this.value)" onchange="viewPlant(this.value)" <?php if (isset($_SESSION['search_name'])) { ?>
                value="<?php echo $_SESSION['search_name'] ?>" <?php } ?>>
    </div>
    <div class="d-none d-md-flex ms-4">
        <img src="../Assets/Img/filter.png" alt="" style="height: 3em;" onclick="viewFilterbox();">
    </div>

    <div class="navbar-nav align-items-center ms-auto">
        <a href="./UserCart.php" class="nav-link">
            <span class="d-none d-lg-inline-flex">
                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 20pt;"></i>
                <p style="color: #548302; font-weight: bold;">
                    <?php if ($cartCount != 0) {
                        echo $cartCount;
                    }
                    ?>
                </p>
            </span>
        </a>
        <a href="" class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <span class="d-none d-lg-inline-flex">Feedback</span>
        </a>
        <form method="post">
            <button type="submit" name="btn_logout" class="nav-link"
                style="font-weight: bold;font-size: 14pt;border:none;outline:none;background: none;">Log
                out<img width="" class="me-2"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAa9JREFUSEvtls0uBEEQx/9Vs5yFOOAFHBCJixseAduJC06Em4SDxA5jd3gAJBJx47azIuvi4usNOHBwIDyBB5jpkpFsTFi2W5iN0MfuSv+q//XRRajTojpx8YvAAhpdRzfpTLOpWprC+4McHpL2Vi9WPjogfCxAlym0YifAXimnJ0GQeM8KnC3wDoApW+grnIZLbnRoDVY+nYrQEAFXAp4zd0CfvcAIK8WczluDswXnHJABgC4CNxo0BWcL/CIvgNXA1d4/+J1yah2tEvF84OrF+DAVqVUefUJ8BNBtJZ5qDb2iM03E4VNxCZffHmPlO+Misgug0TaRqjlTM7kGPWRaHN4gYLZygW3pBG54/hb+KTiOJyKnLJB+Uwmr2QWufteUPgWPrKGNdRxT9KUKjmHKQ6M4vJVsiz8udfKVKs/TQthMLbmS8BEf/SxcBugmtXKqOBDHnSJeKC3r+dQaSPV6/P8kzAqvZueqdU39BgGftyGYqeXgR+cEUkU3CqwHgTEP7SHzCQidX4DvBzk98aVhL4Z5Hvi6AT3x92gKpzC8K67iMWlvNWWagkzs/h74GbbwES5IgaMHAAAAAElFTkSuQmCC" />
            </button>
        </form>
    </div>
</nav>
<!-- Navbar End -->



<script>
    function viewPlant(searchName) {
        $.ajax({
            url: '../Assets/AjaxPages/AjaxSearchPlantOthers.php?searchName=' + searchName,
            success: function(data){
                    window.location = './UserHomepage.php';
            },
        })

    }


    function viewFilterbox() {
        $.ajax({
            url: '../Assets/AjaxPages/AjaxViewFilterbox.php?ftr',
        })

        window.location = './UserHomepage.php';
    }
</script>