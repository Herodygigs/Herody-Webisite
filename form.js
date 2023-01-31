document.getElementById("callFormBtn").addEventListener("click",function(){
    document.querySelector(".form").style.display = "flex";
})
document.querySelector(".closed").addEventListener("click",function(){
    document.querySelector(".form").style.display = "none";
})