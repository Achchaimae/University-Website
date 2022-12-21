function required()
{
    console.log(name);
var name= document.form1.text.value;
var email = document.form1.email.value;
var comment = document.form1.message.value;
if (name== "")
{
alert("Please input a Value");
return false;
}
else 
{
alert('Your form has been submitted');
console.log('Your form has been submitted');
return true; 
}
}
// function myfct(){
//     if (required() == true) {
//         alert('your message has been sent');
//     }
//     // alert('your message has been sent');
// }
// function required()
// {
// var empt = document.form1.text1.value;
// if (empt === "")
// {
// alert("Please input a Value");
// return false;
// }
// else 
// {
// alert('Code has accepted : you can try another');
// return true; 
// }
// }