let administratie = parseInt(process.argv[2], 10);
let infrastructuur = parseInt(process.argv[3], 10);
let evenementen = parseInt(process.argv[4], 10);
let totaal = parseInt(process.argv[5], 10);

console.log(`Aan administratie en infrastructuur is ${administratie + infrastructuur} miljoen uitgegeven.
\nDe overige kosten zijn ${(totaal - (administratie + infrastructuur + evenementen))} miljoen.
\nAdministratie was goed voor ${((administratie / totaal) * 100)}% van de uitgaven.`);