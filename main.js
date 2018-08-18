    var EggChicken  =   0;
    var TotalCost   =   0;

    function display()
    {
        EggChickenDiv.innerHTML     =   (EggChicken);
        EggChickenCostDiv.innerHTML =   '<i class="rupee sign icon"></i>'+(EggChicken*80);
    }
    $("#NeedHelpButton").click(function(){
        $('#NeedHelp').modal('show');
        $("#one").html("Egg Chicken Roll: "+EggChicken+" x 80.00 = "+(EggChicken*80));
 
    });
    








    $("#dish1Button").click(function(){$('#Dish1').modal('show');});
    $("#dish2Button").click(function(){$('#Dish2').modal('show');});
    $("#dish3Button").click(function(){$('#Dish3').modal('show');});
    $("#dish4Button").click(function(){$('#Dish4').modal('show');});
    $("#dish5Button").click(function(){$('#Dish5').modal('show');});

    function increase(element) {
      var x = element.id;
            if(x=='EggChickenDesc' && EggChicken!=0)
                {   EggChicken--; display(); }
        else if(x=='EggChickenInc' && EggChicken<=9)
            {   EggChicken++; display();}
        
    }