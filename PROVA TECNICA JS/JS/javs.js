const list = [3, 4, 7, 2, 98, 45];
let minimo = list[0]; 

for (let i = 1; i < list.length; i++) { 
    if (list[i] < minimo) {
        minimo = list[i]; 
    }
}

console.log("Il numero più piccolo nell'array è:", minimo);