const membres_container = document.querySelector("#membres-container");
 
fetch("http://127.0.0.1:8000/api/membres")
// fetch("http://localhost:8000/api/membres")
  .then((response) => response.json())
  
  .then((data) => {
      console.log(response);
    const membres = data["hydra:member"];

    console.log(membres);
    
    // membres.forEach((membre) => {
    //     console.log(membre);
    //   let membre_box = document.createElement("div");
    //   membre_box.innerHTML = membre.last.toUpperCase() + " " + membre.first;
    //   membres_container.appendChild(membre_box);
    // });
  });