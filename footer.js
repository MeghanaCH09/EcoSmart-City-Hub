function filterItems() {
    const input = document.getElementById('search-input');
    const filter = input.value.toLowerCase();
    
    const itemList = document.getElementById('item-list');
    
    const items = itemList.getElementsByTagName('li');

    for (let i = 0; i < items.length; i++) {
        const item = items[i];
        const textValue = item.textContent || item.innerText;

        if (textValue.toLowerCase().indexOf(filter) > -1) {
            item.style.display = ""; 
        } else {
            item.style.display = "none"; 
        }
    }
}
