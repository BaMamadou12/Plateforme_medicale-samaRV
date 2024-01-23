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

