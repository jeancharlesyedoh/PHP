function getmiddle(test)
{
   var taille = test.length;
   var verif = taille%2;
   if(verif== 0)
   {
       test.substr(verif,verif+1);
       console.log(test.substr(verif,verif+1));
   }
   
}

getmiddle(test);