function goTo(dir){
    location.href = dir;
}

// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var modalImg = document.getElementById("img");
var captionText = document.getElementById("caption");

function showModal(caller){
    modal.style.display = "block";
    modalImg.src = caller.src;
    if(caller.dataset.desc !== undefined){
        var text = caller.dataset.desc.split(" ");
        switch(text[0]){
            case "Alvaro":
                captionText.innerHTML = '<h3>' + caller.dataset.desc + '</h3>' + '<p>Él ni siquiera se quedó en la escuela pero aún así lo queremos</p>'
                break;
            case "Ruth":
                captionText.innerHTML = '<h3>' + caller.dataset.desc + '</h3>' + '<p>Ella no es parte del equipo pero por los LOLS</p>';
                break;
            default:
                captionText.innerHTML = '<h3>' + caller.dataset.desc + '</h3>';
        }
    }else {
        captionText.innerHTML = "";
    }
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}