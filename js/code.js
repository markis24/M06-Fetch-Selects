

let opt = document.createElement('option');

opt.value= el.id;
opt.text= el.nom;

document.getElementById("cat2").appendChild(opt);

let formData = new FormData();
formData.append("cat1", this.value);

let options = {
          method: 'POST',
           body: formData
      }
      
fetch("getSubCats.php", options)
        .then((response) => response.json())
        .then((data) => {})


        .catch((error) => {});


        