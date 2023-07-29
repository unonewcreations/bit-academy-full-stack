let inwonersNL = parseInt(process.argv[2], 10);
let inwonersDE = parseInt(process.argv[3], 10);
let inwonersFR = parseInt(process.argv[4], 10);

let resultMore = inwonersNL < inwonersDE && inwonersNL < inwonersFR;
let resultEqual = inwonersNL > inwonersDE || inwonersFR > inwonersDE;
let resultLess = inwonersNL <= inwonersDE;

console.log(`Nederland heeft minder inwoners dan Duitsland en Frankrijk: ${resultMore}`);
console.log(`Nederland of Frankrijk heeft meer inwoners dan Duitsland: ${resultEqual}`);
console.log(`Het is niet waar dat Nederland meer inwoners heeft dan Duitsland: ${resultLess}`);