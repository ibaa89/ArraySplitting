# ArraySplitting on Mezzio framework
This is a solution for a question from (www.codewars.com) the question is not my own it is from codewars please I advice you to go to this site and try to play coding games and have fun and learn in the same time


Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_'). 

* 'abc' =>  ['ab', 'c_']
* 'abcdef' => ['ab', 'cd', 'ef']



REQUIREMENTS:

1-composer

2- PHP7.4
 
 1- php7.4-mbstring
  
 2- php7.4-dom
  
 
 
 use composer to run the program from the terminal in the root of your project:
  
  
  composer run --timeout=0 serve
 
 
 then you write the following URL on your browser to test
   
   
   localhost:8080/?str=yourStringGoesHere
