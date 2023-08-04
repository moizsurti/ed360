const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const sign_in_btn2 = document.querySelector("#sign-in-btn2");
const sign_up_btn2 = document.querySelector("#sign-up-btn2");
sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});
sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});
sign_up_btn2.addEventListener("click", () => {
    container.classList.add("sign-up-mode2");
});
sign_in_btn2.addEventListener("click", () => {
    container.classList.remove("sign-up-mode2");
});




form.onsubmit = (e) =>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    // ajax start
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signUp.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
           if(data == "success"){
             location.href= "index.php";
           }else{
            errorText.textContent = data;
            errorText.style.display = "block";
          }
        }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}