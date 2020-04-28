const teaserProd=document.getElementsByClassName('teaserProd')[0];
const url=`./src/data/prod.json`;
fetch(url)
.then(response => response.json())
.then((data) =>{
    for(let key = 0; key < 4;key++){
      teaserProd.innerHTML +=`
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="${data[key].src}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">${data[key].name}</h5>
          <h5 class="card-title">$<span class="price">${data[key].price}</span></h5>
          <a href="#" data-toggle="modal" data-target="#myModal" class="shopBtn addToCart">Add to Cart</a>
        </div>
      </div>
      `;
    }
        // Adding product to localstorage
const addToCart = document.getElementsByClassName('addToCart');
let productsIn = []; 
let obj = {};
for(let i=0; i < addToCart.length; i++){
    addToCart[i].addEventListener( 'click' , function(e){
        let q;

        // Targeting the clicked product
        let presentData = JSON.parse(localStorage.getItem(`product${i}`));
          if(presentData === null){
            q=1;
          }
          else{
            q = presentData.quantity;
            q++;
          }

       
        let temp = e.target.parentElement;

          // Create an object
        obj = {
            src: temp.parentElement.children[0].src,
            name:temp.children[0].innerText,
            price:temp.children[1].children[0].innerText,
            quantity:q
        };


        // Push to localstorage
        localStorage.setItem(`product${i}`,JSON.stringify(obj));
    })
}



});

const products=document.getElementsByClassName('products')[0];
fetch(url)
.then(response => response.json())
.then((data) =>{
    for(let key = 5; key < data.length;key++){
      products.innerHTML +=`
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="${data[key].src}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">${data[key].name}</h5>
          <h5 class="card-title">$<span class="price">${data[key].price}</span></h5>
          <a href="#" data-toggle="modal" data-target="#myModal" class="shopBtn addToCart">Add to Cart</a>
        </div>
      </div>
      `;
    }

    // Adding product to localstorage
const addToCart = document.getElementsByClassName('addToCart');
let productsIn = []; 
let obj = {};
for(let i=0; i < addToCart.length; i++){
    addToCart[i].addEventListener( 'click' , function(e){
        let q;

        // Targeting the clicked product
        let presentData = JSON.parse(localStorage.getItem(`product${i}`));
          if(presentData === null){
            q=1;
          }
          else{
            q = presentData.quantity;
            q++;
          }

       
        let temp = e.target.parentElement;

          // Create an object
        obj = {
            src: temp.parentElement.children[0].src,
            name:temp.children[0].innerText,
            price:temp.children[1].children[0].innerText,
            quantity:q
        };

        // Push to localstorage
        localStorage.setItem(`product${i}`,JSON.stringify(obj));
    })
}




});

