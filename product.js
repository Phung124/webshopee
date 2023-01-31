//product//
const bigImg = document.querySelector(".product_content-left-big-img img")
const smallmg = document.querySelectorAll(".product_content-left-small-img img")
smallmg.forEach(function(imgItem,X){
    imgItem.addEventListener("click",function(){
        bigImg.src = imgItem.src
    })
})

const baoquan = document.querySelector(".baoquan")
const chitiet = document.querySelector(".chitiet")
if(baoquan){
    baoquan.addEventListener("click",function(){
        document.querySelector(".product_content-right-product_bottom-content-chitiet").style.display ='none'
        document.querySelector(".product_content-right-product_bottom-content-baoquan").style.display ='block'
        
    })
}
if(chitiet){
    chitiet.addEventListener("click",function(){
        document.querySelector(".product_content-right-product_bottom-content-chitiet").style.display ='block'
        document.querySelector(".product_content-right-product_bottom-content-baoquan").style.display ='none'
        
    })
}
const button = document.querySelector(".product_content-right-product_bottom-top")
if(button){
    button.addEventListener("click",function(){
        document.querySelector(".product_content-right-product_bottom-content-big").classList.toggle("activeB")
    })
}