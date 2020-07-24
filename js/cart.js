// show the cart working 100%
(function (){
   const cartInfo=document.querySelector("#cart-info");
   const cart=document.querySelector ("#cart");
   const cartOverlay= document.querySelector("div.cart-overlay");
   // console.log(cart);
   // console.log(cartInfo);
   // console.log(closeCart);
   cartInfo.addEventListener('click',function(){     
       cart.classList.toggle('showCart');
       cartOverlay.classList.toggle('transparentBcg');
   });
    })();
// show the dropdown of profile_dd bug here
(function (){
   const profileBtn=document.querySelector("#profileIconWrap");
   const profileDd=document.querySelector("#profileDd");
   console.log(profileBtn);
   console.log(profileDd);
       profileBtn.addEventListener('click',function(){
         profileDd.classList.add('profileActive');
    });
    })();
    // adding items
   //  (function (){
   //     let somme = 0;
   //    addBtn = document.querySelectorAll(".bag-btn");
   //    // console.log(addBtn);
   //    addBtn.forEach(function(btn) {
   //       btn.addEventListener("click",function(event){
   //          // console.log(event.target);
   //          if(event.target.classList.contains("bag-btn"))
   //          {
   //             let fullPath=event.target.previousElementSibling.src;
   //             const item ={};
   //             item.img = fullPath;
   //             // console.log(item);
   //             let name= event.target.parentElement.nextElementSibling.nextElementSibling.firstChild.textContent;  
   //             let price= event.target.parentElement.nextElementSibling.nextElementSibling.children[1].textContent;         
   //             let pos = price.indexOf("DH");
   //             let finalPrice = price.slice(0,pos-price.length);
   //             let price_item = finalPrice.replace("DH","");
   //             somme +=parseInt(price_item);
   //             item.name =name ;
   //             item.price =price ;
   //             // console.log(item);
   //             // console.log(finalPrice);
               
   //             const cartItem =document.createElement('div');
   //             cartItem.classList.add('cart-item');
   //             cartItem.innerHTML= '<img src="'+item.img+'" alt="test"> <div> <h4>'+item.name+'</h4><h5>'+item.price+'</h5><span class="remove-item">Supprimer</span></div></div><div><i class="fas fa-chevron-up"></i><p class="item-amount">1</p><i class="fas fa-chevron-down"></i></div>';
   //             const cart =document.getElementById('cart');
   //             const total = document.querySelector('.cart-footer');
   //             const cartTotal = document.querySelector('.cart-total');
   //             cart.insertBefore(cartItem,total);
   //             cartTotal.innerHTML=somme;
   //             alert ("item added");              
               
          
   //          }
   //       });
         
   //    });
      
   //     })();

