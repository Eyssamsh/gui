/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


let english = document.getElementById("english");
let title = document.getElementById("title");

english.onclick = ()=>{
    setLanguage1("english");
};
function setLanguage1(getLanugage){
    if(getLanugage === "english"){
        title.innerHTML = "english";
    }
}