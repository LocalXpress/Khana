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
<!--FOR THE BLURRED BACKGROUND PICTURE-->
<div id="overlay"></div>
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
                        <div class="two wide column" id="DoubleEggDiv">
                            0
                        </div>
                        <div class="two wide column">
                            <div class="ui ignored icon font buttons">
                                <button class="ui tiny green inverted button" id="DoubleEggInc"  onclick="increase(this);"><i class="plus icon"></i></a>
                                <button class="ui tiny red   inverted button" id="DoubleEggDesc"  onclick="increase(this);"><i class="minus icon"></i></a>
                            </div>
                        </div>
                         <div class="two wide column" id="DoubleEggCostDiv">
                            <i class="rupee sign icon"></i>0
                        </div>
                        <div class="two wide column">
                            <button class="ui blue button" id="dish4Button">Info</button>
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
<?php include 'footer.php';?>
<?php include 'modals.php';?>
<script src="main.js"></script>  