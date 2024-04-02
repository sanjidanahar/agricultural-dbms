// Sample product data (Replace this with actual data fetched from the backend)
const products = [
    {
        name: 'Fresh Tomatoes',
        price: '$2.99',
        image: 'tomatoes.jpg',
        description: 'Locally grown, organic tomatoes.'
    },
    {
        name: 'Green Beans',
        price: '$1.49',
        image: 'green_beans.jpg',
        description: 'Crispy and fresh green beans.'
    },
    {
        name: 'Sweet Corn',
        price: '$3.29',
        image: 'sweet_corn.jpg',
        description: 'Juicy and delicious sweet corn.'
    },
    {
        name: 'Red Apples',
        price: '$1.99',
        image: 'red_apples.jpg',
        description: 'Sweet and crunchy red apples.'
    },
    {
        name: 'Carrots',
        price: '$0.99',
        image: 'carrots.jpg',
        description: 'Fresh and nutritious carrots.'
    },
    {
        name: 'Broccoli',
        price: '$2.49',
        image: 'broccoli.jpg',
        description: 'Nutrient-rich broccoli florets.'
    },
    {
        name: 'Lettuce',
        price: '$1.79',
        image: 'lettuce.jpg',
        description: 'Crisp and refreshing lettuce leaves.'
    },
    {
        name: 'Bananas',
        price: '$0.89',
        image: 'bananas.jpg',
        description: 'Ripe and potassium-rich bananas.'
    },
    {
        name: 'Oranges',
        price: '$1.29',
        image: 'oranges.jpg',
        description: 'Sweet and tangy oranges.'
    },
    {
        name: 'Potatoes',
        price: '$0.69',
        image: 'potatoes.jpg',
        description: 'Versatile and delicious potatoes.'
    },
    {
        name: 'Strawberries',
        price: '$3.99',
        image: 'strawberries.jpg',
        description: 'Juicy and sweet strawberries.'
    },
    {
        name: 'Spinach',
        price: '$1.99',
        image: 'spinach.jpg',
        description: 'Nutrient-packed spinach leaves.'
    },
    {
        name: 'Bell Peppers',
        price: '$2.79',
        image: 'bell_peppers.jpg',
        description: 'Colorful and flavorful bell peppers.'
    },
    {
        name: 'Grapes',
        price: '$2.49',
        image: 'grapes.jpg',
        description: 'Sweet and juicy grapes.'
    },
    {
        name: 'Cucumbers',
        price: '$0.79',
        image: 'cucumbers.jpg',
        description: 'Refreshing and hydrating cucumbers.'
    },
    {
        name: 'Onions',
        price: '$0.99',
        image: 'onions.jpg',
        description: 'Versatile and aromatic onions.'
    },
    {
        name: 'Pineapple',
        price: '$2.99',
        image: 'pineapple.jpg',
        description: 'Sweet and tropical pineapple slices.'
    },
    {
        name: 'Blueberries',
        price: '$4.49',
        image: 'blueberries.jpg',
        description: 'Antioxidant-rich blueberries.'
    },
    {
        name: 'Celery',
        price: '$1.49',
        image: 'celery.jpg',
        description: 'Crunchy and low-calorie celery stalks.'
    },
    {
        name: 'Mushrooms',
        price: '$2.19',
        image: 'mushrooms.jpg',
        description: 'Flavorful and versatile mushrooms.'
    },
    // Add more products as needed
];

// Function to dynamically generate product cards
function renderProducts() {
    const productGrid = document.querySelector('.product-grid');

    products.forEach(product => {
        const productCard = document.createElement('div');
        productCard.classList.add('product-card');

        const image = document.createElement('img');
        image.src = `images/${product.image}`;
        image.alt = product.name;
        productCard.appendChild(image);

        const name = document.createElement('h3');
        name.textContent = product.name;
        productCard.appendChild(name);

        const price = document.createElement('p');
        price.textContent = `Price: ${product.price}`;
        productCard.appendChild(price);

        const description = document.createElement('p');
        description.textContent = product.description;
        productCard.appendChild(description);

        productGrid.appendChild(productCard);
    });
}

// Call the renderProducts function when the DOM content is loaded
document.addEventListener('DOMContentLoaded', renderProducts);
