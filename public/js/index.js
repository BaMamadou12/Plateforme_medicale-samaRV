//changer la position du header en position statique

document.onscroll = function (e){
    if(scrollY > 20){
        document.querySelector('header').classList.add("nav");
        document.querySelector('body').style = "padding-top: 88px;";
    }else if(scrollY < 5){
        document.querySelector('header').classList.remove("nav");
        document.querySelector('body').style = "";
    }
}


// Messages éphémères : le message disparait après 5 seconds
closer = document.querySelector("#closer")
main = document.querySelector("main")

document.body.onload = function(){
  setTimeout(function() {
      if(closer && main){
          main.removeChild(closer);
      }
  }, 5000)
};


// observation : suivi et planification des rendez-vous futurs ou non
obs1 = document.querySelector("#obs1")
obs2 = document.querySelector("#obs2")
obsContainer = document.querySelector("#obs-container");

obs2.addEventListener('click', function(e){
    e.preventDefault();
    this.classList.add("bg-green-400")
    obs1.classList.remove("bg-green-400")
    obsContainer.innerHTML = `<input type="hidden" name="observation" value="patient no suivi.">`;
})

obs1.addEventListener('click', function(e){
    e.preventDefault();
    this.classList.add("bg-green-400")
    obs2.classList.remove("bg-green-400")
    obsContainer.innerHTML = `
                    <label for="" class="text-[small] font-kanit">Prochain RV : </label>
                    <input type="date" name="observation" class="bg-green-50 grow px-4 py-1 rounded-lg text-xs
                    border border-gray-300 w-[70%]
                    outline-none focus:border-[#2ea8bf] transition duration-100 ease">`;
})


// Ajouter un symptome specifique
parent = document.querySelector("#sympt-container");
addSympt = document.querySelector("#add-sympt");
ul = document.querySelector("#sympt-parent");
let deleteSympt;


addSympt.addEventListener('click', function(e){
    e.preventDefault();
    let sympt = document.querySelector("#sympt");
    let li;
    let input;
    if (sympt.value) {
        let size = document.querySelectorAll("#sympt-container input").length;
        li = document.createElement('li');
        li.className = "flex gap-4 items-center px-4 py-0.5 bg-green-50 rounded-full";
        li.innerHTML = `
            <p>${sympt.value}</p>
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                 width="16" class="cursor-pointer">
                <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224
                224-56 56-224-224-224 224Z"/></svg>
        `;
        ul.appendChild(li);
        // type="checkbox" name="symp1" id="sympt" value="maux_de_tete"
        let input = document.createElement('input');
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'sympt'+(size + 1));
        input.setAttribute('id', 'sympt'+(size + 1));
        input.value = sympt.value;
        parent.appendChild(input);
        sympt.value = "";

        // supprimer des symptomes
        deleteSympt = document.querySelectorAll("#sympt-parent li svg");
        deleteSympt.forEach((item)=>{
            item.addEventListener("click", (e)=>{
                // let size = document.querySelectorAll("#sympt-container input").length;
                let val = e.currentTarget.parentNode.children[0].textContent;
                let inputs = document.querySelectorAll("#sympt-container > input");
                let cible ;
                inputs.forEach(item => {
                    if(item.value === val){
                        document.querySelector("#sympt-container").removeChild(item);
                    }
                })
                if(e.currentTarget.parentNode.parentNode){
                    e.currentTarget.parentNode.parentNode.removeChild(e.currentTarget.parentNode);
                }
                reorganize ();

            })
        })
    }

});
function reorganize (){
    let x = document.querySelectorAll("#sympt-container > input");
    let i = 12;
    if(x){
        x.forEach(( item) =>{
            item.setAttribute('name', 'sympt'+ i)
            item.setAttribute('id', 'sympt'+ i)
            i++;
        })

    }
}


// filtrer par region
function f(){
    document.getElementById("filter").submit();
}




