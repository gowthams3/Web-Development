var listItem = document.getElementById('list');

var btn = document.getElementById('add-item');

var myFrm = document.getElementById('myForm');

var updateBtn = document.getElementById('update-btn');

var removeBtn = document.getElementById('remove-btn')

btn.addEventListener('click', function(){

    var inputField = document.getElementById('text-input');
    var result = inputField.value;

if(!result=="")
{
    var newListItem = document.createElement('li');

var textNode = document.createTextNode(result);

newListItem.appendChild(textNode);

newListItem.id = "item " + (listItem.childElementCount + 1);

listItem.append(newListItem);

console.log(listItem.childElementCount); 
}
else{
    alert("Please Enter the Task");
}
myFrm.reset();
})

updateBtn.addEventListener('click', function(){
    var firstElement = listItem.firstElementChild;
})