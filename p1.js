// optional chain

// const numbers = [12, 12, 1232];
// let num = numbers;

// const customers = [
//     { id: 123, name: "Asraf Vai", city: 'Dhaka' },
//     { id: 123, name: "Asraf Vai", city: 'Dhaka' },
//     { id: 123, name: "Asraf Vai", city: 'Dhaka' },
//     { id: 123, name: "Asraf Vai", city: 'Dhaka' },
//     { id: 123, name: "Asraf Vai", city: 'Dhaka' }
// ];

// console.log(customers[0].city);

const book = {
    date() {
        
    },
    'id': 1233,
    author: {
        address: {
            houseNo: 01,
            city: 'Dhaka',
            name: 'Halim',
            publication: {
                libray:'Maktabul Quran'
            }
        }
    }
    
}

console.log(book.author.address.ublication?.libray);

// keyvalue pair  key: value; 'key':'value';

