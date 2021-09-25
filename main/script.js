const btns =document.querySelectorAll(".categorybtn");
const storeProducts = document.querySelectorAll(".box");

for(i= 0;i< btns.length;i++) {
    btns[i].addEventListener("click", (e) =>  {
        e.preventDefault();

        const filter = e.target.dataset.filter;
        console.log(filter)
        storeProducts.forEach((product) => {
            if (filter == "all"){
                product.style.display ="block"
            }
            else{
                if (product.classList.contains(filter)
                ){
                    product.style.display ="block"
                }else{
                    product.style.display ="none"
                }
            }
        })
    })
}


const search= document.getElementById("search");

search.addEventListener("keyup", (e) =>{
    e.preventDefault();
    const searchV = search.value.toLowerCase().trim();

    for(i=0; i<storeProducts.length; i++){
        if (storeProducts[i].classList.contains(searchV)){
            storeProducts[i].style.display = "block";
        }else if(searchV==""){
            
            storeProducts[i].style.display = "block";
        }else{

            storeProducts[i].style.display = "none";
        }
    }

})