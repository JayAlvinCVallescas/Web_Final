<?php require '.\inc\header.php' ?>
<?php require 'signlog.php' ?>
<?php include 'product-detail.php' ?>
<?php include 'order-items.php' ?>
<div class="market-container-top">
    <img src="./images/hang.jpg" alt="">
    <div class="market-title">
        <h1>MARKET <span>PLACE</span></h1>
    </div>
</div>
<div class="market-container">
    <div class="market-container-box">
        <div class="market-title">
            <h1>STORE</h1>
            <hr>
        </div>
        <div class="first-container">
            <div class="first-box">
                <div class="first-box-top">
                    <img src="./images/mouse.png" alt="">
                    <div class="first-box-text">
                        <h3>PC</h3>
                        <h3><span>VIEW GAMES</span></h3>
                    </div>
                </div>
                <div class="first-box-products">
                    <img src="./images/hades.jpg" onclick="clickMarketOne()" alt="">
                </div>
            </div>
            <div class="first-box">
                <div class="first-box-top">
                    <img src="./images/ps4.png" alt="">
                    <div class="first-box-text">
                        <h3>PSP</h3>
                        <h3><span>VIEW GAMES</span></h3>
                    </div>
                </div>
                <div class="first-box-products product-four">
                    <img src="./images/zelda.jpg" onclick="clickMarketTwo()" alt="">
                    <img src="./images/overwatch.jpg" onclick="clickMarketThree()" alt="">
                    <img src="./images/Fallout.jpg" onclick="clickMarketFour()" alt="">
                    <img src="./images/Dishonored2.jpg" onclick="clickMarketFive()" alt="">
                </div>
            </div>
            <div class="first-box">
                <div class="first-box-top">
                    <img src="./images/xbox.png" alt="">
                    <div class="first-box-text">
                        <h3>XBOX</h3>
                        <h3><span>VIEW GAMES</span></h3>
                    </div>
                </div>
                <div class="first-box-products">
                    <img src="./images/CallofDuty.jpg" onclick="clickMarketSix()" alt="">
                </div>
            </div>
        </div>
        <div class="top-title">
            <hr>
            <h1> <span>OTHER</span> GAMES</h1>
            <hr style="width:70em;">
        </div>
        <div class="market-second-container">
            <i id="left" class="fa fa-arrow-left"></i>
            <ul class="second-container-slider">
                <li class="card">
                    <div class="img">
                        <img src="./images/Destiny2.jpg" alt="">
                    </div>
                    <p class="game-title"><b>Destiny 2</b></p>
                    <p class="price"><i class="fa fa-tag"></i> 1500 php</p>
                    <button class="btn add-to-cart">ADD TO CART</button>
                </li>
                <li class="card">
                    <div class="img">
                        <img src="./images/Genshin.jpg" alt="">
                    </div>
                    <p class="game-title"><b>Genshin</b></p>
                    <p class="price"><i class="fa fa-tag"></i> 500 php</p>
                    <button class="btn add-to-cart">ADD TO CART</button>
                </li>
                <li class="card">
                    <div class="img">
                        <img src="./images/valorant.jpg" alt="">
                    </div>
                    <p class="game-title"><b>Valorant</b></p>
                    <p class="price"><i class="fa fa-tag"></i> 2500 php</p>
                    <button class="btn add-to-cart">ADD TO CART</button>
                </li>
                <li class="card">
                    <div class="img">
                        <img src="./images/TeamFortress2.jpg" alt="">
                    </div>
                    <p class="game-title"><b>Fortress 2</b></p>
                    <p class="price"><i class="fa fa-tag"></i> 150 php</p>
                    <button class="btn add-to-cart">ADD TO CART</button>
                </li>
                <li class="card">
                    <div class="img">
                        <img src="./images/Deathloop.png" alt="">
                    </div>
                    <p class="game-title"><b>Deathloop</b></p>
                    <p class="price"><i class="fa fa-tag"></i> 600 php</p>
                    <button class="btn add-to-cart">ADD TO CART</button>
                </li>
                <li class="card">
                    <div class="img">
                        <img src="./images/Kena.png" alt="">
                    </div>
                    <p class="game-title"><b>Kena</b></p>
                    <p class="price"><i class="fa fa-tag"></i> 200 php</p>
                    <button class="btn add-to-cart">ADD TO CART</button>
                </li>
                <li class="card">
                    <div class="img">
                        <img src="./images/Elder.jpg" alt="">
                    </div>
                    <p class="game-title"><b>Elder Ring</b></p>
                    <p class="price"><i class="fa fa-tag"></i> 200 php</p>
                    <button class="btn add-to-cart">ADD TO CART</button>
                </li>
                <li class="card">
                    <div class="img">
                        <img src="./images/Child.jpg" alt="">
                    </div>
                    <p class="game-title"><b>Child Of Light</b></p>
                    <p class="price"><i class="fa fa-tag"></i> 200 php</p>
                    <button class="btn add-to-cart">ADD TO CART</button>
                </li>
                <li class="card">
                    <div class="img">
                        <img src="./images/Godofwar.jpg" alt="">
                    </div>
                    <p class="game-title"><b>God Of War</b></p>
                    <p class="price"><i class="fa fa-tag"></i> 200 php</p>
                    <button class="btn add-to-cart">ADD TO CART</button>
                </li>
            </ul>
            <i id="right" class="fa fa-arrow-right"> </i>
        </div>
        <div class="top-title">
            <hr>
            <h1> <span>FEATURED</span> GAMES</h1>
            <hr style="width:70em;">
        </div>
        <div class="market-third-container">
            <div class="market-third-box">
                <img src="./images/apex.jpg" alt="">
                <div class="market-third-content">
                    <h3 class="game-title">APEX</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    <p>
                        Apex Legends is a free-to-play battle royale-hero shooter game developed
                        by Respawn Entertainment and published by Electronic Arts.
                        It was released for PlayStation 4, Windows, and Xbox One in February 2019
                    </p>
                    <p class="price"><i class="fa fa-tag"></i> 200 php</p>
                </div>
                <button class="btn add-to-cart">ADD TO CART</button>
            </div>
            <div class="market-third-box">
                <img src="./images/gris.jpg" alt="">
                <div class="market-third-content">
                    <h3 class="game-title">Gris</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <p>
                        Gris is a hopeful young girl lost in her own world,
                        dealing with a painful experience in her life. Her journey through sorrow is
                        manifested in her dress, which grants new abilities to better navigate her faded reality.
                    </p>
                    <p class="price"><i class="fa fa-tag"></i> 800 php</p>
                </div>
                <button class="btn add-to-cart">ADD TO CART</button>
            </div>
            <div class="market-third-box">
                <img src="./images/cyberpunk.jpg" alt="">
                <div class="market-third-content">
                    <h3 class="game-title">Cyberpunk</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <p>
                        Cyberpunk is a subgenre of science fiction in a dystopian futuristic setting that tends to focus on
                        such as artificial intelligence and cybernetics, juxtaposed with societal collapse, dystopia or decay.
                    </p>
                    <p class="price"><i class="fa fa-tag"></i> 1300 php</p>
                </div>
                <button class="btn add-to-cart">ADD TO CART</button>
            </div>
            <div class="market-third-box">
                <img src="./images/moonlighter.jpg" alt="">
                <div class="market-third-content">
                    <h3 class="game-title">Moonlighter</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    <p>Moonlighter is an action RPG indie game developed by Spanish indie studio Digital Sun and released for Microsoft Windows, macOS,
                        Linux, PlayStation 4, and Xbox One on May 29, 2018.
                    </p>

                    <p class="price"><i class="fa fa-tag"></i> 800 php</p>
                </div>
                <button class="btn add-to-cart">ADD TO CART</button>
            </div>
        </div>
        <div class="top-title">
            <hr>
            <h1><span>MOST</span> POPULAR</h1>
            <hr style="width:70em;">
        </div>
        <div class="market-forth-container">
            <div class="market-forth-box">
                <img src="./images/apex.jpg" alt="">
                <div class="market-forth-box-content">
                    <h3 class="game-title">APEX</h3>
                    <div>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5 class="price"><i class="fa fa-tag"></i> 200 php</h5>
                </div>
                <button class="btn add-to-cart">ADD TO CART</button>
            </div>
            <div class="market-forth-box">
                <img src="./images/zelda.jpg" alt="">
                <div class="market-forth-box-content">
                    <h3 class="game-title">Zelda</h3>
                    <div>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5 class="price"><i class="fa fa-tag"></i> 2000 php</h5>
                </div>
                <button class="btn add-to-cart">ADD TO CART</button>
            </div>
            <div class="market-forth-box">
                <img src="./images/witcher.jpg" alt="">
                <div class="market-forth-box-content">
                    <h3 class="game-title">The Witcher</h3>
                    <div>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5 class="price"><i class="fa fa-tag"></i> 700 php</h5>
                </div>
                <button class="btn add-to-cart">ADD TO CART</button>
            </div>
            <div class="market-forth-box">
                <img src="./images/detroit.jpg" alt="">
                <div class="market-forth-box-content">
                    <h3 class="game-title">Detroit</h3>
                    <div>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h5 class="price"><i class="fa fa-tag"></i> 800 php</h5>
                </div>
                <button class="btn add-to-cart">ADD TO CART</button>
            </div>
            <div class="market-forth-box">
                <img src="./images/sifu.png" alt="">
                <div class="market-forth-box-content">
                    <h3 class="game-title">SIFU</h3>
                    <div>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5 class="price"><i class="fa fa-tag"></i> 900 php</h5>
                </div>
                <button class="btn add-to-cart">ADD TO CART</button>
            </div>
            <div class="market-forth-box">
                <img src="./images/faera.jpg" alt="">
                <div class="market-forth-box-content">
                    <h3 class="game-title">Faeria</h3>
                    <div>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5 class="price"><i class="fa fa-tag"></i> 1000 php</h5>
                </div>
                <button class="btn add-to-cart">ADD TO CART</button>
            </div>
            <div class="market-forth-box">
                <img src="./images/warframe.jpg" alt="">
                <div class="market-forth-box-content">
                    <h3 class="game-title">Warframe</h3>
                    <div>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5 class="price"><i class="fa fa-tag"></i> 1100 php</h5>
                </div>
                <button class="btn add-to-cart">ADD TO CART</button>
            </div>
            <div class="market-forth-box">
                <img src="./images/Horizon.jpg" alt="">
                <div class="market-forth-box-content">
                    <h3 class="game-title">Horizon</h3>
                    <div>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5 class="price"><i class="fa fa-tag"></i> 1000 php</h5>
                </div>
                <button class="btn add-to-cart">ADD TO CART</button>
            </div>
        </div>
    </div>
    <?php require '.\inc\footer.php' ?>