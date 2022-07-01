let tag = prompt("Wprowadź nazwę elementu DOM lub nazwę klasy (.class, p):");
let objects = document.querySelectorAll(tag);
for(let i = 0; i<objects.length; i++){
    alert(objects[i].textContent);
}
