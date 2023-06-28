function showSelectedBook(data) {
    const drop_down = document.querySelector('#category');
    for (key in data.categories) {
        const option = document.createElement('option');
        option.value = data.categories[key].title;
        option.innerHTML = data.categories[key].title;
        drop_down.appendChild(option);
    }
    drop_down.onclick = () => {
        const cards = document.getElementsByClassName('card');
        for (let i = 0; i < cards.length; i++) {
            const card_category = cards[i].querySelector('#card_category');
            if ((card_category.innerHTML == drop_down.value) || (drop_down.value == 'All Category'))
                cards[i].style.display = 'block';
            else
                cards[i].style.display = 'none';
        }
    }
}

fetch("data/book_categories.json")
    .then(response => { console.log(response); return response.json() })
    .then(data => showSelectedBook(data));
