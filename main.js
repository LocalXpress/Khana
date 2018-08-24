    var EggChicken  =   0;
    var DoubleEgg   =   0;
    var TotalCost   =   0;

    function display()
    {
        EggChickenDiv.innerHTML     =   (EggChicken);
        EggChickenCostDiv.innerHTML =   '<i class="rupee sign icon"></i>'+(EggChicken*80);

        DoubleEggDiv.innerHTML      =   (DoubleEgg);
        DoubleEggCostDiv.innerHTML  =   '<i class="rupee sign icon"></i>'+(DoubleEgg*65);
    }
<<<<<<< HEAD
    $("#reviewOrder").click(function(){
       /* $('#reviewModal').modal('show');*/
        $("#TableBody").addClass("animated fadeOutLeft").css("display","none");
        $("#order_list_wrapper").css("display","block").addClass("animated fadeInLeft");
        $("#one").html("Egg Chicken Roll: "+EggChicken+" x 80.00 = "+(EggChicken*80));
=======
    $("#NeedHelpButton").click(function(){
        $('#NeedHelp').modal('show');
        $("#one").html("Egg Chicken Roll: " +EggChicken+    " x 80.00 = "   +(EggChicken*80));
        $("#two").html("Double Egg Roll: "  +DoubleEgg+     " x 65.00 = "   +(DoubleEgg*65));
>>>>>>> 668a27bdf2604bb907df321c1f599f1761bebed1
 
    });
    $("#backToMenu").click(function(){
        $("#order_list_wrapper").removeClass("animated fadeInLeft").addClass('animated bounceOutLeft').css("display","none");
        $("#TableBody").css("display","block").removeClass("animated fadeOutLeft").addClass("animated fadeInLeft");
    });

    $("#dish1Button").click(function(){$('#Dish1').modal('show');});
    $("#dish2Button").click(function(){$('#Dish2').modal('show');});
    $("#dish3Button").click(function(){$('#Dish3').modal('show');});
    $("#dish4Button").click(function(){$('#Dish4').modal('show');});
    $("#dish5Button").click(function(){$('#Dish5').modal('show');});
    $("#TableBody").focus();

    function increase(element) {
      var x = element.id;
            if(x=='EggChickenDesc' && EggChicken!=0)
                {   EggChicken--; display(); }
        else if(x=='EggChickenInc' && EggChicken<=9)
            {   EggChicken++; display();}
        else if(x=='DoubleEggInc' && DoubleEgg<=9)
            {   DoubleEgg++; display();}
        else if(x=='DoubleEggDesc' && DoubleEgg!=0)
            {   DoubleEgg--; display();}
        
    }