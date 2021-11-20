function addItem(){
    const add = document.getElementsByName(`add`)[0].value;
    const listSb = document.getElementsByClassName(`list-group`)[0];
    const item = document.createElement(`a`)[0];
    item.href = "#";
    item.classList ="list-group-item list-group-item-action";
    item.innerText = add.value;
    listSb.appendChild(item);
}