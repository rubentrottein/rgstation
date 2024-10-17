/*Produits Exemples*/
class Product{
    constructor(id, name, console, price, desc, img){
        this.id=id,
        this.name= name, 
        this.console= console, 
        this.price= price, 
        this.desc= desc, 
        this.img= img
    }
};

let product0  = new Product(0,"Phantom Brave", 49.90, "Playstation 2", "Tactical-RPG By Nippon Ichi Software", "media/products/img0.jpg");
let product1  = new Product(1,"Mystical Ninja Starring Goemon", "Nintendo 64", 19.90, "J-RPG By Konami", "media/products/img1.jpg");
let product2  = new Product(2,"Eternal Darkness : Sanity's Requiem","Gamecube", 79.90, "Action/Adventure by Silicon Knights", "media/products/img2.jpg");
let product3  = new Product(3,"Wario Ware : Smooth Moves","Wii", 14.90, "Party Game By Nintendo", "media/products/img3.jpg");
let product4  = new Product(4,"Star Ocean : The Last Hope","XBOX 360", 19.90, "J-RPG By Square-Enix", "media/products/img4.webp");
let product5  = new Product(5,"Resonance Of Fate","Playstation 3", 24.90, "J-RPG By Sega", "media/products/img5.jpg");
let product6  = new Product(6,"Xenoblade Chronicles X","Wii U", 24.90, "J-RPG By Monolith Soft.", "media/products/img6.jpg");
let product7  = new Product(7,"Final Fantasy Advance A2 : Grimoire of the rifts","Nintendo DS", 59.90, "Tactical-RPG By Square Enix", "media/products/img7.jpg");
let product8  = new Product(8,"Dragon Quest VII : La Quête des Vestiges du Monde","Nintendo 3DS", 99.90, "J-RPG By Square Enix", "media/products/img8.jpg");
let product9  = new Product(9,"Tales Of Eternia","PSP", 24.90, "A-RPG By Namco", "media/products/img9.jpg");
let product10 = new Product(10,"Gravity Rush","PSVita", 29.90, "Action By Sony", "media/products/img10.webp");
let product11 = new Product(11,"Kingdom Hearts III","Playstation 4", 14.90, "Action-RPG By Square Enix", "media/products/img11.jpg");
let product12 = new Product(12,"Astral Chain edition Collector","Nintendo Switch", 99.90, "Beat them all By Platinum Games", "media/products/img12.jpg");
let product13 = new Product(13,"F-Zero","Super Nintendo", 25.90, "Course By Nintendo", "media/products/img13.jpg");
let product14 = new Product(14,"Pokemon Version Argent","Game Boy Color", 25.90, "J-RPG By Nintendo", "media/products/img14.png");
let product15 = new Product(15,"The Legend of Zelda: Link's Awakening","Game Boy Color", 25.90, "A-Rpg By Nintendo", "media/products/img15.jpg");
let product16 = new Product(16,"MarioKart : Super Circuit","Game Boy Advance", 25.90, "Course By Nintendo", "media/products/img16.jpg");
let product17 = new Product(21,"Shin Megami Tensei : Lucifer's Call", "Playstation 2", 49.90, "J-RPG By Atlus", "media/products/img21.jpg");

let products= [product1,product2,product3,product4,product5,product6,product7,product8,product9,product10,product11,product12,product13,product14, product15,product16,product17];

for(let i=0; i<products.length;i++){
    productTable.innerHTML += `
    <tr>
        <td>`+ products[i].id +`</td>
        <td>`+ products[i].name +`</td>
        <td>`+ products[i].console +`</td>
        <td>`+ products[i].price +`€</td>
        <td>`+ products[i].desc +`</td>
        <td><img src="`+ products[i].img +`"></td>
    </tr>
    `
}

/*LightBox*/
document.getElementsByTagName("body")[0].innerHTML +=`
<section id="lightbox">
    <img id="lightboxImg" src="">
</section>`;

let lightbox=document.getElementById("lightbox");
let lightboxImg=document.getElementById("lightboxImg");
let images=document.getElementsByTagName("img");

for (let i=0;i<images.length;i++){
    images[i].addEventListener("click", function(e){
        lightBox(this);
    });
};

function lightBox(img){
    lightboxImg.src=img.src;
    lightbox.style.display= "block";
};

lightbox.addEventListener('click', function(e){
    lightbox.style.display= "none";
});