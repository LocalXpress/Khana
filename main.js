/*    var EggChicken  =   0;
    var TotalCost   =   0;

    function display()
    {
        EggChickenDiv.innerHTML     =   (EggChicken);
        EggChickenCostDiv.innerHTML =   '<i class="rupee sign icon"></i>'+(EggChicken*80);
    }
    function increase(element) {
      var x = element.id;
            if(x=='EggChickenDesc' && EggChicken!=0)
                {   EggChicken--; display(); }
        else if(x=='EggChickenInc' && EggChicken<=9)
            {   EggChicken++; display();}
        
    }*/
    document.querySelector('#price_table').addEventListener('click', ({ target }) => {
          if (target.classList.contains('buttonPlus')) changeNum(target, 1);
          else if (target.classList.contains('buttonMinus')) changeNum(target, -1);
        });
        function changeNum(button, changeBy) {
          const [, priceElm,quantityElm, , totalElm] = button.parentElement.parentElement.parentElement.children;
          const quantity = Number(quantityElm.textContent) + changeBy;
          quantityElm.textContent = quantity;
          const price = Number(priceElm.textContent);
          const total = quantity * price;
          totalElm.textContent = total;
            }

    $("#reviewOrder").click(function(){
       /* $('#reviewModal').modal('show');*/
        $("#TableBody").addClass("animated fadeOutLeft").css("display","none");
        $("#order_list_wrapper").css("display","block").addClass("animated fadeInLeft");
        $("#one").html("Egg Chicken Roll: "+EggChicken+" x 80.00 = "+(EggChicken*80));
 
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

