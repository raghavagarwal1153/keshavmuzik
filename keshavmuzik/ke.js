
const prompt = require('prompt-sync')();
 
const name = prompt('What is your name?');
console.log(`Hey there ${name}`); 
let i=0,count=0;
while(i<=name.length)
{

if(name[i]===" ")
{
    count++;
}
i++;
} 
console.log(++count);




