
// totalCalc();
let items = document.getElementsByClassName('items')[0];
for (let i = 0; i < localStorage.length; i++){
    let cartItem = JSON.parse(localStorage.getItem(localStorage.key(i)));
    
    if(cartItem){     
    items.innerHTML += `
                 <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src=${cartItem.src} alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">${cartItem.name}</h5>
                      <h5 class="card-title">$<span class="price">${cartItem.price}</span></h5>
                      <div class="quantity">
                        <i class="fa sign fa-minus"  style="color: white;"></i>
                        <span class="qty">${cartItem.quantity}</span>
                        <i class="fa sign fa-plus" style="color: white;"></i>
                      </div>
                    </div>
                  </div>
    `;
    }

 }let qty = document.getElementsByClassName('qty');

 const minus = document.getElementsByClassName('fa-minus');
 for(let i=0 ; i < localStorage.length ; i++){
     minus[i].addEventListener('click', function(e){
         let parentEl = e.target.parentNode.children[1];
         let temp = JSON.parse(localStorage.getItem(localStorage.key(i)))
         let x = temp.quantity;
         if(parseInt(x)){
             x--;
             parentEl.innerText = x;
             temp.quantity = x;
             localStorage.setItem(localStorage.key(i),JSON.stringify(temp))
         }
         totalCalc();
     });
     
 }
 const plus = document.getElementsByClassName('fa-plus');
 for(let i=0 ; i < localStorage.length ; i++){
     plus[i].addEventListener('click', function(e){
         let parentEl = e.target.parentNode.children[1];
         let temp = JSON.parse(localStorage.getItem(localStorage.key(i)))
         let x = temp.quantity;
             x++;
             parentEl.innerText = x;
             temp.quantity = x;
             localStorage.setItem(localStorage.key(i),JSON.stringify(temp))

             totalCalc();
     });
 
 }
 

 const subTotal = document.getElementsByClassName('subtotalamount')[0];
//  Empty Cart
let empty = document.getElementsByClassName('emptyCart')[0];
empty.addEventListener('click' , function(){
    for(let i =0; i < localStorage.length; i++){
        localStorage.clear();
    }
    items.innerHTML = "";
    subTotal.innerHTML = 0;
    document.getElementsByClassName('totalamount')[0].innerHTML = 2 ;

});

function totalCalc(){
    
    let x=0;
    for(let i =0; i < localStorage.length; i++){
       let flag = JSON.parse(localStorage.getItem(localStorage.key(i)))
        x += parseInt(flag.quantity)*parseInt(flag.price);
        subTotal.innerHTML = x;
    }
    document.getElementsByClassName('totalamount')[0].innerHTML = 2 + parseInt(x);
}