<!-- This project provides practice for:
Creating objects from classes
Writing and using methods
Using static methods -->

<?php 

// 1
class StringUtilities {
  // 2
  public static function secondCase($string){
    // 4
    if(strlen($string) === 0){
      return ""; 
    }else{
      $string = strtolower($string);
      if(strlen($string) === 1){
      return $string;
      }else{
         $string[1] = strtoupper($string[1]); 
         return $string;
      }
    }
  }
}

// 3
echo StringUtilities::secondCase("mirabelka");
echo StringUtilities::secondCase("T");
echo StringUtilities::secondCase("");


// 5
class Pajamas{
  private $owner, $fit, $color;

  function __construct($owner = "None", $fit="Nice", $color="Rotten Green"){
    $this->owner = StringUtilities::secondCase($owner);
    $this->fit = $fit;
    $this->color = $color;
  }

  public function describe(){
    return "$this->owner likes his pijamas $this->color, and usually goes for fit $this->fit.";
  }
  // 10
  public function setFit($newFit){
    $this->fit = $newFit;
  }
}

// 8,9
$chicken_Pjs = new Pajamas("CHICKEN", "twisted", "yellow");
echo $chicken_Pjs->describe();

echo "After washing in hot water...\n"; 
$chicken_Pjs->setFit("too tight");
echo $chicken_Pjs->describe();


// 11
class ButtonablePajamas extends Pajamas{

  private $button_state = "unbottened";
  
  public function describe(){
    return parent::describe()."Always $this->button_state!";
  }

  public function toggleButtons(){
    if($this->button_state === "unbottened"){
      $this->button_state = "bottened";
    }else{
      $button_state = "unbottened";
    }

  }
}

$moose_PJs = new ButtonablePajamas("moose", "loose", "green");
echo $moose_PJs->describe();


