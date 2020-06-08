// show the cart 
(function (){
   const cartInfo=document.querySelector("#cart-info");
   const cart=document.querySelector ("#cart");
   const cartOverlay= document.querySelector("div.cart-overlay");
   console.log(cart);
   console.log(cartInfo);
   cartInfo.addEventListener('click',function(){
       cart.classList.toggle('showCart');
       cartOverlay.classList.toggle('transparentBcg');
   })
    })();
   
