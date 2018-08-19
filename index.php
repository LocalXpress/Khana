<head>
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="semantic.css">
    <link rel="stylesheet" type="text/css" href="/css/indexpage.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width"/>
    <script src="semantic.js"></script>


</head>

<body>
<!--
================================================================================================
                                      END HEADER
================================================================================================
-->
<?php include 'header.php'; ?>
    <div id="TableBody">    
        <table class="ui celled table">
            <div>   
                <thead>
                    <tr id="FullScreenHeader">
                        <th class="table_item_header">
                            <div class="ui stackable grid">
                                <div class="six wide column">
                                    ITEM
                                </div>
                                <div class="two wide column">
                                    COST
                                </div>
                                <div class="two wide column">
                                    NUMBER
                                </div>
                                <div class="two wide column">
                                    ORDER
                                </div>
                            <div class="two wide column">
                                TOTAL COST
                            </div>
                            <div class="two wide column">
                                
                            </div>    
                        </div>
                        </th>
                    </tr>
                </thead>
            </div>

            <tbody>
<!--
===============================================================================================            
            DISH 1
===============================================================================================
-->        
                <tr>
                  <td>
                    <div class="ui stackable grid">
                        <div class="six wide column">
                            Egg Roll
                        </div>
                        <div class="two wide column">
                            <i class="rupee sign icon"></i>45.00
                        </div>
                        <div class="two wide column">
                            0
                        </div>
                        <div class="two wide column">
                            <div class="ui ignored icon font buttons">
                                <button class="ui tiny green inverted button"><i class="plus icon"></i></a>
                                <button class="ui tiny red   inverted button"><i class="minus icon"></i></a>
                            </div>
                        </div>
                         <div class="two wide column">
                            <i class="rupee sign icon"></i>0.00
                        </div>
                        <div class="two wide column">
                            <a href="#" id="dish1Button"><i class="ellipsis horizontal icon"></i></a>
                        </div>    
                    </div> 
                  </td>
                </tr>
<!--
===============================================================================================            
            DISH 2
===============================================================================================
-->
                <tr>
                  <td>
                    <div class="ui stackable grid">
                        <div class="six wide column">
                            Chicken Roll
                        </div>
                        <div class="two wide column">
                            <i class="rupee sign icon"></i>60.00
                        </div>
                        <div class="two wide column">
                            0
                        </div>
                        <div class="two wide column">
                            <div class="ui ignored icon font buttons">
                                <button class="ui tiny green inverted button"><i class="plus icon"></i></a>
                                <button class="ui tiny red   inverted button"><i class="minus icon"></i></a>
                            </div>
                        </div>
                         <div class="two wide column">
                            <i class="rupee sign icon"></i>0.00
                        </div>
                        <div class="two wide column">
                            <a href="#" id="dish2Button"><i class="ellipsis horizontal icon"></i></a>
                        </div>    
                    </div> 
                  </td>
                </tr>
<!--
===============================================================================================            
            DISH 3
===============================================================================================
-->
                <tr>
                  <td>
                    <div class="ui stackable grid">
                        <div class="six wide column">
                            Paneer Roll
                        </div>
                        <div class="two wide column">
                            <i class="rupee sign icon"></i>60.00
                        </div>
                        <div class="two wide column">
                            0
                        </div>
                        <div class="two wide column">
                            <div class="ui ignored icon font buttons">
                                <button class="ui tiny green inverted button"><i class="plus icon"></i></a>
                                <button class="ui tiny red   inverted button"><i class="minus icon"></i></a>
                            </div>
                        </div>
                         <div class="two wide column">
                            <i class="rupee sign icon"></i>0.00
                        </div>
                        <div class="two wide column">
                            <a href="#" id="dish3Button"><i class="ellipsis horizontal icon"></i></a>
                        </div>    
                    </div> 
                  </td>
                </tr>
<!--
===============================================================================================            
            DISH 4
===============================================================================================
-->
                <tr>
                  <td>
                    <div class="ui stackable grid">
                        <div class="six wide column">
                            Double Egg Roll
                        </div>
                        <div class="two wide column">
                            <i class="rupee sign icon"></i>65.00
                        </div>
                        <div class="two wide column">
                            0
                        </div>
                        <div class="two wide column">
                            <div class="ui ignored icon font buttons">
                                <button class="ui tiny green inverted button"><i class="plus icon"></i></a>
                                <button class="ui tiny red   inverted button"><i class="minus icon"></i></a>
                            </div>
                        </div>
                         <div class="two wide column">
                            <i class="rupee sign icon"></i>0.00
                        </div>
                        <div class="two wide column">
                            <a href="#" id="dish4Button"><i class="ellipsis horizontal icon"></i></a>
                        </div>    
                    </div> 
                  </td>
                </tr>
<!--
===============================================================================================            
            DISH 5
===============================================================================================
-->
                <tr>
                  <td>
                    <div class="ui stackable grid">
                        <div class="six wide column">
                            Egg Chicken Roll
                        </div>
                        <div class="two wide column">
                            <i class="rupee sign icon"></i>80.00
                        </div>
                        <div class="two wide column" id="EggChickenDiv">
                            0
                        </div>
                        <div class="two wide column">
                            <div class="ui ignored icon font buttons">
                                <button class="ui tiny green inverted button" id="EggChickenInc"  onclick="increase(this);"><i class="plus icon"></i></a>
                                <button class="ui tiny red   inverted button" id="EggChickenDesc" onclick="increase(this);"><i class="minus icon"></i></a>
                            </div>
                        </div>
                         <div class="two wide column">
                            <p id="EggChickenCostDiv"><i class="rupee sign icon"></i>0.00</p>
                        </div>
                        <div class="two wide column">
                            <button class="ui blue button" id="dish5Button">Info</button>
                        </div>    
                    </div> 
                  </td>
                </tr>

            </tbody>
      
            <tfoot>
                <th>
                    <button class="ui inverted blue button" id="NeedHelpButton">REVIEW ORDER</button>
                </th>
            </tfoot>
        </table>
    </div>
    
</body>  
<!--
================================================================================================
                                      START   FOOTER
================================================================================================
-->
<footer>
    <div class="ui inverted vertical footer segment" id="footer">
        <div class="ui center aligned container">
            <div class="ui stackable inverted divided grid">
                <div class="three wide column">
                    <h4 class="ui inverted header">Group 1</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Link One</a>
                            <a href="#" class="item">Link Two</a>
                            <a href="#" class="item">Link Three</a>
                            <a href="#" class="item">Link Four</a>
                        </div>
                    </div>
                    <div class="three wide column">
                        <h4 class="ui inverted header">Group 2</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Link One</a>
                            <a href="#" class="item">Link Two</a>
                            <a href="#" class="item">Link Three</a>
                            <a href="#" class="item">Link Four</a>
                        </div>
                    </div>
                    <div class="three wide column">
                        <h4 class="ui inverted header">Group 3</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Link One</a>
                            <a href="#" class="item">Link Two</a>
                            <a href="#" class="item">Link Three</a>
                            <a href="#" class="item">Link Four</a>
                        </div>
                    </div>
                    <div class="seven wide column">
                        <h4 class="ui inverted header">Footer Header</h4>
                        <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                    </div>
                </div>
                <div class="ui inverted section divider"></div>
                <img src="https://semantic-ui.com/examples/assets/images/logo.png" class="ui centered mini image">
                <div class="ui horizontal inverted small divided link list">
                    <a class="item" href="#">Site Map</a>
                    <a class="item" href="#">Contact Us</a>
                    <a class="item" href="#">Terms and Conditions</a>
                    <a class="item" href="#">Privacy Policy</a>
                </div>
            </div>
        </div>
</footer>

<!--
================================================================================================
                                      END  HEADER
================================================================================================
-->


<!--
================================================================================================
                                      START NEED HELP PART
ALL THE IMPORTANT THINGS OF HOW TO RUN THE SITE WILL BE WRITTEN HERE!! 
================================================================================================
-->

<div class="ui modal" id="NeedHelp">
  <div class="header">Header</div>
    <div class="scrolling content">
        <p id="one"></p>
    </div>
  <div class="actions">
    <div class="ui cancel inverted red button">CLOSE</div>
  </div>
</div>


<div class="ui modal" id="Dish1">
  <div class="header">DISH 1</div>
    <div class="scrolling content">
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
    </div>
  <div class="actions">
    <div class="ui cancel inverted red button">CLOSE</div>
  </div>
</div>

<div class="ui modal" id="Dish2">
  <div class="header">DISH 2</div>
    <div class="scrolling content">
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
    </div>
  <div class="actions">
    <div class="ui cancel inverted red button">CLOSE</div>
  </div>
</div>

<div class="ui modal" id="Dish3">
  <div class="header">DISH 3</div>
    <div class="scrolling content">
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
    </div>
  <div class="actions">
    <div class="ui cancel inverted red button">CLOSE</div>
  </div>
</div>

<div class="ui modal" id="Dish4">
  <div class="header">DISH 4</div>
    <div class="scrolling content">
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
    </div>
  <div class="actions">
    <div class="ui cancel inverted red button">CLOSE</div>
  </div>
</div>

<div class="ui modal" id="Dish5">
  <div class="header">DISH 5</div>
    <div class="scrolling content">
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
        <p>Very long content goes here</p>
    </div>
  <div class="actions">
    <div class="ui cancel inverted red button">CLOSE</div>
  </div>
</div>
<!--
================================================================================================
                                      END  NEEDHELP
================================================================================================
-->
<script src="main.js"></script>  