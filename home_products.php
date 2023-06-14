<?php
session_start(); // Start the session

// Check if the user is logged in and retrieve the emailaddress
$emailaddress = isset($_SESSION["emailaddress"]) ? $_SESSION["emailaddress"] : "";

function logout()
{
    // Clear the cart items in the session
    unset($_SESSION["cart_items"]);

    // Clear all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to index.php
    header("Location: index.php");
    exit;
}

// Check if the logout button is clicked
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["logout"])) {
    logout();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- displays site properly based on user's device -->
    <link href="home_products.css" rel="stylesheet">
    <!-- ICON -->
    <link rel="icon" type="image/png" sizes="32x32" href="images\stickerclub circle logo PNG.png">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Sticker Club | Home</title>

</head>

<body>
    <main>
        <div style="padding: 10px; display: flex; justify-content: space-between; align-items: center;">
            <img src="images\1.png" alt="Logo" style="width: 200px; align-self: flex-start;">
            <form method="post" action="">
                <button type="submit" class="logout-button" name="logout">Logout</button>
            </form>
        </div>

        <div>
            <div class="row">
                <div class="column">
                    <div class="flex-box">
                        <div class="top-image">
                            <img src="images/11.png" class="equilibrium-image" alt="aespa-sticker">
                            <div class="icon-background">
                                <img src="images/icon-view.svg" class="icon-view">
                            </div>
                        </div>

                        <div class="equilibrium-header">K-pop Aespa Vinyl</div>

                        <p> Celebrate the magic of K-pop with Aespa.</p>

                        <div class="crypto-cost">29 PHP
                            <span><button class="add-to-cart" id="product1" data-product="K-pop Aespa">Add to
                                    Cart</button></span>
                        </div>
                        <hr>
                        <div class="creation"><img src="images/stickerclub circle logo PNG.png" class="icon-avatar"
                                alt="clock icon">
                            <div class="creation-name"><span>Category </span>K-Pop</div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="flex-box">
                        <div class="top-image">
                            <img src="images/33.png" class="equilibrium-image" alt="jujutsu-sticker">
                            <div class="icon-background">
                                <img src="images/icon-view.svg" class="icon-view">
                            </div>
                        </div>

                        <div class="equilibrium-header">Jujutsu Kaisen Vinyl</div>

                        <p> Enter the dark world of Jujutsu Kaisen.</p>

                        <div class="crypto-cost">25 PHP
                            <span><button class="add-to-cart" id="product2" data-product="Jujutsu Kaisen">Add to
                                    Cart</button></span>
                        </div>
                        <hr>
                        <div class="creation"><img src="images/stickerclub circle logo PNG.png" class="icon-avatar"
                                alt="clock icon">
                            <div class="creation-name"><span>Category </span>Anime</div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="flex-box">
                        <div class="top-image">
                            <img src="images/39.png" class="equilibrium-image" alt="nwjns-sticker">
                            <div class="icon-background">
                                <img src="images/icon-view.svg" class="icon-view">
                            </div>
                        </div>

                        <div class="equilibrium-header">NewJeans Vinyl</div>

                        <p> Express your style of fashion and self-expression with NewJeans.</p>

                        <div class="crypto-cost">29 PHP
                            <span><button class="add-to-cart" id="product3" data-product="NewJeans">Add to
                                    Cart</button></span>
                        </div>
                        <hr>
                        <div class="creation"><img src="images/stickerclub circle logo PNG.png" class="icon-avatar"
                                alt="clock icon">
                            <div class="creation-name"><span>Category </span>K-Pop</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <div class="flex-box">
                        <div class="top-image">
                            <img src="images/45.png" class="equilibrium-image" alt="pinoy-2.0">
                            <div class="icon-background">
                                <img src="images/icon-view.svg" class="icon-view">
                            </div>
                        </div>

                        <div class="equilibrium-header">Pinoy 2.0 Stickers Vinyl</div>

                        <p> Show your Pinoy pride with these vibrant stickers.</p>

                        <div class="crypto-cost">25 PHP
                            <span><button class="add-to-cart" id="product4" data-product="Pinoy 2.0">Add to
                                    Cart</button></span>
                        </div>
                        <hr>
                        <div class="creation"><img src="images/stickerclub circle logo PNG.png" class="icon-avatar"
                                alt="clock icon">
                            <div class="creation-name"><span>Category </span>Pinoy</div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="flex-box">
                        <div class="top-image">
                            <img src="images/53.png" class="equilibrium-image" alt="strawberry-kiwi">
                            <div class="icon-background">
                                <img src="images/icon-view.svg" class="icon-view">
                            </div>
                        </div>

                        <div class="equilibrium-header">Strawberry & Kiwi Dessert</div>

                        <p> Indulge in the sweetness of Strawberry & Kiwi.</p>

                        <div class="crypto-cost">35 PHP
                            <span><button class="add-to-cart" id="product5" data-product="S&K">Add to
                                    Cart</button></span>
                        </div>
                        <hr>
                        <div class="creation"><img src="images/stickerclub circle logo PNG.png" class="icon-avatar"
                                alt="clock icon">
                            <div class="creation-name"><span>Category </span>StickerClub Line</div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="flex-box">
                        <div class="top-image">
                            <img src="images/56.png" class="equilibrium-image" alt="pinoy-3.0">
                            <div class="icon-background">
                                <img src="images/icon-view.svg" class="icon-view">
                            </div>
                        </div>

                        <div class="equilibrium-header">Pinoy 3.0 Stickers Vinyl</div>

                        <p> Upgrade your sticker game with Pinoy 3.0.</p>

                        <div class="crypto-cost">25 PHP
                            <span><button class="add-to-cart" id="product6" data-product="Pinoy 3.0">Add to
                                    Cart</button></span>
                        </div>
                        <hr>
                        <div class="creation"><img src="images/stickerclub circle logo PNG.png" class="icon-avatar"
                                alt="clock icon">
                            <div class="creation-name"><span>Category </span>Pinoy</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="column" style="text-align: center;">
                    <button class="checkout-button" onclick="window.location.href = 'checkout.php';">Go To Cart</button>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Retrieve the add-to-cart buttons
        var addToCartButtons = document.querySelectorAll('.add-to-cart');
        // Retrieve the checkout button
        var checkoutButton = document.querySelector('.checkout-button');

        // Add event listeners to each add-to-cart button
        addToCartButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const addedText = 'Added';
                var product = this.getAttribute('data-product');
                var quantity = 1; // Initial quantity

                if (button.innerText !== addedText) {
                    button.innerText = addedText;
                    button.style.backgroundColor = 'blue';

                    // Send an AJAX request to a PHP script to handle the cart update
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'add_to_cart.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                            // Handle the response
                            console.log(xhr.responseText);
                        }
                    };

                    // Construct the request data
                    var requestData = 'emailaddress=<?php echo urlencode($emailaddress); ?>&product=' + encodeURIComponent(product) + '&quantity=' + quantity;

                    // Send the request
                    xhr.send(requestData);

                    setTimeout(function () {
                        button.innerText = 'Add to Cart';
                        button.style.backgroundColor = '#85d9e6';
                    }, 2000);
                }
            });
        });
        checkoutButton.addEventListener('click', function () {
            // Redirect to checkout.php
            window.location.href = 'checkout.php';
        });
    </script>
</body>

</html>