// Messages éphémères
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
size = document.querySelectorAll("#sympt")

