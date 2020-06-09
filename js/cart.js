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
// show the dropdown of profile_dd
(function (){
   const profileBtn=document.querySelector("#profileIconWrap");
   const profileDd=document.querySelector ("#profileDd");
   console.log(profileBtn);
   console.log(profileDd);
       profileBtn.addEventListener('click',function(){
         alert("it's working");
        profileDd.classList.toggle('profile-active');
    });
    })();
    // adding items to the cart 
    (function (){
        const bagbtn=document.getElementsByClassName('bag-btn');
        console.log(bagbtn);
       for(var i=0;i<bag-btn.length)
        bagbtn.addEventListener('click',function(){
           alert("ikahn");
        });
        

         })();
