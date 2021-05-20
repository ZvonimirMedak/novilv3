const handleCounter = () => {
  let currentValue = 0;
  const increment = () => currentValue += 1;
  const decrement = () => currentValue -= 1;
  const getValue = () => currentValue;
  return {
    increment,
    decrement,
    getValue,
  };
}

const translateItems = (translateY) => {
  const list = Array.from(document.getElementById("cartList").children);
  list.forEach((el)=>{
      el.style=`transform: translateY(${translateY}); transition: all 1s;`
  })
}

const listeners = ()=>{
  let slideUpListener;
  let slideDownListener;

  const attachSlideUpListener=()=>{
    console.log(slideUpListener,slideDownListener)
    if(!slideUpListener){
      slideUpListener = document.getElementById("slideUpButton").addEventListener("click",()=>translateItems('0px'));
    }
  }
  const attachSlideDownListener=()=>{
    if(!slideDownListener){
      slideDownListener = document.getElementById("slideDownButton").addEventListener("click",()=>translateItems('-100px'))
    }
  }

  const killListeners=()=>{
    if(slideUpListener && slideDownListener){
      slideUpListener.removeEventListener("click",translateItems);
      slideDownListener.removeEventListener("click",translateItems)
    }
  }
  return {
    attachSlideDownListener,
    attachSlideUpListener,
    killListeners,
  }

}

const counter = handleCounter();
const evenetListeners = listeners();
const addToCart=(inputID)=>{
    const ul = document.getElementById("cartList");
    let li = document.createElement("li")
    li.className = `${inputID.id}-li`
    li.innerHTML = createItem(inputID);
    ul.appendChild(li)
    document.getElementById('cartAmountID').innerHTML = counter.increment();
    changeItemState(inputID.id,true);
    openCloseSlider();
}

const changeItemState=(name,state)=>{
    document.getElementById(`${name}_button`).disabled = state;
}

const createItem=(inputID)=>{
  const name = inputID.id;
  const actualName = document.querySelector(`#${name}ID`).textContent;
  const price = document.getElementById(`${name}_price`).innerText;
  const amount = inputID.value;
  const total = parseInt(amount) * parseInt(price);
  return `
    <img src="src/assets/${name}.png" alt="${actualName}"> 
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

const openCloseSlider=()=>{
  const counterValue = counter.getValue();
  if(counterValue>3){
      document.getElementById("slideDownButton").style = "display:inline;"
      document.getElementById("slideUpButton").style = "display:inline;"
      evenetListeners.attachSlideDownListener();
      evenetListeners.attachSlideUpListener();
  }else{
      document.getElementById("slideDownButton").style = "display:none;"
      document.getElementById("slideUpButton").style = "display:none;"
      evenetListeners.killListeners()
  }
}

const toggleCart=()=>{
  const cart = document.getElementById("cart");
  if(cart.style.display === "inline"){
    cart.style="display:none;"
  }else{
    cart.style="display:inline;"
  }
}

const removeItem=(name)=>{
  const item = document.getElementsByClassName(`${name.id}-li`);
  item[0].remove();
  document.getElementById('cartAmountID').innerHTML = counter.decrement();
  openCloseSlider();
  translateItems('0px')
  changeItemState(name.id,false);
}