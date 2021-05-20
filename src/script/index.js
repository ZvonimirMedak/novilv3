
const addToCart=(inputID)=>{
  //increment ++
    const ul = document.getElementById("cartList");
    let li = document.createElement("li")
    li.className = `${inputID.id}-li`
    li.innerHTML = createItem(inputID);
    ul.appendChild(li)
    changeItemState(inputID.id,true);
}

const changeItemState=(name,state)=>{
    document.getElementById(`${name}_button`).disabled = state;
}

const createItem=(inputID)=>{
  const name = inputID.id;
  const actualName = document.querySelector(`#${name}ID`).textContent;
  console.log(actualName);
  const price = document.getElementById(`${name}_price`).innerText;
  const amount = inputID.value;
  const total = parseInt(amount) * parseInt(price);
  return `
    <img src="src/assets/${name}.png"> 
    <div class="flex-wrap">
    <div class="flex-box-cart">
    <p class="item_name">${actualName}</p>
    <button class="exit-button" onclick="removeItem(${name})">x</button>
    </div>
    <p class="item_price">Cijena: <span class="weight">${total},00 kn</span></p>
    <p class="item_quantity">Količina: <span class="weight">${amount}</span></p>
    </div>
  `
}

const toggleCart=()=>{
  const cart = document.getElementById("cartList");
  if(cart.style.display === "inline"){
    cart.style="display:none;"
  }else{
    cart.style="display:inline;"
  }
}

const removeItem=(name)=>{
  // inrecement --
  const item = document.getElementsByClassName(`${name.id}-li`);
  item[0].remove();
  changeItemState(name.id,false);
}