7 lines (10 sloc)  381 Bytes

document.addEventListener("keyup", e=>{

  if (e.target.matches("#buscador")){

      if (e.key ==="Escape")e.target.value = ""

      document.querySelectorAll(".articulo").forEach(juego =>{

          juego.textContent.toLowerCase().includes(e.target.value.toLowerCase())
            ?juego.classList.remove("filtro")
            :juego.classList.add("filtro")
      })

  }


})