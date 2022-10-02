// experimenting with array and data in javascript
let book = {
  data: [
    {
      bookname: "Shoe Dog",
      category: "Business",
      Author: "Phil Knight",
    },
    {
      bookname: "Ikigai",
      category: "Self-Help",
      Author: "Hector Garcia",
    },
    {
      bookname: "letters to God",
      category: "Religion",
      Author: "Norhafsah Hamid",
    },
    {
      bookname: "Conversations with Tunku Abdul Rahman",
      category: "History",
      Author: "Tan Sri Abdullah Ahmad",
    },
    {
      bookname: "After Steve",
      category: "Business",
      Author: "Tripp Mickle",
    },
    {
      bookname: "The Psychology of Money",
      category: "Self-Help",
      Author: "Morgan Housel",
    },
    {
      bookname: "The Changing World Order",
      category: "Business",
      Author: "Ray Dalio",
    },
    {
      bookname: "Surrounded by Idiots",
      category: "Self-Help",
      Author: "Thomas Eriksen",
    },
    {
      bookname: "Prince of Pirate",
      category: "History",
      Author: "Carl Trocki",
    },
    {
      bookname: "When the Stars come out",
      category: "Kids",
      Author: "Nicola Edwards",
    },
  ]
}

// filter function. still in development & lots of bug. Need to read doc more
function filterBook(value) {
  let buttons = document.querySelectorAll('.sidebar-cat');
  buttons.forEach((button) => {
    if (value.toUpperCase() == button.innerText.toUpperCase()){
      button.classList.add('active');
    } else {
      button.classList.remove('active');
    }
  })

  let elements = document.querySelectorAll('.box');

  elements.forEach((element) => {
    if(value == 'all'){
      element.classList.remove('hide');
    } else {
      if (element.classList.contains(value)){
        element.classList.remove('hide');
      } else {
        element.classList.add('hide')
      }
    }
  })
}