/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


let francais = document.getElementById("francais");
let title = document.getElementById("title");
francais.onclick = ()=>{
    setLanguage("francais");
};
function setLanguage(getLanugage){
    if(getLanugage === "francais"){
        title.innerHTML = "Issam";
    }
}