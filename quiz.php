<?php

function evaluateQuiz( array $questions, array $answers ) : int{
  $score = 0 ;
  foreach( $questions as $index => $question ) {
    if ($answers[$index] === $question['correct']){
        $score ++;
    }
  }
  return $score ;

}



$questions = [

    
    ['questions' => 'what is 2+2   ?' ,    'correct'=>'4'],
    
    ['questions' => 'what is the capital of france ?' ,    'correct'=>'paris'],
    
    ['questions' => 'who wrotes "hamlet"  ? ' ,    'correct'=>'shakespeare']
    
    
];

$answer = [] ;
foreach($questions as $index => $question) {
    echo($index+1 ) . "." . $question['questions']. "\n";
    $answer [] = trim(readline("your answer  : "));
    
}
$score = evaluateQuiz( $questions, $answer );


echo "\n you scored $score out of"  . count ($questions)    . ". \n";

if ($score === count($questions)){
    echo "Excellent Job! \n";

}elseif($score  >   1){
    echo "Good Effort ! \n" ;
}   else{
    echo "your result is failed! \n";
} 