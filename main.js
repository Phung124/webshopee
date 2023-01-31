const andressbtn=document.querySelector('#adress_form')
const andressbtn1=document.querySelector('#adress_form-register')
const andressbtn2=document.querySelector('#adress_form1')
const andressbtn3=document.querySelector('#adress_form-register1')
const andressbtn4=document.querySelector('#comeback-login')
const andressbtn5=document.querySelector('#comeback-register')
let index =0
andressbtn.addEventListener("click",function(){
    document.querySelector('#modal').style.display='flex';
    document.querySelector('.auth-form-container1').style.display='block'
    document.querySelector('.auth-form-container').style.display='none'
})
andressbtn1.addEventListener("click",function(){
    document.querySelector('#modal').style.display='flex';
    document.querySelector('.auth-form-container').style.display='block'
    document.querySelector('.auth-form-container1').style.display='none'
})
andressbtn2.addEventListener("click",function(){
    document.querySelector('#modal').style.display='flex';
    document.querySelector('.auth-form-container').style.display='none'
    document.querySelector('.auth-form-container1').style.display='block'
})
andressbtn3.addEventListener("click",function(){
    document.querySelector('#modal').style.display='flex';
    document.querySelector('.auth-form-container1').style.display='none'
    document.querySelector('.auth-form-container').style.display='block'
})
andressbtn4.addEventListener("click",function(){
    
    document.querySelector('.auth-form-container').style.display='none'
    document.querySelector('#modal').style.display='none';
    
})
andressbtn5.addEventListener("click",function(){
    
    document.querySelector('.auth-form-container1').style.display='none'
    document.querySelector('#modal').style.display='none';
    
})
//slider//--------------------------------
const rightbtn=document.querySelector('.fa-chevron-right')
const leftbtn=document.querySelector('.fa-chevron-left')
const imgnumber=document.querySelectorAll('.slider_content-left-top img')
rightbtn.addEventListener("click",function(){
    index=index+1
    if(index>imgnumber.length-1){
        index=0
    }
    document.querySelector('.slider_content-left-top').style.right=index *100+"%";
    
});
leftbtn.addEventListener("click",function(){
    index=index-1
    if(index<0){
        index=imgnumber.length-1
    }
    document.querySelector('.slider_content-left-top').style.right=index *100+"%";
    
})
const imgnumberinput=document.querySelectorAll('.slider_content-left-bottom input')
imgnumberinput.forEach(function(image,index){
    image.addEventListener("click",function(){
        document.querySelector('.slider_content-left-top').style.right=index *100+"%";
        
    })
})
/////////////slider/////////
function imgAuto(){
index=index+1
if(index>imgnumber.length-1){
    index=0
}
document.querySelector('.slider_content-left-top').style.right=index *100+"%";

}
setInterval(imgAuto,5000)

