<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Master Khana || Project</title>
	<link rel="stylesheet" type="text/css" href="css/semantic.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php include_once 'trimmed/header.php'; ?>

<div id="TableBody">
	<table class="ui single line table">
		<thead >
			<tr id="FullScreenHeader">
				<th class="table_item_header">ITEM</th>
				<th>COST</th>
				<th>NUMBER</th>
				<th>ORDER</th>
				<th>TOTAL COST</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Egg Roll</td>
				<td><i class="rupee sign icon"></i>45</td>
				<td>0</td>
				<td>
					<div class="ui ignored icon font buttons">
						<button class="ui tiny green inverted button"><i class="plus icon"></i></button>
						<button class="ui tiny red   inverted button"><i class="minus icon"></i></button>
					</div>
				</td>
				<td>
					<i class="rupee sign icon"></i>0.00
				</td>
				<td>
					<span id="dish1Button"><i class="ellipsis horizontal icon"></i></span>
				</td>
			</tr>
			<tr>
				<td>Chicken Roll</td>
				<td><i class="rupee sign icon"></i>60</td>
				<td>0</td>
				<td>
					<div class="ui ignored icon font buttons">
						<button class="ui tiny green inverted button"><i class="plus icon"></i></button>
						<button class="ui tiny red   inverted button"><i class="minus icon"></i></button>
					</div>
				</td>
				<td>
					<i class="rupee sign icon"></i>0.00
				</td>
				<td>
					<span id="dish2Button"><i class="ellipsis horizontal icon"></i></span>
				</td>
			</tr>
			<tr>
				<td>Paneer Roll</td>
				<td><i class="rupee sign icon"></i>60</td>
				<td>0</td>
				<td>
					<div class="ui ignored icon font buttons">
						<button class="ui tiny green inverted button"><i class="plus icon"></i></button>
						<button class="ui tiny red   inverted button"><i class="minus icon"></i></button>
					</div>
				</td>
				<td>
					<i class="rupee sign icon"></i>0.00
				</td>
				<td> 
					<span id="dish3Button"><i class="ellipsis horizontal icon"></i></span>
				</td>
			</tr>
			<tr>
				<td>Egg Chicken Roll</td>
				<td><i class="rupee sign icon"></i>90</td>
				<td id="EggChickenDiv">0</td>
				<td>
					<div class="ui ignored icon font buttons">
						<button class="ui tiny green inverted button" id="EggChickenInc"  onclick="increase(this);"><i class="plus icon"></i></button>
						<button class="ui tiny red   inverted button" id="EggChickenDesc"  onclick="increase(this);"><i class="minus icon"></i></button>
					</div>
				</td>
				<td>
					<i class="rupee sign icon"></i><span id="EggChickenCostDiv">0.00</span>
				</td>
				<td>
					<button id="dish5Button" class="ui blue button">Info</button>
				</td>
			</tr>

		<tfoot>
			<tr>
				<td>
					<button class="ui inverted blue button" id="reviewOrder">REVIEW ORDER</button>
				</td>
			</tr>
		</tfoot>
		</tbody>
	</table>
</div>


<div id="order_list_wrapper" style="background-color: #fff; padding: 10px 15px;">
	<h3 class="ui header" style="background-color: #fbfbfb;">Your Order</h3>
	<div class="container">
		<div class="ui grid">
			<div class="sixteen wide column">
				<h4 class="ui header">Egg roll</h4>
			</div>
			<div class="row">
				<div class="four wide column">
					<span>Egg Chicken Roll</span>
				</div>
				<div class="four wide column">
					<span>quantity</span>
				</div>
				<div class="four wide column">
					<span>cost</span>
				</div>
				<div class="four wide column">
					<span>net amount</span>
				</div>
			</div>
			<div class="row">
				<div class="eight wide column">
					<button class="ui button grey" id="backToMenu">Back</button>
					<button class="ui button green">Checkout</button>
				</div>
			</div>
		</div>
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
<?php include_once 'trimmed/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>
<script src="js/semantic.js"></script>
<script src="js/main.js"></script>
</body>
</html>